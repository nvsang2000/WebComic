<?php

namespace App\Http\Controllers;
use App\User;
use App\danhmuc;
use App\theloai;
use App\truyen;
use App\binhluan;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIndex() {
    	$users = user::all();
    	$sltk = user::where('sl',0)->get();
    	$sldm = danhmuc::where('sl',0)->get();
    	$sltl = theloai::where('sl',0)->get();
        $sltr = truyen::where('sl',0)->get();
        $slbl = binhluan::where('sl',0)->get();
    	//return view('admin.content',['taikhoan'=>$taikhoan],['soluongtk'=>$sltk],['soluongdm'=>$sldm]);
    	return view('admin.content',compact('users','sltk','sldm','sltl','sltr','slbl'));
    }
    public function getUser() {
    	$taikhoan = user::all();
    	return view('admin.user.user',['taikhoan'=>$taikhoan]);
    }
    public function getThemUser() {
    	return view('admin.user.them');
    }
    public function getDanhmuc() {
    	$danhmuc = danhmuc::all();
    	return view('admin.danhmuc.danhmuc',['danhmuc'=>$danhmuc]);
    }
    public function getThemDanhmuc() {
    	return view('admin.danhmuc.them');
    }
    public function getTheloai() {
    	$theloai = theloai::all();
    	return view('admin.theloai.theloai',['theloai'=>$theloai]);
    }
    public function getThemTheloai() {
    	return view('admin.theloai.them');
    }
    public function getBinhluan() {
        $binhluan = binhluan::all();
        return view('admin.binhluan.binhluan',['binhluan'=>$binhluan]);
    }
    public function getTruyen() {
    	$truyen = truyen::where('sl',0)->paginate(10);
    	return view('admin.truyen.truyen',['truyen'=>$truyen]);
    }
   
    public function getThemTruyen() {
    	return view('admin.truyen.them');
    }
    public function getCTtruyen(Request $req) {
    	$cttruyen = chitiettruyen::where('id',$req->id)->first();
    	return view('admin.chitiet',compact('cttruyen'));
    }

}
