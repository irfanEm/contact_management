<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{
    protected $contactModel;

    public function __construct()
    {
        $this->contactModel = new ContactModel();
        helper(['form']);
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Kontak',
            'contacts' => $this->contactModel->findAll()
        ];

        return view('templates/header', $data)
            . view('contacts/index', $data)
            . view('templates/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Kontak'
        ];

        return view('templates/header', $data)
            . view('contacts/create', $data)
            . view('templates/footer');
    }

    public function store()
    {
        $data = $this->request->getPost([
            'email', 'password', 'nama', 'no_hp'
        ]);

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->contactModel->save($data);

        return redirect()->to('/contacts')->with('message', 'Kontak berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $contact = $this->contactModel->find($id);

        $data = [
            'title' => 'Edit Kontak',
            'contact' => $contact
        ];

        return view('templates/header', $data)
            . view('contacts/edit', $data)
            . view('templates/footer');
    }

    public function update($id)
    {
        $data = $this->request->getPost([
            'email', 'nama', 'no_hp'
        ]);

        if ($this->request->getPost('password')) {
            $data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        }

        $this->contactModel->update($id, $data);

        return redirect()->to('/contacts')->with('message', 'Kontak berhasil diupdate!');
    }

    public function delete($id)
    {
        $this->contactModel->delete($id);

        return redirect()->to('/contacts')->with('message', 'Kontak berhasil dihapus!');
    }
}
