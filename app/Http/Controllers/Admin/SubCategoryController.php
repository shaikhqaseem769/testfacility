<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    public function subCategoryList(){
    	$categories = SubCategory::paginate();
    	return view('admin.sub_categories.sub_category_list', compact('categories'));
    }


    public function addSubCategory($id = null){
        $category = new SubCategory();
        if($id){
            $category = SubCategory::find($id);
        }

    	return view('admin.sub_categories.add_sub_category', compact('category'));
    }
}
