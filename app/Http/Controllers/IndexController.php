<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Blog;
use App\Feature;
use App\Portfolio;

class IndexController extends SiteController
{
    
    public function __construct(){

    	$this->template = "index";
    }

    public function index(){

    	//$this->vars = array();

        $this->title = 'Home';

        /* get articles for slider */ 

    	$sliderItems = $this->getSlider();
        $slider = view("slider")->with('slider',$sliderItems)->render();
        $this->vars = array_add($this->vars,'slider',$slider);

        /* get features */

        $featureItems = $this->getFeatures();

        $featureView = view("features")->with('feature',$featureItems)->render();
        $this->vars = array_add($this->vars,'features',$featureView);

        /* get portfolios for content */
    	
        $portfolios = $this->getPortfolios();

         /* get Services for content */

        $services = $this->getServices();

        /* get Skills for content */

        $skills = $this->getSkills();

        /* get Partners for content */
        $partners = $this->getPartners();


        $this->content = view("content")->with(['portfolios'=>$portfolios,
                                                'services'=>$services,
                                                'skills' => $skills,
                                                'partners' => $partners
                                                ])->render();

        
    	$this->vars = array_add($this->vars,'content',$this->content);

    	return $this->renderOutput();
    }

    public function getSlider(){

    	$slider = Blog::orderBy('id','desc')->limit(3)->get();
    	return $slider;
    }

    public function getFeatures()
    {
        $features = Feature::limit(4)->get();
        return $features;
    }

    public function getPortfolios(){

        $portfolios = Portfolio::limit(6)->get();
        return $portfolios;
    }

}
