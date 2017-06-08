<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Album;
use Image;

class AlbumsController extends Controller
{

    //首页
    public function index()
    {
        $albums = Album::all();
        return   view('home', compact('albums'));
    }
    
    //相册信息保存
    public function store(Request $request)
    {
        //数据验证
        $this->validate($request, [
            'name' => 'required|max:50',
        ]);

        //数据存储
     /*   $album = Album::create([
            'name' => $request->name,
            'intro' => $request->intro,
        ]);*/
        $album = new Album();
        $album->name=$request->name;
        $album->intro = $request->intro;
        $album->save();

        //返回
        session()->flash('success', 'create successful');
        return back();
    }

    
    //相册信息更新
    public function update(Request $request, $id)
    {
        //数据验证
        $this->validate($request, [
            'name' => 'required|max:50',
        ]);

        //更新数据
        $album = Album::findOrFail($id);
        $album->update([
            'name' => $request->name,
            'intro' => $request->intro,
        ]);
         //如果上传了封面图片，存储封面
        if($request->hasFile('cover')){
            //封面图片压缩存储并生成路径
            $cover_path = "images/album/covers/" . time() . ".jpg";
            Image::make($request->cover)->resize(355, 200)->save(public_path($cover_path));
            //更新封面图片
            $album->update([
                'cover' => "/" . $cover_path,
            ]);
        }

        //返回
        session()->flash('success', 'Edit successful');
        return back();
    }
    //相册详情页
    public function show($id)
    {
        //获取相册数据
        $album = Album::findOrFail($id);

        //获取照片数据
        $photos = $album->photos()->orderBy('created_at', 'desc')->paginate(10);

        //返回
        return view('albums.show', compact(['album','photos']));
    }

     
    /**
     * 删除相册
     * @param  $id 相册id
     * @return [type]
     */
    public function destroy($id)
    {
        //删除
        $album = Album::findOrFail($id);
        $album->delete();

        //返回
        session()->flash('success','Delete Successful');
        return redirect()->route('home');

    }
}
