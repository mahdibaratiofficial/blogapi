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

Route::fallback(function () {
    return response()->json([
        'message' => 'Page Not Found'
    ], 404);
});




/**
 * Documentation : How To Use Api
 */
Route::get('docs', 'HomeController@index')->name('documentation');






/**________________
 * Posts Routes    |
 * ________________|
 */

Route::get('posts', "PostsController@allPosts");
Route::get('post/{Posts}', 'PostsController@GetPost');
Route::get("post/{Posts}/author", "PostsController@PostInfo");
Route::get('post/{Posts}/categories', "PostsController@PostCategory");
Route::get('post/{Posts}/comments', "PostsController@PostsComments");
/**
 * POST , PUT , DELETE :
 */
Route::post('post/create', "PostsController@InsertPost");
Route::put('post/{Posts}/update', "PostsController@UpdatePost");
Route::delete('post/{Posts}/delete', 'PostsController@DeletePost');

/**_____________________
 * Ends Posts Routes    |
 * _____________________|
 */








/**________________
 * Comments Routes |
 * ________________|
 */

/**
 * all Comments:
 */
Route::get("comments", "CommentsController@AllComments");
/**
 * Watch a comment with id :
 */
Route::get('comment/{Comments}', "CommentsController@GetComment");
/**
 * who send comment?
 * use this route for Unsrestend
 * @Comments comments.id
 */
Route::get('commentuser/{Comments}', "CommentsController@CommentUser");


/**
 * POST , PUT , DELETE :
 */

Route::post('comment/create', "CommentsController@InsertComment");
Route::put('comment/{Comments}/update', "CommentsController@UpdateComment");
Route::delete('comment/{Comments}/delete', 'CommentsController@DeleteComment');


/**_____________________
 *  End Comments Routes |
 * _____________________|
 */









/**________________
 * Users Routes    |
 * ________________|
 */

Route::get('users', "UsersController@GetAllUser");
Route::get('@{User}', "UsersController@GetUser");
Route::get("@{User}/posts", "UsersController@GetUserPosts");
Route::get('@{User}/comments',"UsersController@UserComments");

/**
 * POST , PUT , DELETE :
 */
Route::post('user/create', "UsersController@InsertUser");
/**
 * You Must Pass username to User
 */
Route::put('@{User}/update', "UsersController@UpdateUser");
Route::delete('@{User}/delete', 'UsersController@DeleteUser'); 

/**________________
 * End Users Routes|
 * ________________|
 */







/**________________
 * Category Routes |
 * ________________|
 */

Route::get('categories', "CategoryController@AllCategory");
Route::get('category/{Category}', "CategoryController@GetCategory");
/**
 * Posts in a category:
 */
Route::get('postcategory/{Category}', "CategoryController@PostsOFEachCategories");

/**
 * POST , PUT , DELETE :
 */

Route::post('category/create', "CategoryController@InsertCategory"); 
Route::put('category/{Category}/update', "CategoryController@UpdateCategory"); 
Route::delete('category/{Category}/delete', 'CategoryController@DeleteCategory'); 


/**____________________
 * End Category Routes |
 * ____________________|
 */



 
/**____________________
 * Faker Routes        |
 * ____________________|____________________________________________
 * Warning : If You Have Important Records in Your DB dont use these|
 * _________________________________________________________________|
 */
Route::get('faker/post', "FakerController@PostFaker");
Route::get('faker/comment', "FakerController@CommentFaker");
Route::get('faker/user', "FakerController@UserFaker");
Route::get('faker/category', "FakerController@CategoryFaker");

// Use this if you want to record data for all tables : 

Route::get('faker/all', "FakerController@All");


/**____________________
 * End Faker Routes    |
 * ____________________|
 */


