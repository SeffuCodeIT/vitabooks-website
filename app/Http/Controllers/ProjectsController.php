<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Projects;
use App\Models\Socialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectsController extends Controller
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

    public function singleprojects($id)
    {
        //
        $startDateAndTime =
        $singleProjects = Projects::find($id);

        return view('main.singleprojects', compact('singleProjects'));
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
        $projectDetails = $request->all();

        if ($coverPicFile = $request->file('cover_pic')) {
            $backPicFile = $request->file('back_pic');
            $coverPicFileName = time() . $coverPicFile->getClientOriginalName();
            $backPicFileName = time() . $backPicFile->getClientOriginalName();
            $coverPicFile->move('project-pics', $coverPicFileName);
            $backPicFile->move('project-pics', $backPicFileName);
            $projectDetails["cover_pic"] = $coverPicFileName;
            $projectDetails["back_pic"] = $backPicFileName;
            Projects::create($projectDetails);
            Session::flash('success', 'Project added successfully');
            return redirect()->back();
        } else {
            Session::flash('error', 'Project addition failed');
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
