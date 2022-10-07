<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use App\Merk;

class MobilController extends Controller
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
        $no = 1;
        $mobil = Mobil::all();
        $merk = Merk::all();

        return view('pages.mobil.index', compact('mobil','merk','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merk = Merk::all();
        return view('pages.mobil.tambah', compact('merk'));
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
            'foto_mobil'    =>    "required|image|max:2048",
            'plat_mobil'    =>    "required",
            'nama_mobil'    =>    "required",
            'id_merk'       =>    "required",
            'tahun'         =>    "required",
            'harga'         =>    "required",
            'warna'         =>    "required"
        ]);

        $image = $request->file('foto_mobil');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('foto_mobil'), $new_name);

        $data = Mobil::create([
            'foto_mobil'    =>    $new_name,
            'plat_mobil'    =>    $request->plat_mobil,
            'nama_mobil'    =>    $request->nama_mobil,
            'id_merk'       =>    $request->id_merk,
            'tahun'         =>    $request->tahun,
            'harga'         =>    $request->harga,
            'warna'         =>    $request->warna
        ]);

        return redirect('/mobil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = Mobil::find($id);
        return view('pages.mobil.detail', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = Mobil::find($id);
        $merk = Merk::all();
        return view('pages.mobil.edit', compact('mobil'));
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
        $this->validate($request,[
            'plat_mobil'        => 'required',
            'nama_mobil'        => 'required',
            'tahun'             => 'required',
            'harga'             => 'required',
            'warna'             => 'required'
        ]);

            $mobil = Mobil::find($id);
            $mobil->plat_mobil  = $request->plat_mobil;
            $mobil->nama_mobil  = $request->nama_mobil;
            $mobil->tahun       = $request->tahun;
            $mobil->harga       = $request->harga;
            $mobil->warna       = $request->warna;
            $mobil->save();

            return redirect('/mobil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobil = Mobil::findorFail($id);
        $mobil->delete();

        return redirect('/mobil');
    }
}
