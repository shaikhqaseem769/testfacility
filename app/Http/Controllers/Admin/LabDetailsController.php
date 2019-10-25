<?php

namespace App\Http\Controllers\Admin;

use App\Models\Organisation;
use App\Models\LabTemporary;
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


    public function addLabDetailsValidation(Request $request) {
    	$this->validate($request, [
    		'establishment' => 'required',
    		'email_id_no' => 'required|email|min:3|max:100',
    		'address' => 'required|string|min:3|max:150',
    		'details_of_no' => 'required',
    		'email_id_no' => 'required',
    		'phone_number_1' => 'required',
    		'phone_number_2' => 'required',
    		'fax_number' => 'required',
    	]);
    }
}
