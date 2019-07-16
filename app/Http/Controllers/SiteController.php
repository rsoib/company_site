<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menus;
use Menu;

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

    public function __construct(){


    }


    public function renderOutput(){
        
        $menu = $this->getMenu();

        $this->vars = array_add($this->vars,'keywords', $this->keywords);
        $this->vars = array_add($this->vars,'meta_desc', $this->meta_desc);
        $this->vars = array_add($this->vars,'title', $this->title);    

        
        $navigation = view("navigation")->with('menu',$menu)->render();
        $this->vars = array_add($this->vars,'navigation', $navigation);



        $footer = view("footer")->render();
        $this->vars = array_add($this->vars,'footer', $footer);    	

        return view($this->template)->with($this->vars);

    }


    public function getMenu()
    {
        $menus = Menus::all();

        $mBuilder = Menu::make('MyNav', function($m) use ($menus) {

            foreach ($menus as $item) {
                

                if ($item->parent == 0) {
                    
                    $m->add($item->title, $item->path)->id($item->id); 


                }else{

                    if($m->find($item->parent)){

                        $m->find($item->parent)->add($item->title, $item->path)->id($item->id);

                     }
                } 
            }

        });

        //dd($mBuilder);
        return $mBuilder;
    }

}
