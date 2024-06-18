<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsPageController extends Controller
{
    public function vision_mission() {
      return view('about-us.vision-mission');
    }
}
