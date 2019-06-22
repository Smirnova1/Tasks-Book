<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Task extends Model
{

    use Sortable;

    /**
     * @var array
     */
    public $sortable = ['name', 'email', 'created_at'];

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'task',
        'status',
        'images',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function image()
    {
        return $this->belongsTo('App\Image');
    }
}
