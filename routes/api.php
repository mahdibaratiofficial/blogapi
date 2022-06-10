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
Route::get('post/{IdOrSlugPost}', 'PostsController@GetPost');


/**
 * Comments Routes
 */
Route::get("comments", "CommentsController@AllComments");
Route::get('comment/{IdOrSlugComment}', "CommentsController@GetComment");

/**
 * Users Routes
 */
Route::get('users', "UsersController@GetAllUser");
Route::get('@{UserNameOrUserEmail}', "UsersController@GetUser");
Route::get("@{UserNameOrUserEmail}/posts", "UserController@GetUserPosts");
Route::get("postinfo", "UsersController@PostInfo");


/**
 * Categories Routes
 */
Route::get('categories',"CategoryController@AllCategory");
Route::get('{PostSlugOrPostId}/categories',"CategoryController@PostCategory");
Route::get('posts/{CategoryidOrCategoryName}',"CategoryController@CateGoriesOfEachPost");


/**
 * 
 * Faker Routes
 */
Route::get('faker/post',"PostsController@PostFaker");
Route::get('faker/comment',"CommentsController@CommentFaker");
Route::get('faker/user',"UsersController@UserFaker");
Route::get('faker/category',"CategoryController@CategoryFaker");

