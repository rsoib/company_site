<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menus;
use Menu;
use Gate;
use Lang;


class MenusController extends AdminController
{

    public function __construct()
    {
        $this->template = 'admin.menu.menu_view';
    }


    public function index()
    {

        if (Gate::denies('VIEW_ADMIN_MENU')) {
            abort(403);
        }

        $this->title = 'Пункты меню';

        $menus = $this->getAdminMenu();

        $this->content = view('admin.menu.menu_content')->with('menus',$menus)->render();
        $this->vars = array_add($this->vars,'content',$this->content);

        return $this->renderOutput();
    }


    public function getAdminMenu($parent = false)
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

        $this->title = 'Новый пункт меню';

        $tmp = $this->getAdminMenu()->roots();


         /*  ПОЛУЧАЕМ МЕНЮ

            Метод reduce() уменьшает коллекцию к одному значению, передавая
            результат каждой итерации в последующей итерации:
            В каестве второго параметра указываем значение для первого итерации
        */

        $menus = $tmp->reduce(function($returnMenus, $menu){

            $returnMenus[$menu->id] = $menu->title;
            return $returnMenus;


        },['0' => 'Родительский пункт меню']);


        $this->content = view('admin.menu.menu_add')->with('menus',$menus)->render();
        $this->vars = array_add($this->vars,'content',$this->content);

        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->except('_token');


        $menu = new Menus();

        $menu->fill($data);


        if ($menu->save())
        {
            return redirect('admin/adminMenus')->with('status',Lang::get('ru.success_addMenu'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('VIEW_ADMIN_MENU')) {
            abort(403);
        }


        $menu = Menus::find($id);

        $this->title = 'Редактрование - '.$menu->title;

        $tmp = $this->getAdminMenu()->roots();


         /*  ПОЛУЧАЕМ МЕНЮ

            Метод reduce() уменьшает коллекцию к одному значению, передавая
            результат каждой итерации в последующей итерации:
            В каестве второго параметра указываем значение для первого итерации
        */

        $menus = $tmp->reduce(function($returnMenus, $menu){

            $returnMenus[$menu->id] = $menu->title;
            return $returnMenus;


        },['0' => 'Родительский пункт меню']);


        $this->content = view('admin.menu.menu_add')->with(['menus'=>$menus,'menu'=>$menu])->render();
        $this->vars = array_add($this->vars,'content',$this->content);

        return $this->renderOutput();
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
        $data = $request->except('_token');

        $menu = Menus::find($id);

        $menu->fill($data);


        if ($menu->update())
        {
            return redirect('admin/adminMenus')->with('status',Lang::get('ru.success_editMenu'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menus::find($id);

        if ($menu->delete())
        {
            return redirect('admin/adminMenus')->with('status',Lang::get('ru.success_deleteMenu'));
        }
    }
}
