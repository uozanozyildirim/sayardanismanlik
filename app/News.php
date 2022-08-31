<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class News extends Model
{
    protected $table = 'posts';

    protected $categoryTable  = 'categories';

    protected $userTable = 'users';

    public function getAllNews()
    {
       return  DB::table($this->table)->get();
    }


    public function getNewsWithLimit($limit)
    {
       return  DB::table($this->table)
           ->limit($limit)
           ->join($this->categoryTable, 'categories.id', '=', 'posts.category_id')
           ->join($this->userTable, 'users.id', '=', 'posts.author_id')
           ->select('posts.*', 'categories.name as category_title', 'users.name as author_name', 'users.avatar as author_avatar', 'categories.slug as category_slug' )
           ->get();
    }




    public function getAllNewsWithEditorAndCategory()
    {
        return  DB::table('posts')
            ->join($this->categoryTable, 'categories.id', '=', 'posts.category_id')
            ->join($this->userTable, 'users.id', '=', 'posts.author_id')
            ->select('posts.*', 'categories.name as category_title', 'users.name as author_name', 'users.avatar as author_avatar', 'categories.slug as category_slug' )
            ->get();
    }

    public function getNewsByCategory($category_id)
    {
       return  DB::table($this->table)->where('category_id', $category_id)->get();
    }

    public function getNewsByAlias($id)
    {
        return DB::table($this->table)->where('id', $id)->first();
    }

    public function getNewsBySlug($slug)
    {
        return  DB::table($this->table)
            ->join($this->categoryTable, 'categories.id', '=', 'posts.category_id')
            ->join($this->userTable, 'users.id', '=', 'posts.author_id')
            ->select('posts.*', 'categories.name as category_title', 'users.name as author_name', 'users.avatar as author_avatar', 'categories.slug as category_slug' )
            ->where('posts.slug', '=', $slug)
            ->get();
    }

}
