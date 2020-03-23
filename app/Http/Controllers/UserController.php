<?php

namespace App\Http\Controllers;

use App\Room;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addRoommateView($id,$result=null){
        $room = Room::findOrFail($id);
        return view('rooms.addRoommate',['room' => $room,'result'=>$result]);
    }

    public function sendInvite($id,Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email', $email)->first();
        if ($user === null) {
            $message = "ไม่พบ user ดังกล่าว หากมีข้อสงสัยติดต่อนิติบุคคล";
        }elseif($user->role === 'admin' | $user->role === 'staff'){
            $message = "ไม่สามารถส่งคำชวนได้";
        }elseif($user->room_id != null){
            $message = "user มีห้องอยู่แล้ว หากมีข้อสงสัยติดต่อนิติบุคคล";
        }elseif ($user->invited != null){
            $message = "user มีคำชวนอยู่แล้วโปรดติดต่อ user ดังกล่าวด้วยตนเอง";
        }else{
            $message = "ส่งคำเชิญสำเร็จ โปรดรอ user ตอบรับ";
            $user->invited = $id;
            $user->save();
        }
        return $this->addRoommateView($id,$message);
    }
}
