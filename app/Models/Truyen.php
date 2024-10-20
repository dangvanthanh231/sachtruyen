<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truyen extends Model
{
    use HasFactory;
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    public $timestamps = true;
    protected $fillable = [
        'tentruyen','tomtat','kichhoat','slug_truyen','hinhanh','danhmuc_id','created_at','updated_at'
    ];
    protected $table = 'truyen';

    public function danhmuctruyen(){
        return $this -> belongsTo('App\Models\DanhmucTruyen','danhmuc_id','id');
    }

    public function chapter(){
        return $this -> hasMany('App\Models\Chapter');
    }
}
