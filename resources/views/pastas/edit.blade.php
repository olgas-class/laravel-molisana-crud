@extends('layouts.app')

@section('content')
  <div class="container">
    <h2>Modifica pasta: {{ $pasta->title }}</h2>

    <form action="{{ route('pastas.update', ['pasta' => $pasta->id]) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $pasta->title }}">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <select class="form-select" id="type" name="type">
          <option>Seleziona</option>
          <option @selected($pasta->type === 'lunga') value="lunga">Lunga</option>
          <option @selected($pasta->type === 'corta') value="corta">Corta</option>
          <option @selected($pasta->type === 'cortissima') value="cortissima">Cortissima</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="cooking_time" class="form-label">Tempo di cottura</label>
        <input type="text" class="form-control" id="cooking_time" name="cooking_time"
          value="{{ $pasta->cooking_time }}">
      </div>

      <div class="mb-3">
        <label for="weight" class="form-label">Peso</label>
        <input type="text" class="form-control" id="weight" name="weight" value="{{ $pasta->weight }}">
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" value="{{ $pasta->image }}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="3">
          {{ $pasta->description }}
        </textarea>
      </div>

      <button class="btn btn-success" type="submit">Salva</button>
    </form>
  </div>
@endsection
