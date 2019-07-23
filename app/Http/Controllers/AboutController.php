<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;

class AboutController extends SiteController
{	

	public function __construct(){

    	$this->template = "about/about_view";
    }
    
	public function index(){

		$this->title = 'Про нас';

		/* get skills */
		$skills = $this->getSkills();

		/* get personals */
		$personals = $this->getPersonals();


		$this->content = view('about/about_content')->with(['skills'=>$skills, 'personals'=>$personals])->render();
		$this->vars = array_add($this->vars,'content',$this->content);

		return $this->renderOutput();
	}

	public function getPersonals()
	{
		$personals = Personal::all();
		return $personals;
	}

}
