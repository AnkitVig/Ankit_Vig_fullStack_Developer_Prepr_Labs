<?php

namespace App\Http\Controllers;
use Mapper;
use Illuminate\Http\Request;

class MapController extends Controller
{
    //
    Mapper::renderJavascript();

	return view('map')
}
