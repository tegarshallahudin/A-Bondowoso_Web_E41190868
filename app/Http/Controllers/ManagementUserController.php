<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    
    public function index()
    {
        return "Method ini nantinya akan digunakan untuk mengambil semua data user";
    }

    public function create()
    {
        return "Method ini nantinya akan digunakan untuk mengambil semua data user";
    }

    public function store(Request $request)
    {
        return "Method ini nantinya akan digunakan untuk mengambil semua data user";
    }

    public function show($id)
    {
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=". $id;
    }

    public function edit($id)
    {
        return "Method ini nantinya akan digunakan unutk mengubah data user dengan id=". $id;
    }

    public function update(Request $request, $id)
    {
        return "Method ini nantinya akan digunakan unutk mengubah data user dengan id=". $id;
    }

    public function destroy($id)
    {
        return "Method ini nantinya akan digunakan unutk mengubah data user dengan id=". $id;
    }

}
