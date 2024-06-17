@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Lista delle paste</h1>
    <div class="d-flex justify-content-end py-3">
      <a class="btn btn-success" href="{{ route('pastas.create') }}">Aggiungi una pasta</a>
    </div>
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
            <td class="d-flex gap-3">
              <a class="btn btn-success" href="{{ route('pastas.show', ['pasta' => $pasta->id]) }}">Dettagli</a>
              <a class="btn btn-warning" href="{{ route('pastas.edit', ['pasta' => $pasta->id]) }}">Modifica</a>

              {{-- Form per cancellare elemento --}}
              <form action="{{ route('pastas.destroy', ['pasta' => $pasta->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Cancella</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
