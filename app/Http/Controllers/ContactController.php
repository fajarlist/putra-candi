<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->ContactModel = new ContactModel();
    }

    public function index()
    {
        $data = [
            'contact'=> $this -> ContactModel -> allData(),
        ];
        return view('contact/contact', $data);
    }

    public function detail($id_contact)
    {
        if(!$this->ContactModel -> detailData($id_contact)){
            abort(404);
        }
        $data=[
            'contact'=>$this->ContactModel->detailData($id_contact),
        ];
        return view($data);
    }

    public function Add()
    {
        return view('contact/addcontact');
    }

    public function insert()
    {

        Request()->validate([
        'nama_contact'=>'required',
        'email'=>'required',
        'telp'=>'required',
        'pesan'=>'required',
        ]);

        $data =[
            'nama_contact' => Request()->nama_contact,
            'email' => Request()->email,
            'telp' => Request()->telp,
            'pesan' => Request()->pesan,
        ];

        $this -> ContactModel -> addData($data);

        return redirect() -> route('index') -> with('pesan', 'Data berhasil ditambahkan');
    }

   
}
