<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/**
 * Documentation : How To Use Api
 */
Route::get('docs', 'HomeController@index')->name('documentation');

/**
 * Posts Routes
 */
Route::get('posts', "PostsController@allPosts");
Route::get('post/{Posts}', 'PostsController@GetPost');
Route::get("post/{Posts}/info", "PostsController@PostInfo");
Route::get('{Posts}/categories',"PostsController@PostCategory");

/**
 * Comments Routes
 */
Route::get("comments", "CommentsController@AllComments");
Route::get('comment/{Comments}', "CommentsController@GetComment");

/**
 * Users Routes
 */
Route::get('users', "UsersController@GetAllUser");
Route::get('@{User}', "UsersController@GetUser");
Route::get("@{User}/posts", "UsersController@GetUserPosts");


/**
 * Categories Routes
 */
Route::get('categories',"CategoryController@AllCategory");
Route::get('category/{Category}',"CategoryController@GetCategory");
Route::get('postsofcategories/{Category}',"CategoryController@PostsOFEachCategories");
/**
 * 
 * Faker Routes
 * Warning : If You Have Important Records in Your DB dont use these
 */
Route::get('faker/post',"PostsController@PostFaker");
Route::get('faker/comment',"CommentsController@CommentFaker");
Route::get('faker/user',"UsersController@UserFaker");
Route::get('faker/category',"CategoryController@CategoryFaker");

