<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\msbuku;

class CustomerController extends Controller
{
    protected $file = 'master/customer';
    protected $link = 'master/customer';

    public function getView($parm = null){
        return is_null($parm) ? $this->file : sprintf('%s/%s', $this->file, $parm);
    }

    public function index(){
        $data = [];
        $data['link'] = $this->link;
        $data['content'] = $this->getView('CustomerView');
        $data['script_footer'] = $this->getView('scriptfooter');
        // $data['data'] = msbuku::all();
        
        return view('index', $data);
    }

    public function viewCreate(){
        $data = [];
        $data['link'] = $this->link;
        $data['content'] = $this->getView('CreateView');
        $data['script_footer'] = $this->getView('scriptfooter');
        
        return view('index', $data);
    }
}
