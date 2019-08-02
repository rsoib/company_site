<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menus;
use Menu;
use App\Skill;
use App\Service;
use App\Partner;

class SiteController extends Controller
{

	/*protected $a_rep;
    protected $m_rep;
    protected $f_rep;
    protected $port_rep;
    protected $s_rep;
    protected $skil_rep;
    protected $partners_rep;*/


    protected $keywords;
    protected $meta_desc;
    protected $title;

    protected $template;
    protected $vars;

    protected $contentRightBar=FALSE;
    protected $contentLeftBar=FALSE;

    protected $bar= 'no';

    public function __construct(){


    }


    public function renderOutput(){
        
        $menu = $this->getMenu();

        $this->vars = array_add($this->vars,'keywords', $this->keywords);
        $this->vars = array_add($this->vars,'meta_desc', $this->meta_desc);
        $this->vars = array_add($this->vars,'title', $this->title);    

        
        $navigation = view("navigation")->with('menu',$menu)->render();
        $this->vars = array_add($this->vars,'navigation', $navigation);


        if ($this->contentRightBar) {
            
            $rightBar = $this->contentRightBar;

            $this->vars = array_add($this->vars,'rightBar', $rightBar);
        }


        $m_footer = Menus::limit(3)->get();
        $footer = view("footer")->with('m_footer',$m_footer)->render();
        $this->vars = array_add($this->vars,'footer', $footer);    	

        return view($this->template)->with($this->vars);

    }


    // Get menu

    public function getMenu()
    {
        $menus = Menus::all();
        //dd($menus);

        $mBuilder = Menu::make('MyNav', function($m) use ($menus) {

            foreach ($menus as $item) {
                

                if ($item->parent == 0) {
                    

                    $m->add($item->title, $item->path)->active()->id($item->id); 


                }else{

                    if($m->find($item->parent)){

                        $m->find($item->parent)->add($item->title, $item->path)->active('')->id($item->id);

                     }
                } 
            }

        });

        //dd($mBuilder);
        return $mBuilder;
    }


    // Get Skills

     public function getSkills(){

        $skills = Skill::limit(4)->get();

        return $skills;
    }

    // Get Services

    public function getServices($limit = FALSE){

        if ($limit) {
            $services = Service::limit($limit)->get();
        }else{
            $services = Service::limit(6)->get();
        }
        return $services;
    }

    // Get Partners
    public function getPartners(){

        $partners = Partner::limit(5)->get();
        return $partners;
    }
}
