<?php

namespace App\Model\Shop;

use Illuminate\Database\Eloquent\Model;
use DB;
class Sanpham extends Model
{
    protected $table="sanpham";
    protected $primaryKey="id_sp";
    public $timestamps=false;
    public function get_giamgia($soluong){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date=time();
        return $this->where(function($query) use ($date){
            $query->where('active',1)
            ->where('giamgia','>',0)
            ->where('date_start','<=',$date)
            ->where('date_finish','>=',$date);
        })
        ->orWhere(function($query) use ($date){
            $query->where('active',1)
            ->where('giamgia','>',0)
            ->where('date_start',null)
            ->where('date_finish',null);
        })
        ->orderBy('giamgia','DESC')
        ->take($soluong)
        ->inRandomOrder()
        ->get()
        ->toArray();
    }
    public function get_muanhieu($soluong){
    	date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date=time();
        return $this->where(function($query) use ($date){
            $query->where('active',1)
            ->where('date_start','<=',$date)
            ->where('date_finish','>=',$date);
        })
        ->orWhere(function($query) use ($date){
            $query->where('active',1)
            ->where('date_start',null)
            ->where('date_finish',null);
        })
        ->orderBy('daban','DESC')
        ->take($soluong)
        ->get()
        ->toArray();
    }
    public function getList($arItem,$soluong){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date=time();
        return DB::table('sanpham as sp')
        ->join('cat as c','sp.id_cat','=','c.id_cat')
        ->where(function($query) use ($arItem,$date){
            $query->where('active',1)
            ->whereIn('sp.id_cat',$arItem)
            ->where('sp.date_start','<=',$date)
            ->where('sp.date_finish','>=',$date);
        })
        ->orWhere(function($query) use ($arItem,$date){
            $query->where('active',1)
            ->whereIn('sp.id_cat',$arItem)
            ->where('sp.date_start',null)
            ->where('sp.date_finish',null);
        })
        ->orderBy('id_sp','DESC')
        ->take($soluong)
        ->get()
        ->toArray();
    }
    public function getList_cat($arItem,$sapxep){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date=time();
        if($sapxep=='spm-spc'){
            return DB::table('sanpham as sp')
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where(function($query) use ($arItem,$date){
                $query->where('sp.active',1)
                ->whereIn('sp.id_cat',$arItem)
                ->where('sp.date_start','<=',$date)
                ->where('sp.date_finish','>=',$date);
            })
            ->orWhere(function($query) use ($arItem,$date){
                $query->where('sp.active',1)
                ->whereIn('sp.id_cat',$arItem)
                ->where('sp.date_start',null)
                ->where('sp.date_finish',null);
            })
            ->orderBy('sp.id_sp','DESC')
            ->paginate(20);
        }elseif($sapxep=='spc-spm'){
            return DB::table('sanpham as sp')
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where(function($query) use ($arItem,$date){
                $query->where('sp.active',1)
                ->whereIn('sp.id_cat',$arItem)
                ->where('sp.date_start','<=',$date)
                ->where('sp.date_finish','>=',$date);
            })
            ->orWhere(function($query) use ($arItem,$date){
                $query->where('sp.active',1)
                ->whereIn('sp.id_cat',$arItem)
                ->where('sp.date_start',null)
                ->where('sp.date_finish',null);
            })
            ->orderBy('sp.id_sp','ASC')
            ->paginate(20);
        }elseif($sapxep=='gc-gt'){
            return DB::table('sanpham as sp')
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where(function($query) use ($arItem,$date){
                $query->where('sp.active',1)
                ->whereIn('sp.id_cat',$arItem)
                ->where('sp.date_start','<=',$date)
                ->where('sp.date_finish','>=',$date);
            })
            ->orWhere(function($query) use ($arItem,$date){
                $query->where('sp.active',1)
                ->whereIn('sp.id_cat',$arItem)
                ->where('sp.date_start',null)
                ->where('sp.date_finish',null);
            })
            ->select("sp.*",DB::raw('gia*(100-giamgia)/100 as giaban'))
            ->orderBy('giaban','DESC')
            ->paginate(20);
        }elseif($sapxep=='gt-gc'){
            return DB::table('sanpham as sp')
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where(function($query) use ($arItem,$date){
                $query->where('sp.active',1)
                ->whereIn('sp.id_cat',$arItem)
                ->where('sp.date_start','<=',$date)
                ->where('sp.date_finish','>=',$date);
            })
            ->orWhere(function($query) use ($arItem,$date){
                $query->where('sp.active',1)
                ->whereIn('sp.id_cat',$arItem)
                ->where('sp.date_start',null)
                ->where('sp.date_finish',null);
            })
            ->select("sp.*",DB::raw('gia*(100-giamgia)/100 as giaban'))
            ->orderBy('giaban','ASC')
            ->paginate(20);
        }elseif($sapxep=='ggc-ggt'){
            return DB::table('sanpham as sp')
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where(function($query) use ($arItem,$date){
                $query->where('sp.active',1)
                ->whereIn('sp.id_cat',$arItem)
                ->where('sp.date_start','<=',$date)
                ->where('sp.date_finish','>=',$date);
            })
            ->orWhere(function($query) use ($arItem,$date){
                $query->where('sp.active',1)
                ->whereIn('sp.id_cat',$arItem)
                ->where('sp.date_start',null)
                ->where('sp.date_finish',null);
            })
            ->orderBy('sp.giamgia','DESC')
            ->paginate(20);
        }else{
            return DB::table('sanpham as sp')
            ->join('cat as c','sp.id_cat','=','c.id_cat')
            ->where(function($query) use ($arItem,$date){
                $query->where('sp.active',1)
                ->whereIn('sp.id_cat',$arItem)
                ->where('sp.date_start','<=',$date)
                ->where('sp.date_finish','>=',$date);
            })
            ->orWhere(function($query) use ($arItem,$date){
                $query->where('sp.active',1)
                ->whereIn('sp.id_cat',$arItem)
                ->where('sp.date_start',null)
                ->where('sp.date_finish',null);
            })
            ->orderBy('sp.giamgia','ASC')
            ->paginate(20);
        }
        
    }
    public function getItem($id){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date=time();
        return $this->where(function($query) use ($id,$date){
            $query->where('active',1)
            ->where('id_sp',$id)
            ->where('date_start','<=',$date)
            ->where('date_finish','>=',$date);
        })
        ->orWhere(function($query) use ($id,$date){
            $query->where('active',1)
            ->where('id_sp',$id)
            ->where('date_start',null)
            ->where('date_finish',null);
        })
        ->first();
    }
    public function getDexuat($id){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date=time();
        $id_cat=($this->findOrFail($id))->id_cat;
        return $this->where(function($query) use ($date,$id,$id_cat){
            $query->where('active',1)
            ->where('id_cat',$id_cat)
            ->where('id_sp','!=',$id)
            ->where('date_start','<=',$date)
            ->where('date_finish','>=',$date);
        })
        ->orWhere(function($query) use ($date,$id,$id_cat){
            $query->where('active',1)
            ->where('id_cat',$id_cat)
            ->where('id_sp','!=',$id)
            ->where('date_start',null)
            ->where('date_finish',null);
        })
        ->inRandomOrder()
        ->take(20)
        ->get();
    }
    public function timkiem($id,$key,$sapxep){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date=time();
        if($id == 0){
            //tìm kiếm tất cả
            if($sapxep=='spm-spc'){
                return $this->where(function($query) use ($date,$key){
                    $query->where('active',1)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start','<=',$date)
                    ->where('date_finish','>=',$date);
                })
                ->orWhere(function($query) use ($date,$key){
                    $query->where('active',1)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start',null)
                    ->where('date_finish',null);
                })
                ->orderBy('id_sp','DESC')
                ->paginate(20);
            }elseif($sapxep=='spc-spm'){
                return $this->where(function($query) use ($date,$key){
                    $query->where('active',1)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start','<=',$date)
                    ->where('date_finish','>=',$date);
                })
                ->orWhere(function($query) use ($date,$key){
                    $query->where('active',1)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start',null)
                    ->where('date_finish',null);
                })
                ->orderBy('id_sp','ASC')
                ->paginate(20);
            }elseif($sapxep=='gc-gt'){
                return $this->where(function($query) use ($date,$key){
                    $query->where('active',1)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start','<=',$date)
                    ->where('date_finish','>=',$date);
                })
                ->orWhere(function($query) use ($date,$key){
                    $query->where('active',1)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start',null)
                    ->where('date_finish',null);
                })
                ->select("*",DB::raw('gia*(100-giamgia)/100 as giaban'))
                ->orderBy('giaban','DESC')
                ->paginate(20);
            }elseif($sapxep=='gt-gc'){
                return $this->where(function($query) use ($date,$key){
                    $query->where('active',1)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start','<=',$date)
                    ->where('date_finish','>=',$date);
                })
                ->orWhere(function($query) use ($date,$key){
                    $query->where('active',1)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start',null)
                    ->where('date_finish',null);
                })
                ->select("*",DB::raw('gia*(100-giamgia)/100 as giaban'))
                ->orderBy('giaban','ASC')
                ->paginate(20);
            }elseif($sapxep=='ggc-ggt'){
                return $this->where(function($query) use ($date,$key){
                    $query->where('active',1)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start','<=',$date)
                    ->where('date_finish','>=',$date);
                })
                ->orWhere(function($query) use ($date,$key){
                    $query->where('active',1)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start',null)
                    ->where('date_finish',null);
                })
                ->orderBy('giamgia','DESC')
                ->paginate(20);
            }else{
                return $this->where(function($query) use ($date,$key){
                    $query->where('active',1)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start','<=',$date)
                    ->where('date_finish','>=',$date);
                })
                ->orWhere(function($query) use ($date,$key){
                    $query->where('active',1)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start',null)
                    ->where('date_finish',null);
                })
                ->orderBy('giamgia','ASC')
                ->paginate(20);
            }
        }else{
            //tim kiem theo danh muc
            if($sapxep=='spm-spc'){
                return $this->where(function($query) use ($date,$key,$id){
                    $query->where('active',1)
                    ->whereIn('id_cat',$id)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start','<=',$date)
                    ->where('date_finish','>=',$date);
                })
                ->orWhere(function($query) use ($date,$key,$id){
                    $query->where('active',1)
                    ->whereIn('id_cat',$id)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start',null)
                    ->where('date_finish',null);
                })
                ->orderBy('id_sp','DESC')
                ->paginate(20);
            }elseif($sapxep=='spc-spm'){
                return $this->where(function($query) use ($date,$key,$id){
                    $query->where('active',1)
                    ->whereIn('id_cat',$id)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start','<=',$date)
                    ->where('date_finish','>=',$date);
                })
                ->orWhere(function($query) use ($date,$key,$id){
                    $query->where('active',1)
                    ->whereIn('id_cat',$id)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start',null)
                    ->where('date_finish',null);
                })
                ->orderBy('id_sp','ASC')
                ->paginate(20);
            }elseif($sapxep=='gc-gt'){
                return $this->where(function($query) use ($date,$key,$id){
                    $query->where('active',1)
                    ->whereIn('id_cat',$id)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start','<=',$date)
                    ->where('date_finish','>=',$date);
                })
                ->orWhere(function($query) use ($date,$key,$id){
                    $query->where('active',1)
                    ->whereIn('id_cat',$id)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start',null)
                    ->where('date_finish',null);
                })
                ->select("*",DB::raw('gia*(100-giamgia)/100 as giaban'))
                ->orderBy('giaban','DESC')
                ->paginate(20);
            }elseif($sapxep=='gt-gc'){
                return $this->where(function($query) use ($date,$key,$id){
                    $query->where('active',1)
                    ->whereIn('id_cat',$id)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start','<=',$date)
                    ->where('date_finish','>=',$date);
                })
                ->orWhere(function($query) use ($date,$key,$id){
                    $query->where('active',1)
                    ->whereIn('id_cat',$id)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start',null)
                    ->where('date_finish',null);
                })
                ->select("*",DB::raw('gia*(100-giamgia)/100 as giaban'))
                ->orderBy('giaban','ASC')
                ->paginate(20);
            }elseif($sapxep=='ggc-ggt'){
                return $this->where(function($query) use ($date,$key,$id){
                    $query->where('active',1)
                    ->whereIn('id_cat',$id)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start','<=',$date)
                    ->where('date_finish','>=',$date);
                })
                ->orWhere(function($query) use ($date,$key,$id){
                    $query->where('active',1)
                    ->whereIn('id_cat',$id)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start',null)
                    ->where('date_finish',null);
                })
                ->orderBy('giamgia','DESC')
                ->paginate(20);
            }else{
                return $this->where(function($query) use ($date,$key,$id){
                    $query->where('active',1)
                    ->whereIn('id_cat',$id)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start','<=',$date)
                    ->where('date_finish','>=',$date);
                })
                ->orWhere(function($query) use ($date,$key,$id){
                    $query->where('active',1)
                    ->whereIn('id_cat',$id)
                    ->where(function($q) use($key){
                        $q->where('ma_sp','like','%'.$key.'%')
                        ->orWhere('namesp','like','%'.$key.'%');
                    })
                    ->where('date_start',null)
                    ->where('date_finish',null);
                })
                ->orderBy('giamgia','ASC')
                ->paginate(20);
            }
        }
    }
    public function muanhieu_all(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date=time();
        return $this->where(function($query) use ($date){
            $query->where('active',1)
            ->where('date_start','<=',$date)
            ->where('date_finish','>=',$date);
        })
        ->orWhere(function($query) use ($date){
            $query->where('active',1)
            ->where('date_start',null)
            ->where('date_finish',null);
        })
        ->orderBy('daban','DESC')
        ->paginate(20);
    }
    public function giamgia_all(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date=time();
        return $this->where(function($query) use ($date){
            $query->where('active',1)
            ->where('date_start','<=',$date)
            ->where('date_finish','>=',$date);
        })
        ->orWhere(function($query) use ($date){
            $query->where('active',1)
            ->where('date_start',null)
            ->where('date_finish',null);
        })
        ->orderBy('giamgia','DESC')
        ->paginate(20);
    }
}
