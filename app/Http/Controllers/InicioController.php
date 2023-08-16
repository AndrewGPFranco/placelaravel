<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $series = Serie::all();
        return view('inicio', ['series' => $series]);
    }

    public function create()
    {
        return view('formulario');
    }

    public function store(Request $request)
    {
        $serie = new Serie();
        $serie->name = $request->name;
        $serie->descricao = $request->descricao;
        $serie->link = $request->link;
        $serie->items = $request->items;

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('/img/series'), $imageName);
            $serie->image = $imageName;
        }

        $serie->save();

        return redirect('/')->with('msg', 'Post adicionado com sucesso!');
    }

    public function show($id)
    {
        $serie = Serie::findOrFail($id);

        return view ('show', ['serie' => $serie]);
    }

    public function destroy($id)
    {
        Serie::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Post removido com sucesso!');
    }
}
