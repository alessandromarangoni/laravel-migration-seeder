<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trains;

class TrainsController extends Controller
{
    public function index(){

        $trains = Trains::all();
        $trains->each->delete();
        return view('welcome',compact('trains'));
    }
}
