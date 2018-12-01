<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table="slide";
    protected $primarKey="id_slide";
    public $timestamps=false;

    public function getItems($type){
        return $this->where("type",$type)->orderBy('id_slide','DESC')->paginate(10);
    }
    public function getItem($id_slide){
        return $this->where("id_slide",$id_slide)->first();
    }
    public function add($arItem){
        return $this->insert($arItem);
    }
    public function edit($id,$arItem){
        return $this->where("id_slide",$id)->update($arItem);
    }
}
