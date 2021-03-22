<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->GuruModel = new GuruModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'guru' => $this->GuruModel->allData(),
        ];
        return view('v_guru', $data);
    }

    public function detail($id_guru)
    {
        $data = [
            'guru' => $this->GuruModel->detailData($id_guru),
        ];
        return view('v_detailguru', $data);
    }

    public function add()
    {
        return view('v_addguru');
    }

    public function insert()
    {
        Request()->validate([
            'nip' => 'required|unique:tbl_guru,nip|min:5|max:10',
            'nama_guru' => 'required',
            'mapel' => 'required',
            'alamat' => 'required',
        ], [
            'nip.required' => 'Wajib Di isi !!!',
            'nip.unique' => 'Nip Ini Sudah Ada !!!',
            'nip.min' => 'Min 5 Karakter',
            'nip.max' => 'Max 10 Karakter',
            'nama_guru.required' => 'Wajiib Di isi !!!',
            'mapel.required' => 'Wajib Di isi !!!',
            'alamat.required' => 'wajbi diisi !!',
        ]);

        $data = [
            'nip' => Request()->nip,
            'nama_guru' => Request()->nama_guru,
            'mapel' => Request()->mapel,
            'alamat' => Request()->alamat,
        ];

        $this->GuruModel->addData($data);
        return redirect()->route('guru')->with('pesan', 'Data Berhasil Di Tambahkan !!!');
    }

    public function edit($id_guru)
    {
        $data = [
            'guru' => $this->GuruModel->detailData($id_guru),
        ];
        return view('v_editguru', $data);
    }

    public function update($id_guru)
    {
        Request()->validate([
            'nip' => 'required|min:5|max:10',
            'nama_guru' => 'required',
            'mapel' => 'required',
            'alamat' => 'required',
        ], [
            'nip.required' => 'Wajib Di isi !!!',
            'nip.unique' => 'Nip Ini Sudah Ada !!!',
            'nip.min' => 'Min 5 Karakter',
            'nip.max' => 'Max 10 Karakter',
            'nama_guru.required' => 'Wajiib Di isi !!!',
            'mapel.required' => 'Wajib Di isi !!!',
            'alamat.required' => 'wajbi diisi !!',
        ]);

        $data = [
            'nip' => Request()->nip,
            'nama_guru' => Request()->nama_guru,
            'mapel' => Request()->mapel,
            'alamat' => Request()->alamat,
        ];

        $this->GuruModel->editData($id_guru, $data);
        return redirect()->route('guru')->with('pesan', 'Data Berhasil Di Update !!!');
    }

    public function delete($id_guru)
    {
        $this->GuruModel->deleteData($id_guru);
        return redirect()->route('guru')->with('pesan', 'Data Berhasil Di Hapus !!!');
    }


}
