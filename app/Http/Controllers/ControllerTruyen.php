<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\truyen;

class ControllerTruyen extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //show tất cả get
    {
        echo "hello";
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
    public function store(Request $request) //thêm dữ liệu post
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
    public function show($id) //show dữ liệu get
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
    public function update(Request $request, $id) //post input type=hidden name=_method value = put
    {
        $truyen = truyen::find($id);
        $this->validate($request,[
            'ten' =>'required|unique:theloai,tentheloai|min:3|max:100',
        ],
        [
            'ten.unique'=>'Tên đã tồn tại',
            'ten.min'=>'Tên phải có độ dài từ 3 cho đến 100 ký tự',
            'ten.max'=>'Tên phải có độ dài từ 3 cho đến 100 ký tự',
        ]);   
        $truyen->tentruyen = $request->ten;
        $truyen->chitiet = $request->chitiet;
        if($request->trangthai == 'Đã hoàn thành') {
            $truyen->trangthai = 1;
        } else if($request->trangthai == 'Chưa hoàn thành') {
            $truyen->trangthai = 0;
        } else if($request->trangthai == 'Đang hoàn thành') {
            $truyen->trangthai = 3;
        }

        if($request->hinhanh == '') {
           
        } else {
            $file_name = $request->file('hinhanh')->getClientOriginalName();
            $truyen->hinh = $file_name;
            $request->file('hinhanh')->move('resources/upload/',$file_name);
        }

        $truyen->save();
        return redirect('admin/truyen/sua/'.$id)->with('thongbao','Sửa thành công');      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //post input type=hidden name=_method value = delete
    {
        $truyen = truyen::find($id);
        $truyen->delete();

        return redirect('admin/truyen/truyen')->with('thongbao','Xóa thành công');
    }

    public function postThem(Request $request) {
        $this->validate($request,[
            'ten' =>'required|unique:truyen,tentruyen|min:6|max:100',
            'chitiet' =>'required|min:9|max:1000',
        ],
        [
            'ten.required'=>'Bạn chưa nhập tên truyện',
            'ten.unique'=>'Tên truyện đã tồn tại',
            'ten.min'=>'Tên truyện phải có độ dài từ 6 cho đến 100 ký tự',
            'ten.max'=>'Tên truyện phải có độ dài từ 6 cho đến 100 ký tự',
            'chitiet.required'=>'Bạn chưa nhập chi tiết',
            'chitiet.min'=>'Chi tiết phải có độ dài từ 9 cho đến 1000 ký tự',
            'chitiet.max'=>'Chi tiết phải có độ dài từ 9 cho đến 1000 ký tự',
            'trangthai.required'=>'Bạn chưa chọn trạng thái',
            'theloai.required'=>'Bạn chưa chọn thể loại',
            'danhmuc.required'=>'Bạn chưa chọn danh mục',
        ]);
        $truyen = new truyen;
        $truyen->tentruyen = $request->ten;
        $truyen->chitiet = $request->chitiet;
        if($request->trangthai == 'Đã hoàn thành') {
            $truyen->trangthai = 1;
        } else if($request->trangthai == 'Chưa hoàn thành') {
            $truyen->trangthai = 0;
        } else if($request->trangthai == 'Đang hoàn thành') {
            $truyen->trangthai = 3;
        }

        $truyen->idchitiet = 0;

        if($request->theloai == 'Kiếm hiệp') {
            $truyen->idtheloai = 1;
        } else if($request->theloai == 'Ngôn tình') {
            $truyen->idtheloai = 2;
        } else if($request->theloai == 'Xuyên không') {
            $truyen->idtheloai = 3;
        } else if($request->theloai == 'Trinh thám') {
            $truyen->idtheloai = 4;
        } else if($request->theloai == 'Thám hiểm') {
            $truyen->idtheloai = 5;
        } else if($request->theloai == 'Hài hước') {
            $truyen->idtheloai = 6;
        } else if($request->theloai == 'Cổ đại') {
            $truyen->idtheloai = 7;
        } else if($request->theloai == 'Quân sự') {
            $truyen->idtheloai = 8;
        } else if($request->theloai == 'Trùng sinh') {
            $truyen->idtheloai = 9;
        } else if($request->theloai == 'Dị năng') {
            $truyen->idtheloai = 10;
        } else if($request->theloai == 'Giả tưởng') {
            $truyen->idtheloai = 15;
        } else if($request->theloai == 'Hành động') {
            $truyen->idtheloai = 16;
        } 
        
        if($request->danhmuc == 'Truyện Hot') {
            $truyen->iddanhmuc = 1;
        } else if($request->danhmuc == 'Truyện Mới') {
            $truyen->iddanhmuc = 2;
        } else if($request->danhmuc == 'Truyện Full') {
            $truyen->iddanhmuc = 3;
        } else if($request->danhmuc == 'Truyện Teen') {
            $truyen->iddanhmuc = 4;
        } else if($request->danhmuc == 'Truyện Hay') {
            $truyen->iddanhmuc = 7;
        }

        if($request->hinhanh == '') {
           $this->validate($request,[
            'hinhanh' =>'required|min:1|max:200',
        ],
        [
            'hinhanh.required'=>'Bạn chưa chọn ảnh',
        ]);
        } else {
            $file_name = $request->file('hinhanh')->getClientOriginalName();
            $truyen->hinh = $file_name;
            $request->file('hinhanh')->move('resources/upload/',$file_name);
        }

        $truyen->sl = 0;
        $truyen->view = 0;
        $truyen->save();

        return redirect('admin/truyen/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id) {
        $truyen = truyen::find($id);
        return view('admin.truyen.sua',['truyen'=>$truyen]);
    }
}
