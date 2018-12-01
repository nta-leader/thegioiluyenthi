<?php

namespace App\Model\Shop;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table="slide";
    protected $primarKey="id_slide";
    public $timestamps=false;

    public function chinh(){
        return $this->where("id_type",1)->where("active",1)->orderBy('id_slide','DESC')->get();
    }
    public function left(){
        return $this->where("id_type",2)->where("active",1)->inRandomOrder()->take(1)->get();
    }
    public function bottom(){
        return $this->where("id_type",3)->where("active",1)->inRandomOrder()->take(2)->get();
    }
    public function tieubieu(){
        return $this->where("id_type",4)->where("active",1)->inRandomOrder()->take(2)->get();
    }
}
