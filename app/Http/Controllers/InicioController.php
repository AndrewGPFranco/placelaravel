<?php

namespace App\Http\Controllers;

use App\Http\Requests\SerieRequest;
use App\Models\Serie;
use App\Services\SerieService;

class InicioController extends Controller
{
    protected $serieService;
    protected $model;
    
    public function __construct(SerieService $serieService, Serie $model)
    {
        $this->serieService = $serieService;
        $this->model = $model;
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

        $itensPaginados = $this->model->paginate(3);

        return view('inicio', ['series' => $series, '$search' => $search, 'paginator' => $itensPaginados]);
    }

    public function create()
    {
        return view('formulario');
    }

    public function store(SerieRequest $request)
    {
        $data = $request->all();
        
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('/img/series'), $imageName);
            $data['image'] = $imageName;
        }
        
        $this->serieService->create($data);

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

    public function update(SerieRequest $request, $id)
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
