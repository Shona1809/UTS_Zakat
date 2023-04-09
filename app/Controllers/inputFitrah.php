<?php

namespace App\Controllers;

class inputFitrah extends BaseController
{
    public function index(){
        $data = array(
            'tittle'  => 'Data',
            'isi'=> 'V_insertData_fitrah'
        );
        return view ('layout/v_wrapper', $data);
    }

}
