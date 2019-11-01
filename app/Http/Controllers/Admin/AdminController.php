<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Menu;

class AdminController extends Controller
{
    protected $user;

    protected $template;

    protected $content = FALSE;

    protected $title;

    protected $vars;

    public function __construct(){

        $this->user = Auth::user();


    }


    public function renderOutput()
    {

        $this->vars = array_add($this->vars,'title',$this->title);

        $menus = $this->getMenu();


        $navigation = view('admin.navigation')->with('menus',$menus)->render();

        $this->vars = array_add($this->vars,'navigation',$navigation);

        return view($this->template)->with($this->vars);
    }

    public function getMenu()
    {
        return Menu::make('adminMenu',function($menu){

            $menu->add('Меню',array('route' => 'adminMenus.index'));
           // $menu->add('Харкатеристика',array('route' => 'adminMenus.index'));
            $menu->add('Технологии',array('route' => 'adminSkills.index'));
            $menu->add('Сервиси',array('route' => 'adminServices.index'));
            $menu->add('Портфолио',array('route' => 'adminPortfolios.index'));
            $menu->add('Блог',array('route' => 'adminBlog.index'));
            $menu->add('Партнеры',array('route' => 'home'));
            $menu->add('Пользователи',array('route' => 'home'));
           // $menu->add('Привилегии',array('route' => 'home'));
        });
    }
}
