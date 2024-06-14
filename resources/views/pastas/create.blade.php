@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Crea una nuova pasta</h1>

    <form action="{{ route('pastas.store') }}" method="POST">
      {{-- Cookie per far riconoscere il form al server --}}
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <select class="form-select" id="type" name="type">
          <option selected>Seleziona</option>
          <option value="lunga">Lunga</option>
          <option value="corta">Corta</option>
          <option value="cortissima">Cortissima</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="cooking_time" class="form-label">Tempo di cottura</label>
        <input type="text" class="form-control" id="cooking_time" name="cooking_time">
      </div>

      <div class="mb-3">
        <label for="weight" class="form-label">Peso</label>
        <input type="text" class="form-control" id="weight" name="weight">
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" id="image" name="image">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>

      <button class="btn btn-success" type="submit">Salva</button>
    </form>
  </div>
@endsection
