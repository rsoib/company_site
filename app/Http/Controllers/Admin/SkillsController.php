<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Skill;
use Gate;
use Illuminate\Support\Facades\Lang;


class SkillsController extends AdminController
{

    public function __construct()
    {
        $this->template = 'admin.skills.skills_view';
    }


    public function index()
    {

        if (Gate::denies('VIEW_ADMIN_SKILL')) {
            abort(403);
        }


        $this->title = 'Технологии';

        $skills = $this->getSkills();

        $this->content = view('admin.skills.skills_content')->with('skills',$skills)->render();
        $this->vars = array_add($this->vars,'content',$this->content);

        return $this->renderOutPut();
    }


    public function getSkills()
    {
        $skills = Skill::orderBy('id','desc')->get();
        return $skills;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->title = Lang::get('ru.skills');

        $this->content = view('admin.skills.skill_add');
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

        $skill = new Skill();

        $skill->fill($data);

        if ($skill->save())
        {
            return redirect('admin/adminSkills')->with('status','success');
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
        $skill = Skill::find($id);

        $this->title = 'Редактрование - '.$skill->title;

        $this->content = view('admin.skills.skill_add')->with('skill',$skill)->render();
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

        $skill = Skill::find($id);

        $skill->fill($data);

        if ($skill->update())
        {
            return redirect('admin/adminSkills')->with('status',Lang::get('ru.skill_update'));
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
        $skill = Skill::find($id);

        if ($skill->delete())
        {
            return redirect('admin/adminSkills')->with('status','deleted');
        }
    }
}
