<?php

namespace App\Controllers;

use App\Models\Soal;

class Home extends BaseController
{
    public function index(): string
    {
        return view('soal');
    }

    public function soalCat()
    {
        $soal = new Soal();
        $data = $soal->orderBy('grp_soal', 'DESC')->findAll();
        return $this->response
            ->setStatusCode(200)
            ->setJSON($data);
    }

    public function allSoal()
    {
        $soal = new Soal();
        $data = $soal->orderBy('grp_soal', 'DESC')->findAll();
        return view('allsoal', [
            'data' => $data
        ]);
    }

    public function saveAnswer()
    {
        $soal = new Soal();
        $soal->update($this->request->getVar('id'), [
            'jawaban' => $this->request->getVar('jawaban')
        ]);
        return $this->response->setJSON(['status' => 'success']);
    }
}
