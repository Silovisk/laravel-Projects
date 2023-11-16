<?php

namespace App\Http\Controllers;

use App\Models\DownloadYoutube;
use Illuminate\Http\Request;

class DownloadYoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('download.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $youtubeDlPath = env('YOUTUBE_DL_PATH');

        if (!$youtubeDlPath) {
            return 'Caminho para youtube-dl não definido.';
        }

        $command = "$youtubeDlPath -x --audio-format mp3 --audio-quality 0 {$request->url} -o 'public/%(title)s.%(ext)s'";

        // Execute o comando
        $result = shell_exec($command);

        // Exiba o resultado ou faça o que for necessário
        dd($result);
    }

    /**
     * Display the specified resource.
     */
    public function show(DownloadYoutube $downloadYoutube)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DownloadYoutube $downloadYoutube)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DownloadYoutube $downloadYoutube)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DownloadYoutube $downloadYoutube)
    {
    }
}
