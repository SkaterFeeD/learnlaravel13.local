<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

// импортируем фасад баз данных

class RequestController extends Controller
{
    public function show()
    {
        // 124. Получение коллекции значений столбца через QB в Laravel
        // для получения коллекции одного столбца, собранную со всех рядов, используется метод pluck
        $titles = DB::table('posts')->pluck('title');
        dump($titles);
        // можно перебрать полученные данные циклом
        $titles = DB::table('posts')->pluck('title');
        foreach ($titles as $title) {
            echo "<br>";
            echo $title;
        }
        // можно получить не все посты, а только попадающие под условие
        $titles = DB::table('posts')
            ->where('id', '>', '3')
            ->pluck('title');
        dump($titles);

        // 123. Получение значения одного столбца QueryBuilder в Laravel
        $title = DB::table('posts')->where('id', 1)->value('title');
        echo $title;
        // 122. Получение одной строки через QB в Laravel

        /*
        $post = DB::table('posts')->where('id', 1)->first();
        return view('post.show', compact('post'));
        */


        // 121. Сложные условия при выборке через QB в Laravel
        /*
        $posts = DB::table('posts')
            ->where('id', '=', 3)
            ->orWhere(function ($query) {
                $query
                    ->where('likes', '>', 5000)
                    ->where('likes', '<', 20000);
            })
            ->get();
        return view('post.show', compact('posts'));
        */

        // 120. Условия orWhere при выборке через QB в Laravel
        /*
        $posts = DB::table('posts')
            ->where('id', '<', 3)
            ->orWhere('likes', '>', 3000)
            ->get();
        return view('post.show', compact('posts'));
        */

        // 119. Несколько условий where при выборке через QB в Laravel
        /*
        $posts = DB::table('posts')
            ->where('likes', '>', 4000)
            ->where('likes', '<', 20000)
            ->get();
        return view('post.show', compact('posts'));
        */

        // 118. Условия where при выборке через QB в Laravel

        /*
        $posts = DB::table('posts')->where('likes', '=', 200)->get();
        return view('post.show', compact('posts'));
        */

        // 117. Поля выборки через QB в Laravel (select - выбираем два поля - title и text)

        /*
        $posts = DB::table('posts')->select('title', 'text')->get();
        */

        // Переименование столбцов
        /*
        $posts = DB::table('posts')->select('title', 'text as post_text')->get();
        */

        // 116. Просмотр SQL запросов в Laravel
        /*
        // через QueryLog
        DB::enableQueryLog();
        DB::table('posts')->where('id', '>', 2)->get();
        dump(DB::getQueryLog());
        // вывод через toSql
        $query = DB::table('posts')->where('id', '>', 2)->toSql();
        dump($query);
        // просмотр запроса через метод dump and die (dd)
        DB::table('posts')->where('id', '>', 2)->dd();
        // просмотр запроса через метод dump
        // DB::table('posts')->where('id', '>', 2)->dump();
        */

        // 115. Вывод полученных записей в представлении в Laravel
        /*
        $posts = DB::table('posts')->get();
        return view('post.show', ['posts' => $posts]);
        */

        // 114. Получение всех записей через Query Builder
        /*
        $posts = DB::table('posts')->get();
        dump($posts);

        foreach ($posts as $post) {
            dump($post->title);
            dump($post->text);
        }
        */
    }
}
