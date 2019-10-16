<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LabDetailsController extends Controller
{
    public function addLabDetails() {
    	return view('admin.labs_details.add_lab_details');
    }

    public function LabList() {
    	$categories = [];
    	return view('admin.labs_details.lab_list', compact('categories'));
    }
}
