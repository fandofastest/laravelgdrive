<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class Drivecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $driveid)
    {
    //     $dir = '/';
    //     // dd($driveid);    
    //     $recursive = false; // Get subdirectories also?
    // $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    // $file = $contents
    //     ->where('type', '=', 'file')
    //     ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
    //     ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
    //     ->first(); // there can be duplicate file names!

    //return $file; // array with file info

    // $rawData = Storage::cloud()->getDriver()->readStream($driveid);
    //  dd($rawData);   
    // return response($rawData, 200)
    //     ->header('Content-Type', 'video/mp4');
    //     // ->header('Content-Disposition', "attachment; filename='video'");
    // }


    $readStream = Storage::cloud()->getDriver()->readStream($driveid);

    return response()->stream(function () use ($readStream) {
        fpassthru($readStream);
    }, 200, [
        'Content-Type' => 'video/mp4',
        //'Content-disposition' => 'attachment; filename="'.$filename.'"', // force download?
    ]);
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
}
