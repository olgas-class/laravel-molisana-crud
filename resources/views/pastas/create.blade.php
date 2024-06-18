@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Crea una nuova pasta</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('pastas.store') }}" method="POST">
      {{-- Cookie per far riconoscere il form al server --}}
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        {{-- Si può fare la visualizzazione di errori per ogni input --}}
        <input value="{{ old('title') }}" type="text"
          class="form-control 
        @error('title')
            is-invalid
        @enderror" id="title"
          name="title">
        @error('title')
          <div id="title-error" class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <select class="form-select" id="type" name="type">
          <option >Seleziona</option>
          <option @selected(old('type') === 'lunga') value="lunga">Lunga</option>
          <option @selected(old('type') === 'corta') value="corta">Corta</option>
          <option @selected(old('type') === 'cortissima') value="cortissima">Cortissima</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="cooking_time" class="form-label">Tempo di cottura</label>
        <input value="{{ old('cooking_time') }}" type="text" class="form-control" id="cooking_time"
          name="cooking_time">
      </div>

      <div class="mb-3">
        <label for="weight" class="form-label">Peso</label>
        <input value="{{ old('weight') }}" type="text" class="form-control" id="weight" name="weight">
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input value="{{ old('image') }}" type="text" class="form-control" id="image" name="image">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
      </div>

      <button class="btn btn-success" type="submit">Salva</button>
    </form>
  </div>
@endsection
