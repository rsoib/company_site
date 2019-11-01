<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;

class IndexController extends AdminController
{
	public function __construct(){

		$this->template = 'admin.index';
	} 

    public function index()
    {
    	if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }

        $this->title = 'Панель управления';

        return $this->renderOutput(); 
    }

    

}
