<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    //編集可能にする記述
    protected $fillable = ['name', 'age', 'nationality'];

    //authorsからデータの詳細を取得し、加工
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->name . '(' . $this->name . '(' . $this->age . '才'.')'.$this->nationality;
        return $txt; 
    }

    //主テーブルであるauthorsと従テーブルであるbooksがhasOne(1対1の関係)であることを記述。
    //
    public function book()
    {
        return $this->hasOne('App\Models\Book');
    }

    //主テーブルであるauthorsと従テーブルであるbooksがhasmany(1対多の関係)であることを記述。
    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }
}
