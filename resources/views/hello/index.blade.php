@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <table>
    <tr><th>Name</th><th>Mail</th></tr>
    @foreach ($items as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')
copyright 2019.
@endsection
