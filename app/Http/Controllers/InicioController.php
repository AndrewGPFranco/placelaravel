<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Services\SerieService;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    protected $serieService;
    
    public function __construct(SerieService $serieService)
    {
        $this->serieService = $serieService;
    }

    public function index()
    {
        $search = Request('search');

        if($search) {
            $series = Serie::where([
                ['name', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $series = $this->serieService->getAll();
        }

        return view('inicio', ['series' => $series, '$search' => $search]);
    }

    public function create()
    {
        return view('formulario');
    }

    public function store(Request $request)
    {
        $regras = [
            'name' => 'required|min:5|max:25',
            'descricao' => 'required|min:10|max:1000',
            'link' => 'required|url',
        ];

        $mensagens = [
            'name.required' => 'O campo nome é obrigatório.',
            'name.min' => 'O nome deve ter pelo menos 5 caracteres.',
            'name.max' => 'O nome não pode ter mais de 25 caracteres.',
            'descricao.required' => 'O campo descrição é obrigatório.',
            'descricao.min' => 'A descrição deve ter pelo menos 5 caracteres.',
            'descricao.max' => 'A descrição não pode ter mais de 1000 caracteres.',
            'link.required' => 'O campo link é obrigatório.',
            'link.url' => 'Insira um link válido.',
        ];

        $request->validate($regras, $mensagens);

        $data = $request->all();
        
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('/img/series'), $imageName);
            $data['image'] = $imageName;
        }
        
        $serie = $this->serieService->create($data);

        return redirect('/',)->with('msg', 'Post adicionado com sucesso!');
    }

    public function show($id)
    {
        $serie = $this->serieService->getById($id);
        return view ('show', ['serie' => $serie]);
    }

    public function destroy($id)
    {
        $this->serieService->delete($id);
        return redirect('/')->with('msg', 'Post removido com sucesso!');
    }

    public function edit($id)
    {
        $serie = $this->serieService->getById($id);
        return view ('edit', ['serie' => $serie]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $success = $this->serieService->update($id, $data);

        if (!$success) {
            return redirect('/')->with('msg', 'Post não foi atuailizado!');
        }

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('/img/series'), $imageName);
            $data['image'] = $imageName;
        }

        return redirect('/')->with('msg', 'Post editado com sucesso!');
    }
}
