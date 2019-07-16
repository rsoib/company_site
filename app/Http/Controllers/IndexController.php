<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class IndexController extends SiteController
{
    
    public function __construct(){

    	$this->template = "index";
    }

    public function index(){

    	$this->vars = array();

    	$slider = $this->getSlider();

    	$this->title = 'Home';

    	$this->content = view("content")->with('slider',$slider)->render();
    	$this->vars = array_add($this->vars,'content',$this->content);


    	return $this->renderOutput();
    }

    public function getSlider(){

    	$slider = Blog::orderBy('id','desc')->limit(3)->get();
    	return $slider;
    }
}
