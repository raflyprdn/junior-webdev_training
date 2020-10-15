<?php

namespace App\Controllers;

use App\Models\JamurModel;

class Jamur extends BaseController
{
    protected $jamurModel;

    public function __construct()
    {
        $this->jamurModel = new JamurModel();
    }

    public function index()
    {
        return view('employee/dashboard');
    }

    public function add_data()
    {
        $data = [
            'title' => 'Input Data - E-Jamur',
            'validation' => \Config\Services::validation()
        ];

        return view('employee/add_data', $data);
    }

    public function save()
    {
        //input validation
        if (!$this->validate([
            'date' => [
                'rules' => 'required',
                'errors' => '{field} harus dipilih'
            ],
            'variance' => [
                'rules' => 'required',
                'errors' => '{field} harus diisi'
            ],
            'weight' => [
                'rules' => 'required',
                'errors' => '{field} harus diisi'
            ],
            'location' => [
                'rules' => 'required',
                'errors' => '{field} harus diisi'
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/jamur/add_data')->withInput()->with('validation', $validation);
        }

        $this->jamurModel->save([
            'date' => $this->request->getPost('date'),
            'variance' => $this->request->getPost('variance'),
            'weight' => $this->request->getPost('weight'),
            'location' => $this->request->getPost('location')
        ]);

        session()->setFlashData('message', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/jamur');
    }

    public function delete($id)
    {
        $this->jamurModel->delete($id);
        session()->setFlashData('message', 'Data berhasil dihapus');
        return redirect()->to('/jamur');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Ubah Data - E-Jamur',
            'validation' => \Config\Services::validation(),
            'jamur' => $this->jamurModel->where(['jamur_id' => $id])->first()
        ];

        return view('employee/edit', $data);
    }

    public function update($id)
    {
        $this->jamurModel->save([
            'jamur_id' => 'id',
            'date' => $this->request->getPost('date'),
            'variance' => $this->request->getPost('variance'),
            'weight' => $this->request->getPost('weight'),
            'location' => $this->request->getPost('location')
        ]);

        session()->setFlashData('message', 'Data Berhasil Diubah.');

        return redirect()->to('/jamur');
    }
}
