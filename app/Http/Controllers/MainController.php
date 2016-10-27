<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function index()
    {
      return view('index');
    }

    public function rice()
    {
      return view("rice");
    }
    
    public function tofu()
    {
      return view("tofu");
    }
    
    public function chicken()
    {
      return view("chicken");
    }
    
    public function noodles()
    {
      return view("noodles");
    }
    
    public function oysters()
    {
      return view("oysters");
    }
    
    public function beef()
    {
      return view("beef");
    }
    
    public function squid()
    {
      return view("squid");
    }
    
    public function staple()
    {
      return view("staple");
    }
    
    public function pearl()
    {
      return view("pearl");
    }
    
}
