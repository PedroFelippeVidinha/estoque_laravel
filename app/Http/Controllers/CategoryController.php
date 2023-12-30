<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexcategory()
    {
        $categorias = Category::all();
        
        return view ('category.index', compact('categorias'))
            ->with('i', (request()->input('page', 1) - 1) * 2); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $request->validated();

        return Category::create([
            'category' => $request['category']
         ]);

        return redirect()->route('category.index')
                        ->with('success','Categoria criada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Category::where('id', $id)->first();

        return view('category.show',compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Category::where('id', $id)->first();

        return view('category.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        {
            $id = $request->id;

            $request->validated([]);

            $updateCategoria = [
                "category" => $request->category
            ];

            Category::where("id", $id)->update($updateCategoria);

            return redirect()->route('category.index')
                ->with('success', 'Categoria atualizada com sucesso.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $categoria = Category::find($id);
        $categoria->delete();

        return redirect()->route('category.index')
                        ->with('success','Categoria excluída com sucesso.');
    }
}
