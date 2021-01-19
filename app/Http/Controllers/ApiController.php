<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\truyen;
use App\user;
use App\chapter;


class ApiController extends Controller
{
    public function getApiTruyen(){
        $truyen = truyen::all();
        Return response()->json($truyen);
    }
    public function getAllUser(){
        $taikhoan = user::all();
    	return response()->json($taikhoan);
    }
    public function getChapter(){
        $chapter = chapter::all();
    	return response()->json($chapter);
    }
}
