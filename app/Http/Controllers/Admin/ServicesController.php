<?php

namespace App\Http\Controllers\Admin;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;


class ServicesController extends AdminController
{

    public function __construct()
    {
        $this->template = 'admin.services.service_view';
    }

    public function index()
    {

        if (Gate::denies('VIEW_ADMIN_SERVICE')) {
            abort(403);
        }

        $this->title = 'Сервисы';

        $services = Service::all();

        $this->content = view('admin.services.service_content')->with('services',$services);
        $this->vars = array_add($this->vars,'content',$this->content);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('VIEW_ADMIN_SERVICE')) {
            abort(403);
        }

        $this->title = 'Добавление нового сервиса';

        $this->content = view('admin.services.service_add');
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

        if ($request->hasFile('icon'))
        {
            $file = $request->file('icon');

            $data['icon'] = '/services/'.md5($file->getClientOriginalName()).'.svg';



            $file->move(public_path().'/assets/images/services',$data['icon']);
        }else
        {
            $data['icon'] = "";
        }

        $service = new Service;
        $service->fill($data);

        if($service->save())
        {
            return redirect('/admin/adminServices')->with('status','Сервис успешно добавлен!');
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
        $service = Service::find($id);

        $this->title = 'Редактирование сервиса - '.$service->title;

        $this->content = view('admin.services.service_add')->with('service',$service)->render();
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
        $service = Service::find($id);

        $data = $request->except('_token');

        if ($request->hasFile('icon'))
        {
            $file = $request->file('icon');

            $data['icon'] = '/services/'.md5($file->getClientOriginalName()).'.svg';

            $file->move(public_path().'/assets/images/services',$data['icon']);
        }else
        {
            $data['icon'] = "";
        }

        $service->fill($data);

        if($service->update())
        {
            return redirect('/admin/adminServices')->with('status','Сервис успешно обновлен!');
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
        $service = Service::find($id);

        if($service->delete())
        {
            return redirect('/admin/adminServices')->with('status','Сервис успешно удалён!');
        }

    }
}
