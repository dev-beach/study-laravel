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

  public function post(HelloRequest $request) {
    return view('hello.index', ['msg'=>'正しく入力されました！']);
  }

  // public function post(Request $request) {
  //   $validate_rule = [
  //     'name' => 'required',
  //     'mail' => 'email',
  //     'age' => 'numeric|between:0,150',
  //   ];
  //   $this->validate($request, $validate_rule);
  //   return view('hello.index', ['msg'=>'正しく入力されました！']);
  // }

  // public function index($id='zero') {
  //   $data = [
  //     'msg'=>'これはコントローラから渡されたメッセージです。',
  //     'id'=>$id
  //   ];
  //   return view('hello.index', $data);
  // }

  // public function index() {
  //   return view('hello.index');
  // }
}

// class HelloController extends Controller
// {
//   public function index(Request $request, Response $response) {
// $html = <<<EOF
// <html>
// <head>
// <title>Hello/Index</title>
// <style>
// body {font-size:16pt; color:#999;}
// h1 {font-size:120pt; text-align:right; color:#fafafa; margin:-50px 0px -120px 0px;}
// </style>
// </head>
// <body>
//   <h1>Hello</h1>
//   <h3>Request</h3>
//   <pre>{$request}</pre>
//   <h3>Response</h3>
//   <pre>{$response}</pre>
// </body>
// </html>
// EOF;
//     $response->setContent($html);
//     return $response;
//   }
// }

// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<EOF
// <style>
// body {font}
// body {font-size:16pt; color:#999;}
// h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
// </style>
// EOF;
// $body = '</head><body>';
// $end = '</body></html>';
//
// function tag($tag, $txt) {
//   return "<{$tag}>" . $txt . "</{$tag}>";
// }
//
// class HelloController extends Controller
// {
//   public function __invoke() {
//     return <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size:16pt; color:#999; }
// h1 {font-size:30pt; text-align:right; color:#eee; margin:-15px 0px 0px 0px;}
// </style>
// </head>
// <body>
//   <h1>Single Action</h1>
//   <p>これは、シングルアクションコントローラのアクションです。</p>
// </body>
// </html>
// EOF;
//   }
// }

// class HelloController extends Controller
// {
//     public function index() {
//       global $head, $style, $body, $end;
//       $html = $head . tag('title', 'Hello/Index') . $style . $body
//         . tag('h1', 'Index') . tag('p', 'this is  Index page.')
//         . '<a href="/lara/public/hello/other">go to Other page</a>'
//         . $end;
//       return $html;
//     }
//
//     public function other() {
//       global $head, $style, $body, $end;
//       $html = $head . tag('title', 'Hello/Other') . $style . $body
//         . tag('h1', 'Other') . tag('p', 'this is Other page.')
//         . $end;
//       return $html;
//     }
// }

// class HelloController extends Controller
// {
//     public function index($id='noname', $pass='unknown') {
//       return <<<EOF
// <html>
// <head>
// <title>Hello/Index</title>
// <style>
// body {font-size:16pt; color:#999;}
// h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
// </style>
// </head>
// <body>
//   <h1>Index</h1>
//   <p>これは、Helloコントローラのindexアクションです。</p>
//   <ul>
//     <li>ID: {$id}</li>
//     <li>PASS: {$pass}</li>
// </body>
// </html>
// EOF;
//     }
// }