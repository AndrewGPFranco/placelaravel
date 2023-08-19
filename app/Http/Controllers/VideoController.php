<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view ('novidades', ['videos' => $videos]);
    }

    public function create()
    {
        return view ('formyt.formulario');
    }

    public function store(Request $request)
    {

        $regras = [
            'nome' => ['required', 'min:5'],
            'link' => ['required', 'url']
        ];

        $mensagensErro = [
            'nome.required' => 'É obrigatório conter um título!',
            'nome.min' => 'É obrigatório conter no mínimo 5 caracteres!',
            'link.required' => 'É obrigatório conter uma url!',
            'link.url' => 'Digite uma url válida!'
        ];

        $video = new Video();
        $video->nome = $request->nome;
        $video->link = $request->link;

        $request->validate($regras, $mensagensErro);
        $video->save();

        return redirect('/videos',)->with('msg', 'Vídeo adicionado com sucesso!');
    }
}

