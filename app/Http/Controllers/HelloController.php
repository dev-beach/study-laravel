<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HelloRequest;

class HelloController extends Controller
{

  public function index(Request $request) {
    $items = DB::select('select * from users');
    return view('hello.index', ['items' => $items]);
  }

  public function post(Request $request) {
    $items = DB::select('select * from users');
    return view('hello.index', ['items' => $items]);
  }

  public function add(Request $request) {
    return view('hello.add');
  }

  public function create(Request $request) {
    $param = [
      'name' => $request->name,
      'email' => $request->email,
      'password' => $request->password,
    ];
    DB::insert('insert into users (name, email, password) values (:name, :email, :password)', $param);
    return redirect('/hello');
  }
}
