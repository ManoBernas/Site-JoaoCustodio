<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Foto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Listagem de produtos
        $produtos = Produto::all(); //select * from produtos;
        return view('produtos.index', compact('produtos'));
        //o método compact serve para passar o resultado do select para a view index
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Categoria::where('tipo', 1)->get(); //select * from categorias;
        return view('produtos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validação do Formulário Produto
        request()->validate([
            // 'inputDesig' => 'required',
            'selectCat' => 'required',
            // 'inputResp' => 'required',
            // 'inputData' => 'required',
            // 'inputGit' => 'required',
            // 'textDesc' => 'required'
        ]);


        //Inserção de dados no Formulário Produto
        $produto = new Produto();
        // $produto->designacao = request('inputDesig');
        $produto->categoria_id = request('selectCat');
        $produto->disponibilidade_id = request('dispProd');
        $produto->preBase = request('preBase');
        // $produto->responsavel = request('inputResp');
        // $produto->dataInicio = request('inputData');
        // $produto->github = request('inputGit');
        // $produto->descricao = request('textDesc');

        /* $request->validate([
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif|max:4096'
          ]);

        if($request->hasfile('imageFile')) {

            $produto->save();//Apenas grava o produto se existirem fotos
            foreach($request->file('imageFile') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/uploads/', $name);
                $imgData[] = $name;
            }
            $fileModal = new Foto();
            $fileModal->designacao = json_encode($imgData);
            $fileModal->produto_id = $produto->id;
            $fileModal->save();



            $fileModal->save();

        } */

        $produto->save();

        return redirect('/produtos')->with('message', 'Produto inserido com sucesso!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
        $categorias = Categoria::where('tipo', 1)->get(); //select * from categorias;
        return view('produtos.edit', compact('categorias', 'produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
