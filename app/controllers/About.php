<?php

class about extends Controller
{
  public function index($nama = 'Sandhika', $pekerjaan = 'Dosen', $umur = 30)
  {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;

    $this->view('about/index', $data);
  }

  public function page()
  {
    $this->view('about/page');
  }
}
