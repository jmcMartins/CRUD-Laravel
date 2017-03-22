<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Phone;

class SmartphoneController extends Controller
{
  public function index()
  {
    $smartphone = Phone::all();
    return view('phone.index',compact('smartphone'));
  }

  public function show($id)
  {
  	$smartphone = Phone::find($id);
    return view('phone.show',compact('smartphone'));
  }

  public function create()
  {
    return view('phone.create');
  }

  public function store(Request $request)
  {
    Phone::create($request->all());

    return redirect('phone');
  }

  public function edit($id)
  {
    $smartphone = Phone::find($id);
    return view('phone.edit',compact('smartphone'));
  }

  public function update(Request $request, $id)
  {
    Phone::find($id)->update($request->all());
    return redirect('phone');
  }

  public function destroy($id)
  {
    Phone::find($id)->delete();
    return redirect('phone');
  }
}
