<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MData;
use Predis\Command\Redis\SCRIPT;

class Data extends BaseController
{
    protected $mahasiswa;
    protected $zakat;

    public function __construct()
    {
        $this->zakat = new MData;
        // $this->tbl_mal = new MData;
        
    }

    public function index()
    {
        $data = $this->zakat->getData();

        $array = array(
            'hasil' => $data,
        );
        //var_dump($data);
        return view('V_showData_fitrah',$array);
    }

    public function insertDataFitrah()
    {
        return view('V_insertData_fitrah');
    }

    public function saveDataFitrah()
    {
        $data =[
            'nik'          => $this->request->getVar('nik'),
            'keluarga'         => $this->request->getVar('keluarga'),
            'no_hp'     => $this->request->getVar('no_hp'),
            'jenis_zakat'       => $this->request->getVar('jenis_zakat'),
            'jumlah_jiwa'     => $this->request->getVar('jumlah_jiwa'),
            'nominal'     => $this->request->getVar('nominal'),
        ];
        $insert = $this->zakat->saveDataFitrah($data);
        return redirect()->to('data');
        //$namakita = $this->request->getVar('nama');
        
    }

    public function editDataFitrah($nik)
    {
        $selectdata = $this->zakat->getSelectData($nik);
        $array = [
            'data' =>$selectdata,
        ];
        return view('V_editData_fitrah',$array);
    }
    public function saveEditDataFitrah($nik)
    {
        $data =[
            'nik'          => $this->request->getVar('nik'),
            'keluarga'         => $this->request->getVar('keluarga'),
            'no_hp'     => $this->request->getVar('no_hp'),
            'jenis_zakat'       => $this->request->getVar('jenis_zakat'),
            'jumlah_jiwa'     => $this->request->getVar('jumlah_jiwa'),
            'nominal'     => $this->request->getVar('nominal'),
        ];
        $update = $this->zakat->saveEditDataFitrah($data,$nik);
        return redirect()->to('data');
    }
    public function hapusDataFitrah($nik)
    {
        $selectdata = $this->zakat->hapusData($nik);
        return redirect()->to('data');
    }

}
