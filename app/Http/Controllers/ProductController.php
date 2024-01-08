<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexproduct()
    {
        $produtos = Product::all();

        return view('product.index', compact('produtos'))
            ->with('i', (request()->input('page', 1) - 1) * 2);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $request->validated();

        return Product::create([
            // 'space_id' => $request['space_id'],
            // 'category_id' => $request['category_id'],
            'name' => $request['name'],
            'tipo' => $request['tipo'],
            'marca' => $request['marca'],
            'tamanho' => $request['tamanho'],
            'condicao' => $request['condicao'],
            'fornecedor' => $request['fornecedor'],
            'descricao' => $request['descricao'],
            'foto' => $request['foto'],
            'patrimonio' => $request['patrimonio'],
            'numero_patrimonial' => $request['numero_patrimonial'],
            'numero_controle' => $request['numero_controle'],
            'observacao' => $request['observacao'],
         ]);

         if($request->foto){
            $request['foto'] = $request->file('foto')->store('produtos', 'public');
         }

        return redirect()->route('product.index')
                        ->with('success','Produto criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Product::where('id', $id)->first();

        return view('product.show',compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Product::where('id', $id)->first();

        return view('product.edit',compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $id = $request->id;

        $request->validated([]);

        $updateProduto = [
            //"space_id" => $request->space_id,
            //"category_id" => $request->category_id,
            "name" => $request->name,
            "tipo" => $request->tipo,
            "marca" => $request->marca,
            "tamanho" => $request->tamanho,
            "condicao" => $request->condicao,
            "fornecedor" => $request->fornecedor,
            "descricao" => $request->descricao,
            "foto" => $request->foto,
            "patrimonio" => $request->patrimonio,
            "numero_patrimonial" => $request->numero_patrimonial,
            "numero_controle" => $request->numero_controle,
            "observacao" => $request->observacao
        ];

        if($request->foto){
            Storage::exists('public/'.$request->foto) ? Storage::delete('public/'.$request->foto) : '';
            
            $request['foto'] = $request->file('foto')->store('produtos', 'public');
        }

        /* if($request->foto){
            if($request->foto->foto && Storage::exists($request->foto)){
                Storage::delete($request->foto);
        }
           
           $request['foto'] = $request->file('foto')->store('produtos', 'public');
        } */

        Product::where("id", $id)->update($updateProduto);

        return redirect()->route('product.index')
                        ->with('success','Produto atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $produto = Product::find($id)->first();
        $produto->delete();

        return redirect()->route('product.index')
                        ->with('success','Produto excluído com sucesso.');
    }
}
