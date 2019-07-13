<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

	protected $a_rep;
    protected $m_rep;
    protected $f_rep;
    protected $port_rep;
    protected $s_rep;
    protected $skil_rep;
    protected $partners_rep;


    protected $keywords;
    protected $meta_desc;
    protected $title;

    protected $template;
    protected $vars;

    protected $contentRightBar=FALSE;
    protected $contentLeftBar=FALSE;

    protected $bar= 'no';

    public function __construct(MenusRepository $m_rep){

        $this->m_rep = $m_rep;

    }


    public function renderOutput(){
    	
    }

}
