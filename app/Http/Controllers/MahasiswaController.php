<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Mahasiswa;
use Illuminate\View\View;

class MahasiswaController extends Controller
{

    public function index(): View
    {
        $mahasiswa = Mahasiswa::all();
        return view ('mahasiswa.index')->with('mahasiswa', $mahasiswa);
    }

 
    public function create(): View
    {
        return view('mahasiswa.create');
    }

  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Mahasiswa::create($input);
        return redirect('mahasiswa')->with('flash_message', 'Mahasiswa Addedd!');
    }

    public function show(string $id): View
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.show')->with('mahasiswa', $mahasiswa);
    }

    public function edit(string $id): View
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit')->with('mahasiswa', $mahasiswa);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $mahasiswa = Mahasiswa::find($id);
        $input = $request->all();
        $mahasiswa->update($input);
        return redirect('mahasiswa')->with('flash_message', 'mahasiswa Updated!');  
    }

    
    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('mahasiswa')->with('flash_message', 'Mahasiswa deleted!'); 
    }
}
