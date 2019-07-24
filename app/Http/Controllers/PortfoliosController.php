<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Filter;

class PortfoliosController extends SiteController
{
    
    public function __construct(){

    	$this->template = 'portfolios.portfolio_view';
    }

    public function index(){

    	$this->title = 'Портфолио';
    	$portfolios = $this->getPortfolios();

    	$filters = $this->getFilters();

    	$this->content = view('portfolios.portfolio_content')->with(['portfolios'=>$portfolios,'filters'=>$filters]);
    	$this->vars = array_add($this->vars,'content',$this->content);

    	return $this->renderOutput();
    }

  	public function getPortfolios() {

  		$portfolios = Portfolio::all();
  		return $portfolios;
  	}

  	public function getFilters() {

  		$filters = Filter::all();
  		return $filters;
  	}

}
