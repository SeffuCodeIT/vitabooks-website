<?php

namespace App\Http\Controllers;

use App\Models\Socialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PHPUnit\TextUI\XmlConfiguration\File;

class SocialistController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        echo "you are in the route";
        //
        $data = new Socialist();
//        request pdf file
        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('magazines', $filename);
        $data->file = $filename;
//        request file name
        $data->name = $request->name;
//        request short description
        $data->short_desc = $request->short_desc;
//        request file pic
        $frontPic = $request->file('front_pic');
        $frontPicFileName = time() . $frontPic->getClientOriginalName();
        $frontPic->move('mag-pics', $frontPicFileName);
        $data->frontPic = $frontPicFileName;

        $data->save();

        return redirect()->back();
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

    public function read($id)
    {
        //
        $magazineFile = Socialist::find($id);

        return view('main.socialist', compact('magazineFile'));
    }
}
