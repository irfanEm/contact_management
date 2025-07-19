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
        $contacts = $this->contactModel->findAll();
        return view('contacts/index', ['contacts' => $contacts]);
    }

    public function create()
    {
        return view('contacts/create');
    }

    public function store()
    {
        $data = $this->request->getPost([
            'email', 'password', 'nama', 'no_hp'
        ]);

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->contactModel->save($data);
        return redirect()->to('/contacts');
    }

    public function edit($id)
    {
        $contact = $this->contactModel->find($id);
        return view('contacts/edit', ['contact' => $contact]);
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
        return redirect()->to('/contacts');
    }

    public function delete($id)
    {
        $this->contactModel->delete($id);
        return redirect()->to('/contacts');
    }
}
