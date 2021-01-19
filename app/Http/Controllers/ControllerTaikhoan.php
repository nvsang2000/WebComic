<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ControllerTaikhoan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $truyen = new truyen;
        $truyen->tentruyen = $request->input("");
        $truyen->hinh = $request->input("");
        $truyen->chitiet = $request->input("");
        $truyen->trangthai = $request->input("");
        $truyen->idtheloai = $request->input("");
        $truyen->iddanhmuc = $request->input("");

        $truyen->save();
        return response($truyen,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $truyen = truyen::find($id);
        return $truyen;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'ten' =>'required|min:3|max:100',
            'pass' =>'required|min:6|max:100',
        ],
        [
            'ten.min'=>'Tên phải có độ dài từ 3 cho đến 100 ký tự',
            'ten.max'=>'Tên phải có độ dài từ 3 cho đến 100 ký tự',
            'pass.min'=>'Mật khẩu phải có độ dài từ 6 cho đến 100 ký tự',
            'pass.max'=>'Mật khẩu phải có độ dài từ 6 cho đến 100 ký tự',
        ]);

        $taikhoan = user::find($id);   
        $taikhoan->name = $request->ten;
        $taikhoan->gioitinh = $request->selector1;
        $taikhoan->sdt = $request->sdt;
        $taikhoan->date = $request->date;
        $taikhoan->password = bcrypt($request->pass); 
        $taikhoan->save();

        return redirect('admin/user/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taikhoan = users::find($id);
        $taikhoan->delete();

        return redirect('admin/user/danhsach')->with('thongbao','Xóa thành công');
    }

    public function postThem(Request $request) {
        $this->validate($request,[
            'ten' =>'required|min:3|max:100',
            'pass' =>'required|min:6|max:100',
            'email' =>'required|unique:users,email|min:3|max:100',
        ],
        [
            'ten.required'=>'Bạn chưa nhập tên',
            'ten.min'=>'Tên phải có độ dài từ 3 cho đến 100 ký tự',
            'ten.max'=>'Tên phải có độ dài từ 3 cho đến 100 ký tự',
            'pass.required'=>'Bạn chưa nhập mật khẩu',
            'pass.min'=>'Mật khẩu phải có độ dài từ 6 cho đến 100 ký tự',
            'pass.max'=>'Mật khẩu phải có độ dài từ 6 cho đến 100 ký tự',
            'email.required'=>'Bạn chưa nhập email',
            'email.unique'=>'Email đã tồn tại',
            'date.required'=>'Bạn chưa nhập ngày sinh',
            'sdt.required'=>'Bạn chưa nhập số điện thoại',
        ]);
        $taikhoan = new user;
        $taikhoan->name = $request->ten;
        $taikhoan->gioitinh = $request->selector1;
        $taikhoan->sdt = $request->sdt;
        $taikhoan->date = $request->date;
        $taikhoan->email = $request->email;
        $taikhoan->password = brcrypt($request->pass);
        $taikhoan->sl = 0;
        $taikhoan->save();

        return redirect()->back()->with('thongbao','Thêm thành công');
    }

    public function getSua($id) {
        $taikhoan = user::find($id);
        return view('admin.user.sua',['taikhoan'=>$taikhoan]);
    }
}
