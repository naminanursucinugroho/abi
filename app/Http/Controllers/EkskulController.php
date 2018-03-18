<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ekskul;

class EkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekskuls = Ekskul::all();
        return view('backend.ekskul.index', compact('ekskuls'));
    }

    public function kategori()
    {
        $ekskuls = Ekskul::all();
        return view('backend.ekskul.index', compact('ekskuls'));
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
            'nama'=>'required|unique:ekskuls,nama',
            'kategori_id'=>'required']);
        

        $ekskul= new Ekskul;
        $ekskul->nama = $request->nama;
        $ekskul->kategori_id = $request->kategori_id;

        if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $destinationPath = public_path().'/img/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $ekskul->foto = $filename;
        }
 
        $ekskul->save();
        // dd($ekskul);
        alert()->success('Tersimpan')->autoclose(3500);
        return redirect()->route('ekskul.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $ekskul = Ekskul::find($id);
        return view('backend.ekskul.edit', compact('ekskuls'));
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
            'nama'=>'required|unique:ekskuls,nama',
            'kategori_id'=>'required']);
        $ekskul = Ekskul::find($id);
        $author = Auth::user()->name;
        $ekskul->author = $author;
        $ekskul->nama = $request->judul;
        $ekskul->kategori_id = $request->kategori_id;

        if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $destinationPath = public_path().'/img/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $ekskul->foto = $filename;
        }

        $ekskul->save();
        // dd($ekskul);
        alert()->success('Tersimpan')->autoclose(3500);
        return redirect()->route('ekskul.index');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $ekskul = Ekskul::find($id);
            $ekskul->delete();
            alert()->success('Terhapus')->autoclose(3500);

        return redirect()->route('ekskul.index');
    }
}
