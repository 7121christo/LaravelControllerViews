<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;


class InfoController extends Controller
{
    public function index() {
        return view('infos', [
            "title" => "Infos",
            "infos" =>  Info::all()
        ]);
    }

    public function show($slug) {
        return view('info', [
            "title" => "More Information",
            "info" => Info::find($slug)
        ]);
    }


}
