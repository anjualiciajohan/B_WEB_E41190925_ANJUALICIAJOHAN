<?php

namespace App\Http\Controllers;

use App\Models\ManagementUser;
use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
        $nama = "Arvita Agus Kurniasari";
        $pelajaran = ["Algoritma & Pemograman","kalkulus","Pemograman Web"];

        return view('home', compact('nama','pelajaran'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "Method ini nantinya akan digunakan untuk mengambil semua data user";

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManagementUser  $managementUser
     * @return \Illuminate\Http\Response
     */
    public function show(ManagementUser $managementUser)
    {
        //return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=" .$id;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManagementUser  $managementUser
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" .$id;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManagementUser  $managementUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return "Method ini nantinya akan digunakan untuk mengubah form untuk mengubah data user dengan id=" .$id;
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManagementUser  $managementUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return "Method ini nantinya akan digunakan untuk menghapus form data user dengan id=" .$id;
    }
}
