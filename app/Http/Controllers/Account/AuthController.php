<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $response = $this->post(env('ACCOUNT').'login',$request->all());
        return $response;
    }

    public function registerPengunjung(Request $request)
    {
        $response = $this->post(env('ACCOUNT').'pengunjung/register',$request->all());
        return $response;
    }


}
