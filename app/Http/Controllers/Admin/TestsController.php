<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestsController extends Controller
{
    public function addTest(){
    	return view('admin.tests_details.add-test');
    }

    public function testList(){
    	$categories = [];
    	return view('admin.tests_details.test_list', compact('categories'));
    }

    
}
