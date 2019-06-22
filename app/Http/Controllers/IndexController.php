<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use App\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Repositories\ImageRepository;
use Illuminate\Support\Facades\Input;
use Exception;

class IndexController extends Controller
{
    /**
     * @var ImageRepository
     */
    private $imageRepository;

    /**
     * IndexController constructor.
     * @param ImageRepository $imageRepository
     */
    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    /**
     * @param Task $task
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Task $task)
    {
        if (\request()->has('status')) {
            $tasks = DB::table('tasks')->where('status', \request('status'))
                ->paginate(3)
                ->appends('status', \request('status'));
        } else {
            $tasks = $task->sortable(['created_at' => 'desc'])->paginate(3);
        }
        return view('task.index', [
            'tasks' => $tasks,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $statuses = Status::all();
        return view('task.create', [
            'statuses' => $statuses,
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $task = new Task();
        try {
            $this->validate($request, [
                'file' => 'mimes:jpg,gif,png',
            ]);

            $task->name = $request->name;
            $task->email = $request->email;
            $task->task = $request->task;
            $task->status = $request->status;
            if (!empty($request->file('file'))) {
                $image = Input::file('file');
                $imgName = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
                $this->imageRepository->uploadImage($image, $imgName);
                $task->images = $this->imageRepository->uploadImage($image, $imgName)->path;
            }

            $task->save();
            return redirect('/task')->with('status', 'Задача успешно добавлена!');
        } catch (Exception $e) {
            return redirect()->back()->with('status', 'Данный тип файла не есть разрешенным');
        }
    }

    /**
     * @param Task $task
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function edit(Task $task)
    {
        if (Auth::check() && Auth::user()->role_id == 1) {
            $statuses = Status::all();
            return view('task.edit', [
                'statuses' => $statuses,
                'task' => $task
            ]);
        } else return redirect('/');
    }

    /**
     * @param Request $request
     * @param Task $task
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Task $task)
    {
        $task->status = $request->status;
        $task->task = $request->task;
        $task->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('task');
    }
}
