<?php

namespace App\Http\Controllers\Admin;

use App\Models\Organisation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestsController extends Controller
{
    public function addTest(){

    	$organisations = Organisation::select('id', 'organisation_name')->where('status', 1)->get();

    	return view('admin.tests_details.add-test', compact('organisations'));
    }

    public function testList(){
    	$categories = [];
    	return view('admin.tests_details.test_list', compact('categories'));
    }

    
}
