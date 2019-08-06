<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menus;
use Menu;
class MenusController extends AdminController
{

    public function __construct()
    {
        $this->template = 'admin.menu.menu_view';
    }


    public function index()
    {
        $this->title = 'Пункты меню';

        $menus = $this->getAdminMenu();

        $this->content = view('admin.menu.menu_content')->with('menus',$menus)->render();
        $this->vars = array_add($this->vars,'content',$this->content);

        return $this->renderOutput();
    }


    public function getAdminMenu()
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




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
