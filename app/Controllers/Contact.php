<?php

namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\RESTful\ResourceController;

class Contact extends ResourceController
{
    protected $modelName = ContactModel::class;
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $data = $this->model->find($id);

        if (!$data) {
            return $this->failNotFound("Kontak dengan ID $id tidak ditemukan");
        }

        return $this->respond($data);
    }

    public function create()
    {
        $data = $this->request->getJSON(true);
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        if ($this->model->insert($data)) {
            return $this->respondCreated($data);
        }

        return $this->fail($this->model->errors());
    }

    public function update($id = null)
    {
        $data = $this->request->getJSON(true);

        if (!empty($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        } else {
            unset($data['password']); // biar gak overwrite dengan kosong
        }

        if ($this->model->update($id, $data)) {
            return $this->respond(['status' => 'updated']);
        }

        return $this->fail($this->model->errors());
    }

    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id' => $id]);
        }

        return $this->failNotFound("Kontak dengan ID $id tidak ditemukan");
    }
}
