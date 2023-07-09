<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pdam;
class PdamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Pdam::all();
        return view('pdam.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pdam.add');
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
                'no_pelanggan' => 'bail|required|unique:tb_pdam',
                'nama_pelanggan' => 'required'
            ],
            [
                'no_pelanggan.required' => 'No wajib diisi',
                'no_pelanggan.unique' => 'NO sudah ada',
                'nama_pelanggan.required' => 'Nama wajib diisi'
            ]
        );

        Pdam::create([
            'tgl_tagihan' => $request->tgl_tagihan,
            'no_pelanggan' => $request->no_pelanggan,
            'nama_pelanggan' => $request->nama_pelanggan,
            'jumlah_meter' => $request->jumlah_meter,
            'biaya' => $request->biaya
        ]);

        return redirect('pdam');
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
        $row = Pdam::findOrFail($id);
        return view('pdam.edit', compact('row'));
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
                'no_pelanggan' => 'bail|required',
                'nama_pelanggan' => 'required'
            ],
            [
                'no_pelanggan.required' => 'No wajib diisi',
                'nama_pelanggan.required' => 'Nama wajib diisi'
            ]
        );

        $row = Pdam::findOrFail($id);
        $row->update([
            'tgl_tagihan' => $request->tgl_tagihan,
            'no_pelanggan' => $request->no_pelanggan,
            'nama_pelanggan' => $request->nama_pelanggan,
            'jumlah_meter' => $request->jumlah_meter,
            'biaya' => $request->biaya
        ]);

        return redirect('pdam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Pdam::findOrFail($id);
        $row->delete();

        return redirect('pdam');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $rows = Pdam::where('nama_pelanggan', 'like', "%" . $keyword . "%")->paginate(5);
        return view('pdam.index', compact('rows'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
