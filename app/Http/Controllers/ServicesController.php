<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends SiteController
{
    public function __construct()
    {

    	$this->template = "service.service_view";
    }

    public function index(){

    	$this->vars = array();

        $this->title = 'Service';


        /* get services */
        $services = $this->getServices();

        /* get partners */

        $partners = $this->getPartners();

        $this->content = view('service.service_content')->with(['services'=>$services,'partners'=>$partners])->render();
        $this->vars = array_add($this->vars,'content',$this->content);

        return $this->renderOutput();
    }
}
