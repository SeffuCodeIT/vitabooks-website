<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MediaController extends Controller
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

    public function singlemedia($id)
    {
        //
        $singleMedia = Media::find($id);

        return view('main.singlemedia', compact('singleMedia'));
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
        $mediaDetails = $request->all();

        if ($coverPicFile = $request->file('cover_pic')) {
            $coverPicFileName = time() . $coverPicFile->getClientOriginalName();
            $coverPicFile->move('media-pics', $coverPicFileName);
            $mediaDetails["cover_pic"] = $coverPicFileName;
            Media::create($mediaDetails);
            Session::flash('success', 'Media added successfully');
            return redirect()->back();
        } else {
            Session::flash('error', 'Media addition failed');
            return redirect()->back();
        }
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
