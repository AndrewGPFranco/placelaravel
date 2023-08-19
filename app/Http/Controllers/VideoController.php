<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view ('formyt.formulario', ['videos' => $videos]);
    }

    public function create()
    {
        return view ()
    }

    public function store(Request $request)
    {
        $video = new Video();
        $video->nome = $request->nome;
        $video->link = $request->link;

        $video->save();

        return redirect('/videos',)->with('msg', 'Vídeo adicionado com sucesso!');
    }
}

