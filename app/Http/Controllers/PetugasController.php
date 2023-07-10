<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Petugas::all();
        return view('Petugas.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Petugas.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'petugas_nim' => 'bail|required|unique:tb_petugas',
                'petugas_nama' => 'required'
            ],
            [
                'petugas_nim.required' => 'NIM wajib diisi',
                'petugas_nim.unique' => 'NIM sudah ada',
                'petugas_nama.required' => 'Nama wajib diisi'
            ]
        );

        Petugas::create([
            'petugas_nim' => $request->petugas_nim,
            'petugas_nama' => $request->petugas_nama,
            'petugas_jurusan' => $request->petugas_jurusan,
            'petugas_alamat' => $request->petugas_alamat
        ]);

        return redirect('Petugas');
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
        $row = Petugas::findOrFail($id);
        return view('Petugas.edit', compact('row'));
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
        $request->validate(
            [
                'petugas_nim' => 'bail|required',
                'petugas_nama' => 'required'
            ],
            [
                'petugas_nim.required' => 'NIM wajib diisi',
                'petugas_nama.required' => 'Nama wajib diisi'
            ]
        );

        $row = Petugas::findOrFail($id);
        $row->update([
            'petugas_nim' => $request->petugas_nim,
            'petugas_nama' => $request->petugas_nama,
            'petugas_jurusan' => $request->petugas_jurusan,
            'petugas_alamat' => $request->petugas_alamat
        ]);

        return redirect('Petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Petugas::findOrFail($id);
        $row->delete();

        return redirect('Petugas');
    }
    public function search(Request $request)
{
    $keyword = $request->search;

    $rows = Petugas::where('petugas_nama', 'like', "%" . $keyword . "%")->paginate(5);
    $rows = Petugas::where('petugas_alamat', 'like', "%" . $keyword . "%")->paginate(5);

    return view('Petugas.index', compact('rows'))->with('i', (request()->input('page', 1) - 1) * 5);
}
    

}