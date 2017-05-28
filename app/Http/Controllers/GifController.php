<?php

namespace App\Http\Controllers;

use App\Gif;
use App\Providers\GifbaseServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class GifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gifs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gifs.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            /* Create model */

            $gif = Gif::create([
                'user_id' => 0,
                'filename' => $filename,
                'extension' => $extension,
                'category_id' => 0,
                'hash' => GifbaseServiceProvider::getFileHash($file->getPathname()),
                'description' => '',
                'filesize' => $file->getSize(),
            ]);

            /* Save file to disk */

            Storage::disk('gifs')->putFileAs('', $file, $gif->id . '.' . $extension);
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

    /**
     * Download the thumbnail image/video file.
     *
     * @param int $id
     */
    public function download($id) {
        /* Fetch gif in question */

        $gif = Gif::findOrFail($id);

        /* Prepare download headers */

        $headers = [
            'Content-Disposition: inline; filename="' . $gif->filename . '"'
        ];

        return response()->file(storage_path('gifs/' . $id . '.' . $gif->extension));
        return response()->download(storage_path('gifs/' . $id . '.' . $gif->extension), $gif->filename);
    }
}
