<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    protected $folder = 'cadastro';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados['folder'] = $this->folder;
        $dados['page'] = 'index';
        $dados['dados'] = Cadastro::select('*')->paginate(15);
        return view('index', $dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dados['folder'] = $this->folder;
        $dados['page'] = 'create';
        return view('index', $dados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cadastro::create($request->all());
        return redirect(url('/' . $this->folder));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function show(Cadastro $cadastro)
    {
        $dados['folder'] = $this->folder;
        $dados['page'] = 'show';
        $dados['dados'] = $cadastro;
        return view('index', $dados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function edit(Cadastro $cadastro)
    {
        $dados['folder'] = $this->folder;
        $dados['page'] = 'edit';
        $dados['dados'] = $cadastro;
        return view('index', $dados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cadastro $cadastro)
    {
        $cadastro->nome = $request['nome'];
        $cadastro->email = $request['email'];
        $cadastro->telefone = $request['telefone'];
        $cadastro->celular = $request['celular'];

        $cadastro->save();

        return redirect(url('/' . $this->folder));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cadastro $cadastro)
    {
        $cadastro->destroy($cadastro->id);

        return redirect()->back();
    }
}
