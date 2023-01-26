@extends('layouts.app')
@section('page-title','sezione-index')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">COGNOME</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $elem )

    <tr>
        <td>{{$elem->id}}</td>
      <td>{{$elem->title}}</td>
      <td>{{$elem->body}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="d-flex justify-content-center my-5">

    {{$data->links()}}
</div>
@endsection
