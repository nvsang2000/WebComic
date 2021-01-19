<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\danhmuc;

class ControllerDanhmuc extends Controller
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
        $danhmuc = danhmuc::find($id);
        $this->validate($request,[
            'ten' =>'required|unique:danhmuc,ten|min:3|max:100',
        ],
        [
            'ten.unique'=>'Tên đã tồn tại',
            'ten.min'=>'Tên phải có độ dài từ 3 cho đến 100 ký tự',
            'ten.max'=>'Tên phải có độ dài từ 3 cho đến 100 ký tự',
        ]);   
        $danhmuc->ten = $request->ten; 
        $danhmuc->save();
        return redirect('admin/danhmuc/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $danhmuc = danhmuc::find($id);
        $danhmuc->delete();

        return redirect('admin/danhmuc/danhmuc')->with('thongbao','Xóa thành công');
    }

    public function postThem(Request $request) {
        $this->validate($request,[
            'ten' =>'required|unique:danhmuc,ten|min:3|max:100',
        ],
        [
            'ten.required'=>'Bạn chưa nhập tên',
            'ten.unique'=>'Tên đã tồn tại',
            'ten.min'=>'Tên phải có độ dài từ 6 cho đến 100 ký tự',
            'ten.max'=>'Tên phải có độ dài từ 6 cho đến 100 ký tự',
        ]);
        $danhmuc = new danhmuc;
        $danhmuc->ten = $request->ten;
        $danhmuc->sl = 0;
        $danhmuc->save();

        return redirect('admin/danhmuc/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id) {
        $danhmuc = danhmuc::find($id);
        return view('admin.danhmuc.sua',['danhmuc'=>$danhmuc]);
    }
}
