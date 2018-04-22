<?php
/**
 * Created by PhpStorm.
 * User: Abdel Aziz Hassan
 * Date: 4/23/18
 * Time: 12:24 AM
 */

namespace Laraflat\Users\Http\Controllers\Front\Auth;


class HomeController
{

    public function index(){
        return view('laraflat::auth.home');
    }

}