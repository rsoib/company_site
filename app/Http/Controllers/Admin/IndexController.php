<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends AdminController
{
	public function __construct(){

		$this->template = 'admin.index';
	} 

    public function index()
    {
        $this->title = 'Панель управления';

        return $this->renderOutput(); 
    }

    

}
