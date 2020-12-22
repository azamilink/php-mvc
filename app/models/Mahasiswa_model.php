<?php

class Mahasiswa_model
{
  private $mhs = [
    [
      "nama" => "sandhika",
      "nrp" => "7474993",
      "email" => "sandhika@gmail.com",
      "jurusan" => "Teknik Informatika"
    ],

    [
      "nama" => "dody",
      "nrp" => "87669766",
      "email" => "dody@gmail.com",
      "jurusan" => "Teknik Mesin"
    ],

    [
      "nama" => "erik",
      "nrp" => "93833638",
      "email" => "erik@gmail.com",
      "jurusan" => "Teknik Elektronika"
    ]
  ];

  public function getAllMahasiswa()
  {
    return $this->mhs;
  }
}
