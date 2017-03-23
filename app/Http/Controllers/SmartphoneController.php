<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Phone;

class SmartphoneController extends Controller
{
  public function index()//To usando home/listagem
  {
    $smartphones = Phone::all();
    return view('phone.index',compact('smartphones'));
  }

  public function destroy($id)//To usando exclui
  {
    Phone::find($id)->delete();
    return redirect('smartphone');
  }

  public function store(Request $request)//To usando cria arquivo
  {
    Phone::create($request->all());

    return redirect('smartphone');
  }

  public function update(Request $request, $id)//To usando edita
  {
    Phone::find($id)->update($request->all());
    return redirect('smartphone');
  }

  public function edit($id)
  {
    $smartphones = Phone::find($id);
    return view('phone.edit',compact('smartphones'));
  }

}
