<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestasi;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasis = Prestasi::all();
        return view('backend.prestasi.index', compact('prestasis'));
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
        $this->validate($request, [
            'judul'=>'required']);
        $prestasi= new Prestasi;
        $prestasi->judul = $request->judul;
        $prestasi->keterangan = $request->keterangan;

        if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $destinationPath = public_path().'/img/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $prestasi->gambar = $filename;
        }
 
        $prestasi->save();
        // dd($prestasi);
        alert()->success('Tersimpan')->autoclose(3500);
        return redirect()->route('prestasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $prestasi = Prestasi::find($id);

        return view('backend.prestasi.edit', compact('prestasis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'=>'required']);
        $prestasi= Prestasi::find($id);
        $prestasi->update($request->all());
        $prestasi->judul = $request->judul;
        $prestasi->keterangan = $request->keterangan;

        if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $destinationPath = public_path().'/img/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $prestasi->gambar = $filename;
        }
 
        $prestasi->save();
        // dd($prestasi);
        alert()->success('Tersimpan')->autoclose(3500);
        return redirect()->route('prestasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi = Prestasi::find($id);
            $prestasi->delete();
            alert()->success('Terhapus')->autoclose(3500);

        return redirect()->route('prestasi.index');
    }
}