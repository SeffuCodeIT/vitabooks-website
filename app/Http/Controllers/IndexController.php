<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Books;
use App\Models\Comments;
use App\Models\Contacts;
use App\Models\Media;
use App\Models\Order;
use App\Models\Projects;
use App\Models\Socialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('main.home');
    }

    public function theKenyaSocialist()
    {
        //
        $magazine = Socialist::all();

        return view('main.socialist', compact('magazine'));
    }

    public function catalogue()
    {
        //
        $books = Books::all();

        return view('main.catalogue', compact('books'));
    }

    public function media()
    {
        //
        $media = Media::all();

        return view('main.media', compact('media'));
    }

    public function blog()
    {
        //
        $posts = Blog::all(); //fetch all blog posts from DB
        $comments = Comments::all();
//        $post_id = Comments::all()->post_id;

        $user = Auth::user()->id;
//        $posterId = Blog()->id;

//        return $posts;
//        return $posterId;
        return view('main.blog', compact('posts', 'user', 'comments'));
//        return view('main.blog', compact('posts'));
    }

    public function about()
    {
        //
        return view('main.about');
    }

    public function projects()
    {
        //
        $project = Projects::all();
        return view('main.projects', compact('project'));
    }

    public function admin()
    {
        //
        $user_id = Auth::user()->id;
        $orders = Order::all();
        $contact = Contacts::all();

        return view('main.admin', compact('user_id', 'orders', 'contact'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
