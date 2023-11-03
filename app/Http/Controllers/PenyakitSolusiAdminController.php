<?php

namespace App\Http\Controllers;

use App\Models\PenyakitSolusi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PenyakitSolusiAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyakit_solusi = PenyakitSolusi::orderBy('priority')->get();
        return response()->view('admin.penyakit.index', ['penyakit_solusi' => $penyakit_solusi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penyakit = PenyakitSolusi::where('id', $id)->first();
        return response()->view('admin.penyakit.show', ['penyakit'=> $penyakit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penyakit = PenyakitSolusi::where('id', $id)->first();
        return response()->view('admin.penyakit.edit', ['penyakit'=> $penyakit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) : RedirectResponse
    {
        $validatedData = $request->validate([
            'nama_penyakit' => 'required',
            'definisi' => 'required',
            'solusi' => 'required',
            'tindak_lanjut' => 'required',
            'obat' => 'required',
            'priority' => 'required',
        ]);
    
        // Find the record to update
        $penyakit = PenyakitSolusi::findOrFail($id);
    
        // Update the record with the validated data
        $penyakit->update($validatedData);
    
        // Redirect to the index view if the update is successful
        return redirect()->route('penyakit.index')->with('success', 'PenyakitSolusi updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
