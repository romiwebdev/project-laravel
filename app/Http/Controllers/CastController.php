<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    // Menampilkan daftar cast
    public function index()
    {
        $casts = DB::table('casts')->get();
        return view('cast.index', compact('casts'));
    }

    // Menampilkan form tambah cast
    public function create()
    {
        return view('cast.create');
    }

    // Menyimpan data cast baru
    public function store(Request $request)
    {
        DB::table('casts')->insert([
            'name' => $request->name,
            'age' => $request->age,
            'bio' => $request->bio
        ]);

        return redirect()->route('cast.index')->with('success', 'Cast berhasil ditambahkan');
    }

    // Menampilkan detail cast
    public function show($id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();
        return view('cast.show', compact('cast'));
    }

    // Menampilkan form edit cast
    public function edit($id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();
        return view('cast.edit', compact('cast'));
    }

    // Menyimpan perubahan cast
    public function update(Request $request, $id)
    {
        DB::table('casts')->where('id', $id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'bio' => $request->bio
        ]);

        return redirect()->route('cast.index')->with('success', 'Cast berhasil diperbarui');
    }

    // Menghapus cast
    public function destroy($id)
    {
        DB::table('casts')->where('id', $id)->delete();
        return redirect()->route('cast.index')->with('success', 'Cast berhasil dihapus');
    }
}
