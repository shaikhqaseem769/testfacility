<?php

namespace App\Http\Controllers\Admin;

use App\Models\Organisation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LabDetailsController extends Controller
{
    public function addLabDetails() {
    	$organisations = Organisation::select('id', 'organisation_name')->where('status', 1)->get();
    	return view('admin.labs_details.add_lab_details', compact('organisations'));
    }

    public function LabList() {
    	
    	$categories = [];
    	return view('admin.labs_details.lab_list', compact('categories'));
    }
}
