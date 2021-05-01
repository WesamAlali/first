<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use stdClass;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ShowAdminName()
    {
        return "wesam alali";
    }


    public function getIndex(){

        $data = [];
        $data['id'] = 5;
        $data['name'] = 'wesam';

        $obj = new \stdClass();
        $obj -> name = 'ali';
        $obj -> id   = 5;
        $obj -> gender = 'male';

        return view('Front/welcome2',compact('obj'),$data);
    }


    public function getId($id,$name){
        return view("category", [
            'the_id' => $id ?? "This Id is Not Found",
            'the_name' => $name ?? "This name is Not Found"
        ]);
    }
}
