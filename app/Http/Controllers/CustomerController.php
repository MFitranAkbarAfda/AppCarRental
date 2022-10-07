<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
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
        $data = Customer::all();
        return view('pages.customer.index',compact('data','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.customer.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nik'       => 'required',
            'nama'      => 'required',
            'jenkel'    => 'required',
            'no_telp'   => 'required',
            'email'     => 'required',
            'alamat'    => 'required'
        ]);

        $data = Customer::create([
            'nik'       =>  $request->nik,
            'nama'      =>  $request->nama,
            'jenkel'    =>  $request->jenkel,
            'no_telp'   =>  $request->no_telp,
            'email'     =>  $request->email,
            'alamat'    =>  $request->alamat
        ]);

        return redirect('/customer');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::findorFail($id);
        return view('pages.customer.detail', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('pages.customer.edit', compact('customer'));
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
            'nik'       => 'required',   
            'nama'      => 'required',
            'jenkel'    => 'required',
            'no_telp'   => 'required',
            'email'     => 'required',
            'alamat'    => 'required',
        ]);

            $customer = Customer::find($id);
            $customer->nik = $request->nik;
            $customer->nama = $request->nama;
            $customer->jenkel = $request->jenkel;
            $customer->no_telp = $request->no_telp;
            $customer->email = $request->email;
            $customer->alamat = $request->alamat;
            $customer->save();

            return redirect('/customer');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $customer = Customer::findorFail($id);
        $customer->delete();
        return redirect('/customer');
    }
}