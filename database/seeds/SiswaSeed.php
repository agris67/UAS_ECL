<?php

use Illuminate\Database\Seeder;

class SiswaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $model = new \agris\SiswaModel;
      $model->nama_lengkap = "agris";
      $model->jk = "laki-laki";
      $model->foto = "";
      $model->id_kelas = 1;
      $model->save();
    }
}
