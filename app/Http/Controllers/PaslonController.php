<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use Illuminate\Http\Request;

class PaslonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data paslon dari database
        $paslons = Paslon::all();

        // Kirim data ke view
        return view('ketos', compact('paslons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Paslon $paslon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paslon $paslon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paslon $paslon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paslon $paslon)
    {
        //
    }
}
