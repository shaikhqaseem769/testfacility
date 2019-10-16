<?php

namespace App\Http\Controllers\Admin;

use App\Models\ChildCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChildCategoryController extends Controller
{
    public function childCategoryList(){
    	$categories = ChildCategory::paginate();
    	return view('admin.child_categories.child_category_list', compact('categories'));
    }


    public function addChildCategory($id = null){
        $category = new ChildCategory();
        if($id){
            $category = ChildCategory::find($id);
        }
    	return view('admin.child_categories.add_child_category', compact('category'));
    }
}
