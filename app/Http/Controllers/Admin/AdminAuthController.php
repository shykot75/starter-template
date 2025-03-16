<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\View\Factory;

class AdminAuthController extends Controller
{
    public function loginForm(): View|Factory|Application
    {
        try{
            return view('admin.auth.login');
        }catch (\Throwable $exception){
            dd($exception->getMessage());
        }
    }
}
