<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;

class ControllerTheloai extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $theloai = theloai::find($id);
        $this->validate($request,[
            'ten' =>'required|unique:theloai,tentheloai|min:3|max:100',
        ],
        [
            'ten.unique'=>'Tên đã tồn tại',
            'ten.min'=>'Tên phải có độ dài từ 3 cho đến 100 ký tự',
            'ten.max'=>'Tên phải có độ dài từ 3 cho đến 100 ký tự',
        ]);   
        $theloai->tentheloai = $request->ten; 
        $theloai->save();
        return redirect('admin/theloai/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theloai = theloai::find($id);
        $theloai->delete();

        return redirect('admin/theloai/theloai')->with('thongbao','Xóa thành công');
    }

    public function postThem(Request $request) {
        $this->validate($request,[
            'ten' =>'required|unique:theloai,tentheloai|min:6|max:100',
        ],
        [
            'ten.required'=>'Bạn chưa nhập tên',
            'ten.unique'=>'Tên đã tồn tại',
            'ten.min'=>'Tên phải có độ dài từ 6 cho đến 100 ký tự',
            'ten.max'=>'Tên phải có độ dài từ 6 cho đến 100 ký tự',
        ]);
        $theloai = new theloai;
        $theloai->tentheloai = $request->ten;
        $theloai->iddanhmuc = 0;
        $theloai->sl = 0;
        $theloai->save();

        return redirect('admin/theloai/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id) {
        $theloai = theloai::find($id);
        return view('admin.theloai.sua',['theloai'=>$theloai]);
    }
}
