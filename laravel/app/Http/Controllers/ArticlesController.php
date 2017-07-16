<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
// use App\Articles;
//use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticlesRequest;

class ArticlesController extends Controller
{
    public function show()
    {
        # code...
    }
    //
    public function index(){
        $articles = DB::table('articles')->orderBy('id','desc')->get();
        //$articles = Articles::all();
       // dd($articles);
          return view('articles.articles',compact('articles'));
    }
    //创建一篇文章
    public function create(){
        return view('articles.create');
    }
    //上传表单
    public function store(CreateArticlesRequest $request){
        //dd($request->all());
        //接收数据
        $input = $request->all();
       //$input['published_at']=Carbon::now();
        //存入数据库
        DB::table('articles')->insert([
            'title'=>$input['title'],
            'author'=>$input['author'],
            'content'=>$input['content'],
            ]);
        //    利用模型的方式
        // Articles::create($input);

        //重定向
        return redirect('articles');
    }
    //修改表单
    public function edit($id)
    {
        # code...
        //读取旧数据
        $old = DB::table('articles')->find($id);
        return view('articles.edit',compact("old"));
    }
    //更新
    public function update(Request $request,$id)
    {
        # code...
        //dd($request->all());
        $newArt = $request->all();
        $edit = DB::table('articles')->where('id',$id)->update([
            'title'=>$newArt['title'],
            'author'=>$newArt['author'],
            'content'=>$newArt['content'],
            ]);
        return redirect('articles');
    }

}
