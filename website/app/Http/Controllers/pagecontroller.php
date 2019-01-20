<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{

    //
public function home()
{
    return view('welcome');
}
}
/*
public function contact()
{
  $data=['a','b','c'];


return view('contact',['datas'=>$data]);
}

public function about()
{
  return view('about');

}
public function project()
{
  return view('info');
}

}
*/
