<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $bookDetails = $request->all();

        if ($coverPicFile = $request->file('cover_pic')){
            $backPicFile = $request->file('back_pic');
            $coverPicFileName = time().$coverPicFile->getClientOriginalName();
            $backPicFileName = time().$backPicFile->getClientOriginalName();
            $coverPicFile->move('book-pics',$coverPicFileName);
            $backPicFile->move('book-pics',$backPicFileName);
            $bookDetails["cover_pic"] = $coverPicFileName;
            $bookDetails["back_pic"] = $backPicFileName;
            Books::create($bookDetails);
            Session::flash('success','Book added successfully');
            return redirect()->back();
        }else{
            Session::flash('error','Book addition failed');
            return redirect()->back();
        }
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
}
