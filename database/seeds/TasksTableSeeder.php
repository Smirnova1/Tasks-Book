<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->delete();

        DB::table('tasks')->insert([
            'name' => 'Новая задача',
            'email' => 'newtask@i.com',
            'task' => 'Lorem, ipsum fusce, sapien leo sagittis ut at magna quisque et fusce, eros - mauris. Adipiscing vitae eget pharetra urna odio ut mauris maecenas vitae vulputate adipiscing, non integer leo. Maecenas bibendum mauris diam sagittis et sodales nec: proin adipiscing gravida arcu sapien eu arcu rutrum, porta donec fusce pellentesque a nibh. Eget amet integer lectus et vitae justo urna, amet sem eros risus maecenas quisque congue arcu metus sed integer sem lectus. Adipiscing ipsum amet eu eros sodales arcu tempus nibh porta. Pellentesque, amet - bibendum curabitur vivamus curabitur metus vulputate, pellentesque sit arcu curabitur quisque bibendum nec eget - leo ipsum.',
            'status' => 'new',
            'images' => 'images/new.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('tasks')->insert([
            'name' => 'В процессе',
            'email' => 'progress@i.com',
            'task' => 'Lorem, ipsum fusce, sapien leo sagittis ut at magna quisque et fusce, eros - mauris. Adipiscing vitae eget pharetra urna odio ut mauris maecenas vitae vulputate adipiscing, non integer leo. Maecenas bibendum mauris diam sagittis et sodales nec: proin adipiscing gravida arcu sapien eu arcu rutrum, porta donec fusce pellentesque a nibh. Eget amet integer lectus et vitae justo urna, amet sem eros risus maecenas quisque congue arcu metus sed integer sem lectus. Adipiscing ipsum amet eu eros sodales arcu tempus nibh porta. Pellentesque, amet - bibendum curabitur vivamus curabitur metus vulputate, pellentesque sit arcu curabitur quisque bibendum nec eget - leo ipsum.',
            'status' => 'progress',
            'images' => 'images/progress.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('tasks')->insert([
            'name' => 'Обзор',
            'email' => 'review@i.com',
            'task' => 'Lorem, ipsum fusce, sapien leo sagittis ut at magna quisque et fusce, eros - mauris. Adipiscing vitae eget pharetra urna odio ut mauris maecenas vitae vulputate adipiscing, non integer leo. Maecenas bibendum mauris diam sagittis et sodales nec: proin adipiscing gravida arcu sapien eu arcu rutrum, porta donec fusce pellentesque a nibh. Eget amet integer lectus et vitae justo urna, amet sem eros risus maecenas quisque congue arcu metus sed integer sem lectus. Adipiscing ipsum amet eu eros sodales arcu tempus nibh porta. Pellentesque, amet - bibendum curabitur vivamus curabitur metus vulputate, pellentesque sit arcu curabitur quisque bibendum nec eget - leo ipsum.',
            'status' => 'review',
            'images' => 'images/review.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('tasks')->insert([
            'name' => 'Фидбек',
            'email' => 'fb@i.com',
            'task' => 'Lorem, ipsum fusce, sapien leo sagittis ut at magna quisque et fusce, eros - mauris. Adipiscing vitae eget pharetra urna odio ut mauris maecenas vitae vulputate adipiscing, non integer leo. Maecenas bibendum mauris diam sagittis et sodales nec: proin adipiscing gravida arcu sapien eu arcu rutrum, porta donec fusce pellentesque a nibh. Eget amet integer lectus et vitae justo urna, amet sem eros risus maecenas quisque congue arcu metus sed integer sem lectus. Adipiscing ipsum amet eu eros sodales arcu tempus nibh porta. Pellentesque, amet - bibendum curabitur vivamus curabitur metus vulputate, pellentesque sit arcu curabitur quisque bibendum nec eget - leo ipsum.',
            'status' => 'feedback',
            'images' => 'images/feedback.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('tasks')->insert([
            'name' => 'Тестирование',
            'email' => 'test@i.com',
            'task' => 'Lorem, ipsum fusce, sapien leo sagittis ut at magna quisque et fusce, eros - mauris. Adipiscing vitae eget pharetra urna odio ut mauris maecenas vitae vulputate adipiscing, non integer leo. Maecenas bibendum mauris diam sagittis et sodales nec: proin adipiscing gravida arcu sapien eu arcu rutrum, porta donec fusce pellentesque a nibh. Eget amet integer lectus et vitae justo urna, amet sem eros risus maecenas quisque congue arcu metus sed integer sem lectus. Adipiscing ipsum amet eu eros sodales arcu tempus nibh porta. Pellentesque, amet - bibendum curabitur vivamus curabitur metus vulputate, pellentesque sit arcu curabitur quisque bibendum nec eget - leo ipsum.',
            'status' => 'testing',
            'images' => 'images/test.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('tasks')->insert([
            'name' => 'Выполнено',
            'email' => 'pass@i.com',
            'task' => 'Lorem, ipsum fusce, sapien leo sagittis ut at magna quisque et fusce, eros - mauris. Adipiscing vitae eget pharetra urna odio ut mauris maecenas vitae vulputate adipiscing, non integer leo. Maecenas bibendum mauris diam sagittis et sodales nec: proin adipiscing gravida arcu sapien eu arcu rutrum, porta donec fusce pellentesque a nibh. Eget amet integer lectus et vitae justo urna, amet sem eros risus maecenas quisque congue arcu metus sed integer sem lectus. Adipiscing ipsum amet eu eros sodales arcu tempus nibh porta. Pellentesque, amet - bibendum curabitur vivamus curabitur metus vulputate, pellentesque sit arcu curabitur quisque bibendum nec eget - leo ipsum.',
            'status' => 'passed',
            'images' => 'images/pass.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
