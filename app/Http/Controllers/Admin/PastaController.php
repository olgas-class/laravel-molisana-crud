<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePastaRequest;
use App\Http\Requests\UpdatePastaRequest;
use App\Models\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $pastaArray = Pasta::all();
        return view('pastas.index', compact('pastaArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('pastas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePastaRequest $request) {
        // In alternativa per organizzare meglio il codice creo la classe StorePastaRequest per applicare le validazioni
        // Controllo che i dati sono corretti
        // $request->validate([
        //     'title' => ['required', 'min:3'],
        //     'type' => ['required'],
        //     'cooking_time' => ['required'],
        //     'weight' => ['required'],
        //     'description' => ['min:10']
        // ], [
        //     'title.required' => 'Il titolo non può essere vuoto'
        // ]);
        // Prelevo tutti i dati dal request e ottengo array associativo
        $data = $request->all();
        // $pasta = new Pasta();
        // $pasta->fill($data);
        // $pasta->save();
        $pasta = Pasta::create($data);
        return redirect()->route('pastas.show', ['pasta' => $pasta->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasta $pasta) {
        // $pasta = Pasta::findOrFail($id);
        return view('pastas.show', compact('pasta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasta $pasta) {
        // $pasta = Pasta::findOrFail($id);
        return view('pastas.edit', compact('pasta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePastaRequest $request, Pasta $pasta) {
        // Da request ci arrivano i dati nuovi da inserire nel record
        $data = $request->all();

        // nella variabile $pasta troveremo i dati vecchi
        // dd($data, $pasta);

        $pasta->update($data); // per fare questa operazione serve $fillable nel model

        return redirect()->route('pastas.show', ['pasta' => $pasta->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasta $pasta) {
        $pasta->delete();
        return redirect()->route('pastas.index');
    }
}
