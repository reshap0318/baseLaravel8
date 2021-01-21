<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public $CodeSuccess = 200;
    public $CodeFailed = 500;

    public function MessageSuccess($success, $pesan = "",$kode=null)
    {
        $kode = $kode ? $kode : $this->CodeSuccess;

        return response()->json([
            'success' => true,
            'message' => $pesan,
            'data'    => $success,
        ], $kode);
    }

    public function MessageError($error,  $pesan = "", $kode=null)
    {
        $kode = $kode ? $kode : $this->CodeFailed;
        return response()->json([
            'success' => false,
            'message' => $pesan,
            'errors'    => $error,
        ], $kode);
    }

    public function DefaultAvatar($bg="0D8ABC", $cl="fff")
    {
        $name = app('auth')->user()->name;
        return "https://ui-avatars.com/api/?background=$bg&color=$cl&name=".urlencode($name);
    }
}
