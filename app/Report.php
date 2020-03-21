<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Report extends Model
{
    //report นี้เป็นของ user คนไหน
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function searchReport(){
        $reports = DB::table('reports')->select('id','title', 'created_at')
                    ->where('type', '=', 'รายงาน')
                    ->where('status','=','รอการยืนยัน')
                    ->get();
        return $reports;
    }

    public function searchRepair(){
        $repairs = DB::table('reports')->select('id','title', 'created_at')
                    ->where('type', '=', 'แจ้งซ่อม')
                    ->where('status','=','รอการยืนยัน')
                    ->get();
        return $repairs;
    }


}
