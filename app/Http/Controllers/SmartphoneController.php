<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Phone;

class SmartphoneController extends Controller
{
  public function index()//Faz a listagem dos itens.
  {
    $smartphones = Phone::all();
    return view('phone.index',compact('smartphones'));
  }

  public function destroy($id)//Exclui item.
  {
    Phone::find($id)->delete();
    return redirect('smartphone');
  }

  public function store(Request $request)//Cria um item.
  {
    Phone::create($request->all());

    return redirect('smartphone');
  }

  public function update(Request $request, $id)//Edita item.
  {
    Phone::find($id)->update($request->all());
    return redirect('smartphone');
  }

  public function edit($id)//Preenche campos a serem editados.
  {
    $smartphone = Phone::find($id);
    return view('phone.edit',compact('smartphone'));
  }

}
