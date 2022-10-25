<?php

namespace App\Http\Controllers;

use App\Models\produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produto = array();
        if (request('find') != null)
        {
            $busca = request('find');
            $produto = produtos::where('nome','like',"$busca%")->get();
        }
        else
            $produto = produtos::all();
        return view("produto.index",['produto'=>$produto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $produto = produtos::find($id);
        return view('produto/show', ['produto'=>$produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit(produtos $produtos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produtos $produtos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function destroy(produtos $produtos)
    {
        //
    }
}
