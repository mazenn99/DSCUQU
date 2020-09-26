<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function getLoginForm() {
        return view('admins.index');
    }

    protected function checkLogin(Request $request) {

        if(Auth::guard('admin')->attempt(['email' => $request->input('email') , 'password' => $request->input('password')])) {
            return redirect()->to(route('dashboard.index'));
        } else {
            return redirect()->back()->with(['error' => 'sorry wrong email or password']);
        }
    }
}
