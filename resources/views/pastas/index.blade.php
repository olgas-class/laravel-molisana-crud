@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Lista delle paste</h1>
    <table class="table">
      <thead class="striped">
        <tr>
          <th scope="col">id</th>
          <th scope="col">Titolo</th>
          <th scope="col">Tipologia</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pastaArray as $pasta)
          <tr>
            <th scope="row">{{ $pasta->id }}</th>
            <td>{{ $pasta->title }}</td>
            <td>{{ $pasta->type }}</td>
            <td>
              <a class="btn btn-success" href="{{ route('pastas.show', ['pasta' => $pasta->id]) }}">Dettagli</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
