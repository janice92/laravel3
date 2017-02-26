<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use App\Models\Blog\Article;
use App\Models\Blog\Comment;
use App\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {

        $articles = Article::with(['user'])->get();

        return view('articles.index')->with([
            'articles' => $articles
        ]);
    }


    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show')->with([
            'article' => $article
        ]);
    }


    public function create()
    {
        $users = User::all();

        return view('articles.create')->with([
            'users' => $users
        ]);
    }


    public function store(Request $request)
    {
        $user = User::findOrFail($request->user);

        $article = Article::create([
            'title'   => $request->title,
            'content' => $request->get('content'), // $request->content
            'user_id' => $user->id
        ]);

        return redirect()->route('articles.index')->with('success', 'L\'article a bien été posté');
    }


    public function edit($id)
    {

        $article = Article::where('id', $id)->with(['user'])->firstOrFail();
        $users   = User::all();

        return view('articles.edit')->with([
            'article' => $article,
            'users'   => $users,
        ]);
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($request->user);

        $article = Article::findOrFail($id);

        $article->update([
            'title'   => $request->title,
            'content' => $request->content,
            'user_id' => $user->id
        ]);

        return redirect()->route('articles.index')->with('success', 'L\'article a bien été mis à jour');

    }


    public function destroy($id)
    {

        $article = Article::findOrFail($id);

        $article->delete();

        return redirect()->route('articles.index'); //->back();
    }


    public function showUserArticles($userId)
    {
        $user = User::findOrFail($userId);

        return view('articles.user')->with([
            'user'     => $user,
            'articles' => $user->articles
        ]);
    }


    public function postComment(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        //$comment = new Comment();
        //$comment->comment = $request->get('comment');
        //$comment->article_id = $article->id;
        //$comment->save();

        $comment = Comment::create([
            'comment'    => $request->get('comment'),
            'article_id' => $article->id
        ]);

        if ($request->user()) {
            $comment->user_id = $request->user()->id;
            $comment->save();
        }

        return redirect()->back()->with('success', 'Message posté');

    }
}
