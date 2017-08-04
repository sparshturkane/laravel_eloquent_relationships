<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::All();
        $articleList = array();
        foreach ($articles as $article) {
            // return $article;
            $articleList[] = array(
                'id' => $article->id, 
                'user' => $article->user, 
                'title' => $article->title, 
                'body' => $article->body, 
                'created_at' => $article->created_at, 
                'updated_at' => $article->updated_at, 
            );
        }

        return $articleList;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function userArticle()
    {
        $users = User::all();
        $userList = array();
        foreach ($users as $user) {
            $userList[] = array(
                'id' => $user->id, 
                
                'name' => $user->name, 
                'email' => $user->email, 
                'created_at' => $user->created_at, 
                'updated_at' => $user->updated_at, 
                'articles' => $user->articles, 
            );
        }
        return $userList;
    }
}
