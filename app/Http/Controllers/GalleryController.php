<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GalleryController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $galleryDetails = $request->all();

        if ($coverPicFile = $request->file('cover_pic')) {
            $coverPicAFile = $request->file('cover_pica');
            $coverPicBFile = $request->file('cover_picb');
            $coverPicCFile = $request->file('cover_picc');
            $coverPicDFile = $request->file('cover_picd');
            $coverPicEFile = $request->file('cover_pice');
            $coverPicFFile = $request->file('cover_picf');
            $coverPicGFile = $request->file('cover_picg');
            $coverPicHFile = $request->file('cover_pich');
            $coverPicIFile = $request->file('cover_pici');
            $coverPicFileName = time() . $coverPicFile->getClientOriginalName();
            $coverPicAFileName = time() . $coverPicAFile->getClientOriginalName();
            $coverPicBFileName = time() . $coverPicBFile->getClientOriginalName();
            $coverPicCFileName = time() . $coverPicCFile->getClientOriginalName();
            $coverPicDFileName = time() . $coverPicDFile->getClientOriginalName();
            $coverPicEFileName = time() . $coverPicEFile->getClientOriginalName();
            $coverPicFFileName = time() . $coverPicFFile->getClientOriginalName();
            $coverPicGFileName = time() . $coverPicGFile->getClientOriginalName();
            $coverPicHFileName = time() . $coverPicHFile->getClientOriginalName();
            $coverPicIFileName = time() . $coverPicIFile->getClientOriginalName();
            $coverPicFile->move('gallery-pics', $coverPicFileName);
            $coverPicAFile->move('gallery-pics', $coverPicAFileName);
            $coverPicBFile->move('gallery-pics', $coverPicBFileName);
            $coverPicCFile->move('gallery-pics', $coverPicCFileName);
            $coverPicDFile->move('gallery-pics', $coverPicDFileName);
            $coverPicEFile->move('gallery-pics', $coverPicEFileName);
            $coverPicFFile->move('gallery-pics', $coverPicFFileName);
            $coverPicGFile->move('gallery-pics', $coverPicGFileName);
            $coverPicHFile->move('gallery-pics', $coverPicHFileName);
            $coverPicIFile->move('gallery-pics', $coverPicIFileName);
            $galleryDetails["cover_pic"] = $coverPicFileName;
            $galleryDetails["cover_pica"] = $coverPicAFileName;
            $galleryDetails["cover_picb"] = $coverPicBFileName;
            $galleryDetails["cover_picc"] = $coverPicCFileName;
            $galleryDetails["cover_picd"] = $coverPicDFileName;
            $galleryDetails["cover_pice"] = $coverPicEFileName;
            $galleryDetails["cover_picf"] = $coverPicFFileName;
            $galleryDetails["cover_picg"] = $coverPicGFileName;
            $galleryDetails["cover_pich"] = $coverPicHFileName;
            $galleryDetails["cover_pici"] = $coverPicIFileName;
            Gallery::create($galleryDetails);
            Session::flash('success', 'Album added successfully');
            return redirect()->back();
        } else {
            Session::flash('error', 'Album addition failed');
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
