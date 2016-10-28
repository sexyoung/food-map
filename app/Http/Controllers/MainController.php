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
      return view("page", [
        "college" => "tofu",
        "college_name" => "豆腐學院",
        "college_intro" => "黃豆編織而成的美麗衣裳<br />料理方式變化萬千<br />湯或小菜都有它",
        "college_intro_2" => "身段柔軟 沒有包袱",
        "departments" => [
          "preserved-egg-tofu" => [
            "name" => "皮蛋豆腐系",
            "intro" => "一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "stinky-tofu" => [
            "name" => "臭豆腐系",
            "intro" => "一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ],
          "mapo-tofu" => [
            "name" => "麻婆豆腐系",
            "intro" => "一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十",
            "ability" => [
              "柔軟指數1" => "☺☺☺☺☺☺",
              "柔軟指數2" => "☺☺☺☺☺☺",
              "柔軟指數3" => "☺☺☺☺☺☺"
            ]
          ]
        ]
      ]);
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
