<form action="{{ route('pastas.destroy', ['pasta' => $pasta->id]) }}" method="POST" class="delete-form">
  @csrf
  @method('DELETE')
  <button class="btn btn-danger" type="submit" data-pasta-title="{{ $pasta->title }}">Cancella</button>
</form>