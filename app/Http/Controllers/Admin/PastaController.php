<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public function store(Request $request) {
        // Prelevo tutti i dati dal request e ottengo array associativo
        $data = $request->all();
        $pasta = new Pasta();
        $pasta->fill($data);
        $pasta->save();
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
    public function edit(string $id) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}
