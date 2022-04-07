<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::all();  
        return view('customer.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer =Customer::all();
        return view('customer.create',['customer'  =>$customer]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                   //melakukan validasi data
                   $customer = new Customer();
                   $customer -> nik = $request-> get('nik');
                   $customer -> nama = $request-> get('nama');
                   $customer -> alamat = $request-> get('alamat');
                   $customer -> email = $request-> get('email');
                   $customer -> username = $request-> get('username');
                   $customer -> password = $request-> get('password');
                   $customer -> no_hp = $request-> get('no_hp');
                   $customer -> jenis_kelamin = $request-> get('jenis_kelamin');
                   
                   $customer->  save();
       
                   //jika data berhasil ditambahkan, akan kembali ke halaman  dengan status success dan menampilkan pesan data berhasil ditambahkan
                   return redirect()->route('customer.index')
                       ->with('success', 'Customers Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik)
    {

        Customer::find($nik)->delete();
        return redirect()->route('customer.index')
            -> with('success', 'Customer Berhasil Dihapus');
    }
}
