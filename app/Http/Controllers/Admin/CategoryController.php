<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class CategoryController extends Controller
{
    public function categoryList(){
        // dd(Auth::user()->user_type);
    	$categories = Category::paginate();
    	return view('admin.categories.category_list', compact('categories'));
    }


    public function addCategory($id = null){
        $category = new Category();
        if($id){
            $category = Category::find($id);
        }
    	return view('admin.categories.add_category', compact('category'));
    }

    public function saveCategory(Request $request){

        $id = $request->category_id;

    	$this->validate($request,[
    		// 'category_name' => 'required|min:3|max:60|string|unique:categories,category_name,'.$id
            'category_name' => 'required|unique:categories,category_name,'.$id.',id,deleted_at,NULL',
    	]);

    	try{
            
            
            if($id){
                $category = Category::find($id);
                $message = 'Category has been updated successfully.';
            }else{
                $category = new Category();
                $message = 'Category has been added successfully.';
            }
	    	$category->category_name = $request->category_name;
	    	$category->description = $request->description;
	    	$category->position = isset($request->position) ? $request->position : 0;

            if($category->save()){
                return response()->json(['success'=>true,'message'=> $message],200);
            }

        }catch (\Exception $e){
            return response()->json(['success'=>false,'message'=>'Some error occurred while adding category.','error'=>$e->getMessage().$e->getLine()],200);

        }

        return response()->json(['success'=>false,'message'=>'Some error occurred while adding category.'],200);
    }


    public function deleteCategory($categoryId){
        
        if(Category::where('id',$categoryId)->delete()){

            return response()->json(['success'=>true,'message'=>'Category has been deleted successfully.'],200);
        }

        return response()->json(['success'=>false,'message'=>'Some error occurred while deleting category.'],200);

    }

    public function changeCategoryStatus(Request $request){

        $this->validate($request,[
            'active_record_id'=>'required',
            'status'=>'required'
        ]);

        $record = Category::where('id',$request->get('active_record_id'))->first();

        if($record){

            $data = [];
            $data['status'] = $request->get('status');
            $record->update($data);

            return response()->json(['success'=>true,'message'=>'Category status has been changed successfully.'],200);

        }else{

            return response()->json(['success'=>false,'message'=>'No Such Category Exists.'],200);
        }

    }
}
