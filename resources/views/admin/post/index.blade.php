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
      <td>{{$elem->name}}</td>
      <td>{{$elem->lastname}}</td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection
