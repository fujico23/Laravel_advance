<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //book.indexにモデルBookのデータ全て反映してviewに映す処理
    public function index(){
        //リレーションを使用してBookモデルの全てのデータを取得している(N+1問題発生)
        //$items = Book::all();
        //authorリレーションの
        $items = Book::with('author')->get();
        return view('book.index', ['items'=>$items]);
    }

    //book.addをviewに映す処理
    public function add(){
        return view('book.add');
    }

    //フォームタグのリクエストボディをBookモデルに保存する
    public function create(Request $request){
        $this->validate($request, Book::$rules);
        $form = $request->all();
        Book::create($form);
        return redirect('/book');
    }
}
