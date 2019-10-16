<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController as BaseController;

class DashboardController extends BaseController
{
    public function getDashboard(Request $request){

        return view('admin.dashboard.'.$this->getUserType().'_dashboard');
    }
}
