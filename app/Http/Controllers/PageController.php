<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Session;
use DB;
use Socialite;
use App\User;
use App\binhluan;
use App\danhmuc;
use App\theloai;
use App\truyen;
use App\top;
use App\SocialAccount;
use Hash;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
    	$danhmuc = danhmuc::all();
    	$theloai = theloai::all();
        $truyen = truyen::where('trangthai',0)->paginate(6);
        $update = truyen::whereDay('created_at',16)->paginate(10);
        $max = DB::table('truyen')->orderBy('id', 'desc')->paginate(1);
        $hot = truyen::where('iddanhmuc',1)->paginate(5);
        $new = truyen::where('id','<',37)->paginate(10);
        $stt = DB::table('truyen')->orderBy('id', 'asc')->limit(10)->get();
        $top = DB::table('top')->get();
        // $view = truyen::where('view','<',37)->paginate(10);
    	return view('trangchu.content',compact('danhmuc','theloai','truyen','update','hot','new'))->with('max',$max)->with('top',$top);
    }

    public function getDanhmuc($type) {
    	$danhmuc = danhmuc::all();
    	$theloai = theloai::all();
    	$truyen_danhmuc = truyen::where('iddanhmuc',$type)->paginate(8);
    	return view('trangchu.danhmuc',compact('danhmuc','theloai','truyen_danhmuc'));
    }
    public function getTheloai($type) {
    	$danhmuc = danhmuc::all();
    	$theloai = theloai::all();
    	$truyen_theloai = truyen::where('idtheloai',$type)->paginate(8);
    	return view('trangchu.theloai',compact('danhmuc','theloai','truyen_theloai'));
    }

    public function getLogin() {
    	$danhmuc = danhmuc::all();
    	$theloai = theloai::all();
    	return view('trangchu.login',compact('danhmuc','theloai'));
    }
    public function getReg() {
    	$danhmuc = danhmuc::all();
    	$theloai = theloai::all();
    	return view('trangchu.reg',compact('danhmuc','theloai'));
    }

    public function getChitiet(Request $request) {
        $danhmuc = danhmuc::all();
        $theloai = theloai::all();
        $truyen = truyen::where('id',$request->id)->first();
        $comment = binhluan::where('idtruyen',$request->id)->get();   
        return view('trangchu.chitiet',compact('danhmuc','theloai','truyen','comment'));
    }

    public function getCanhan(Request $request) {
        $danhmuc = danhmuc::all();
        $theloai = theloai::all();
        $user = user::where('id',$request->id)->first();
        return view('trangchu.canhan',compact('danhmuc','theloai','user'));
    }

    public function postReg(Request $request) {
        $this->validate($request,[
            'ten' =>'required|min:3|max:20',
            'email' =>'required|unique:users,email|min:3|max:100',
            'password' =>'required|min:6|max:20',
            'password_confirm' =>'required|same:password',
        ],
        [
            'ten.required'=>'Bạn chưa nhập tên',
            'ten.min'=>'Tên phải có ít nhất 3 ký tự',
            'pass.required'=>'Bạn chưa nhập mật khẩu',
            'pass.min'=>'Mật khẩu phải có độ dài 6 ký tự',
            'password_confirm.required'=>'Bạn chưa nhập mật khẩu',
            'password_confirm.same'=>'Xác nhận mật khẩu không giống nhau',
            'email.required'=>'Bạn chưa nhập email',
            'email.unique'=>'Email đã tồn tại',
        ]);
        $taikhoan = new user;
        $taikhoan->name = $request->ten;
        $taikhoan->gioitinh = $request->selector1;
        $taikhoan->email = $request->email;
        $taikhoan->password = Hash::make($request->password);
        $taikhoan->sl = 0;
        $taikhoan->save();

        return redirect('register')->with('thongbao','Đăng ký thành công');
    }

    public function postCanhan(Request $request, $id)
    {
        $this->validate($request,[
            'ten' =>'required|min:3|max:100',
        ],
        [
            'ten.min'=>'Tên phải có độ dài từ 3 cho đến 100 ký tự',
            'ten.max'=>'Tên phải có độ dài từ 3 cho đến 100 ký tự',
        ]);

        $user = user::find($id);   
        $user->name = $request->ten;
        $user->gioitinh = $request->selector1;
        $user->sdt = $request->sdt;
        $user->date = $request->date;
        if($request->new == '') {

        } else {
            $user->password = bcrypt($request->new);
        }
        $user->save();

        return redirect()->back()->with('thongbao','Sửa thành công');
    }

    public function postLogin(Request $request) {
        $this->validate($request,[
            'email' =>'required|email',
            'password' =>'required|min:6|max:20',
        ],
        [
        	'email.required'=>'Bạn chưa nhập email',
        	'email.email'=>'Email không đúng định dạng',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu phải có độ dài 6 ký tự',
            'password.max'=>'Mật khẩu không quá 20 ký tự',
        ]);
        $email = $request['email'];
        $password = $request['password'];
        if(Auth::attempt(['email' => $email,'password' =>$password])) {
        	return redirect()->route('index');
        }
        else if ($request->email == 'admin@admin.com' && $request->password == 'admin123') {
            return redirect()->route('admin');
        }
        else {
        	return redirect()->back()->with(['flag'=>'danger','danger'=>'Đăng nhập không thành công']);
        }
    }
    public function postComment(Request $request,$id) {
        $idtruyen = $id;
        $truyen = truyen::find($idtruyen);  
        $comment = new binhluan;
        $comment->iduser = Auth::user()->id;
        $comment->idtruyen = $idtruyen;
        $comment->noidung = $request->comment;
        $comment->sl = 0;
        $comment->save();

        return redirect()->back()->with('thongbao','Bình luận thành công');
    }
    public function postLogout() {
    	Auth::logout();
    	return redirect()->route('index');
    }
    public function getSearch(Request $request) {
        $truyen = truyen::where('tentruyen','like','%'.$request->search.'%')-get();
        return redirect()->route('search_ten');
    }

    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('facebook')->user();
 
        $authUser = $this->findOrCreateUser($user);
        
        // Chỗ này để check xem nó có chạy hay không
        // dd($user);
 
        Auth::login($authUser, true);
 
        return redirect()->route('home');
    }

    private function findOrCreateUser($facebookUser){
        $authUser = SocialAccount::where('provider_id', $facebookUser->id)->first();
 
        if($authUser){
            return $authUser;
        }
 
        return SocialAccount::create([
            'name' => $facebookUser->name,
            'password' => $facebookUser->token,
            'email' => $facebookUser->email,
            'provider_id' => $facebookUser->id,
            'provider' => $facebookUser->id,
        ]);
    }

    
}
