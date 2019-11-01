<?php

namespace App\Http\Controllers\Admin;

use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filter;
use App\Skill;


class PortfoliosController extends AdminController
{

    public function __construct()
    {
        $this->template = "admin.portfolios.portfolio_view";
    }

    public function index()
    {
        $this->title = "Портфолио";

        $portfolios = $this->getPortfolios();

        /*if (session()) 
        {
            $session =  session()->get('key');
            $count = count($session);

           
            //dd($session);

        }*/

        $this->content = view('admin.portfolios.portfolio_content')->with(['portfolios'=>$portfolios])->render();
        $this->vars = array_add($this->vars,'content',$this->content);

        

        return $this->renderOutput();
    }

    public function getPortfolios()
    {
        $portfolios = Portfolio::all();
        return $portfolios;
    }



    public function create()
    {
        $this->title = "Добавить новую работу";

        $filters = $this->getFilters();

        $this->content = view('admin.portfolios.portfolio_add')->with('filters',$filters);
        $this->vars = array_add($this->vars,'content',$this->content);

        return $this->renderOutput();
    }


    public function getFilters()
    {

        $filters = Filter::all();
        return $filters;

    }
    

    public function store(Request $request)
    {
        $data = $request->except('_token');
        
        
        if ($request->hasFile('images'))
        {
            $file = $request->file('images');

            $data['images'] ='portfolio/'.$file->getClientOriginalName();

            $file->move(public_path().'/assets/images/portfolio',$data['images']);
        }else
        {
            $data['icon'] = "";
        }

        $portfolio = new Portfolio;

        //$skill = Skill::find(1);
        
        //$number = (int)$data['title'];


         // $skill->percent = $number;

         // $skill->update();

        /*$key = 'key';
        $value = [$data['filter_id']=>$data['title'] ];

        $request->session()->push($key,$value);*/

        $portfolio->filter_id = $data['filter_id'];

        $portfolio->fill($data);

        if($portfolio->save())
        {
            return redirect('/admin/adminPortfolios')->with('status','Портфолио успешно добавлен!');
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
        $portfolio = Portfolio::find($id);

        $this->title = "Редактирование - ".$portfolio->title;

        $filters = $this->getFilters();

        $this->content = view('admin.portfolios.portfolio_add')->with(['filters'=>$filters,
                                                                       'portfolio'=>$portfolio]);
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

        $portfolio = Portfolio::find($id);

        $data = $request->except('_token');
        

        if ($request->hasFile('images'))
        {
            $file = $request->file('images');

            $data['images'] ='portfolio/'.$file->getClientOriginalName();

            $file->move(public_path().'/assets/images/portfolio',$data['images']);
        }else
        {
            $data['icon'] = "";
        }


        $portfolio->filter_id = $data['filter_id'];

        $portfolio->fill($data);

        if($portfolio->update())
        {
            return redirect('/admin/adminPortfolios')->with('status','Портфолио успешно обновлен!');
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
        $portfolio = Portfolio::find($id);

        if($portfolio->delete())
        {
            return redirect('/admin/adminPortfolios')->with('status','Портфолио успешно удалён!');
        }
    }
}
