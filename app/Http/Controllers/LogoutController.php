<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    use Auth;
    public function logout(){
        return Auth::logout();
    }
}