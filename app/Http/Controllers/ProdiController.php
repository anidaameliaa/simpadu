<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ['nama' => "Amel", 'foto' => 'avatar2.png'];
        $prodi = Prodi::all();
        return view('prodi.index', compact('data', 'prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = ['nama' => "Amel", 'foto' => 'avatar2.png'];
        $prodi = Prodi::All();
        return view('prodi.create', compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
            'nama' => 'required|string|max:100',
            'kaprodi' => 'required|string|max:150',
            'jurusan' => 'required|string|max:100',
            ],
            [
            'nama.required' => 'Nama prodi harus diisi',
            'kaprodi.required' => 'Kepala prodi harus diisi',
            'jurusan.required' => 'Jurusan harus diisi',
            ]
    );
        $data = $request->only(['nama', 'kaprodi', 'jurusan']);
        prodi::create($data);
        return redirect('/prodi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = ['nama' => "Amel", 'foto' => 'avatar2.png'];
        $prodi = Prodi::find($id);
        return view('prodi.edit', compact('data', 'prodi'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
            $validateData =  $request->validate(
            [
            'nama' => 'required|string|max:100',
            'kaprodi' => 'required|string|max:150',
            'jurusan' => 'required|string|max:100'
            ],
            [
             'nama.required' => 'Nama prodi harus diisi',
             'kaprodi.required' => 'Kepala prodi harus diisi',
             'jurusan.required' => 'Jurusan harus diisi'
            ]
        );

        $prodi = Prodi::where('id',$id)->first();
        if (!$prodi) {
        abort(404, 'Prodi tidak ditemukan');
        }
        $data = $request->only(['nama', 'kaprodi', 'jurusan']);
        Prodi::where('id', $id)->update($data);
        return redirect('/prodi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $prodi = Prodi::find($id);
        if ($prodi) {
        $prodi->delete();
        }
    return redirect('/prodi')->with('success', 'Data prodi berhasil dihapus!');
    }
}
