<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/test', function () {
    return view('admin.menu_categories.add_menu_category');
});



/*Route::get('/', function () {
    return (!Auth::check() ? redirect('/login') : redirect('dashboard'));
});*/



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	
    return (!Auth::check() ? redirect('/login') : redirect('dashboard'));
});
Route::namespace('Admin')->group(function () {

	// Category Add, Update, delete and change status
    Route::get('add-category/{id?}','CategoryController@addCategory')->name('add-category');
    Route::get('category-list','CategoryController@categoryList')->name('category-list');
    Route::post('save-category','CategoryController@saveCategory')->name('save-category');
    Route::delete('delete-category/{id}','CategoryController@deleteCategory')->name('delete-category');
    Route::post('change-category-status','CategoryController@changeCategoryStatus')->name('change-category-status');


    // Child Category Add, Update, delete and change status
    Route::get('add-child-category/{id?}','ChildCategoryController@addChildCategory')->name('add-child-category');
    Route::get('child-category-list','ChildCategoryController@childCategoryList')->name('child-category-list');



    // Sub Category Add, Update, delete and change status
    Route::get('add-sub-category/{id?}','SubCategoryController@addSubCategory')->name('add-sub-category');
    Route::get('sub-category-list','SubCategoryController@subCategoryList')->name('sub-category-list');


    // Lab Details Add, Update, delete and change status
    Route::get('add-lab', 'LabDetailsController@addLabDetails')->name('add-lab');
    Route::get('lab-list', 'LabDetailsController@LabList')->name('lab-list');


    // Test Details Add, Update, delete and change status
    Route::get('add-test', 'TestsController@addTest')->name('add-test');
    Route::get('test-list', 'TestsController@testList')->name('test-list');












    Route::get('dashboard','DashboardController@getDashboard')->name('dashboard');

    Route::get('book-test-list', function() {
        $categories = [];
        $page_title = 'Booking Test';
        // dd($categories);
        return view('admin.booking.book_test_list', compact('categories', 'page_title'));
    })->name('book-test-list');

    Route::get('book-test-accepted-list', function() {
        $categories = [];
        $page_title = 'Booking Test Accepted';
        return view('admin.booking.book_test_list', compact('categories', 'page_title'));
    })->name('book-test-accepted-list');

    Route::get('book-test-rejected-list', function() {
        $categories = [];
        $page_title = 'Booking Test Rejected';
        return view('admin.booking.book_test_list', compact('categories', 'page_title'));
    })->name('book-test-rejected-list');

});



/*Route::get('/home', 'HomeController@index')->name('home');*/
Route::get('/settings', 'HomeController@settings')->name('settings');

Route::post('save_settings','HomeController@saveSettings');

Route::group(['middleware'=>'auth','namespace'=>'Admin'],function(){



/*Frontent User*/

// Route::get('search','TestsController@searchResult')->name('search');


Route::get('/search', function () {
    $categories = [];
    return view('frontent.search_result', compact('categories'));
})->name('search');

Route::get('book-test', function () {
    return view('frontent.book_test');
})->name('book-test');

});

