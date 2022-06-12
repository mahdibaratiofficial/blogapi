<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $routes = [
            'Get_InforMation' =>
            [
                // post/{Posts}/info
                // post/create
                // post/{Posts}/update
                // post/{Posts}/delete
                "Table"=>"Posts:",
                'Watch Posts' => 'http://YourHostName/api/posts', 
                'Watch special Post' => 'http://YourHostName/api/post/{post_id}',
                'Who posted this?' => "http://YourHostName/api/post/{post_id}/author",
                'Posts of each Category' => "http://YourHostName/api/post/{post_id}/categories",//done
                'Post Comments' => "http://YourHostName/api/post/{post_id}/comments",//done
                "Table2"=>"Comments:",
                'Watch Comments' => 'http://YourHostName/api/comments',
                'watch special Comment' => 'http://YourHostName/api/comment/{comment_id}',
                'who send this comment?' => 'http://YourHostName/api/commentuser/{comment_id}',
                "Table3"=>"Users:",
                'Watch Users' => 'http://YourHostName/api/users',
                'Watch Special User' => 'http://YourHostName/api/@{username}',
                "Watch each user's posts" => "http://YourHostName/api/@{username}/posts",
                "User Comments" => "http://YourHostName/api/@{username}/comments",
                "Table4"=>"Category :",
                'Categories' => 'http://YourHostName/api/categories',
                'watch category with id' => 'http://YourHostName/api/category/{category_id}',
                'Post Categories' => 'http://YourHostName/api/postcategory/{category_id}',
            ],
            "Requirment Parameter For Request" => [
                'Post' => [
                    'title',
                    'body',
                    'user_id'
                ],
                'Comment' => [
                    'posts_id',
                    'user_id',
                    'body'
                ],
                'User' => [
                    'name',
                    'username',
                    'email',
                    'password'
                ],
                "Category" => [
                    'name'
                ]
            ],

            "Create , Update , Delete Routes" => [
                /**
                 * Posts Create Update Delete and Require Method and Route
                 */
                "Posts" => [
                    "Create" => [
                        "Route" => "http://YourHostName/api/post/create",
                        "Require Method" => "POST"
                    ],
                    "Update" => [
                        "Routes" => "http://YourHostName/api/post/{post_id}/update",
                        "Require Method" => "PUT"
                    ],
                    "Delete" => [
                        "Routes" => "http://YourHostName/api/post/{post_id}/delete",
                        "Require Method" => "DELETE"
                    ]
                ],
                /**
                 * Comment Create Update Delete and Require Method and Route
                 */
                "Cooments" => [
                    "Create" => [
                        "Route" => "http://YourHostName/api/comment/create",
                        "Require Method" => "POST"
                    ],
                    "Update" => [
                        "Routes" => "http://YourHostName/api/comment/{comment_is}/update",
                        "Require Method" => "PUT"
                    ],
                    "Delete" => [
                        "Routes" => "http://YourHostName/api/comment/{comment_id}/delete",
                        "Require Method" => "DELETE"
                    ]
                ],
                /**
                 * User Create Update Delete and Require Method and Route
                 */
                "Users" => [
                    "Create" => [
                        "Route" => "http://YourHostName/api/user/create",
                        "Require Method" => "POST"
                    ],
                    "Update" => [
                        "Routes" => "http://YourHostName/api/@{username}/update",
                        "Require Method" => "PUT"
                    ],
                    "Delete" => [
                        "Routes" => "http://YourHostName/api/@{username}/delete",
                        "Require Method" => "DELETE"
                    ]
                ],
                /**
                 * Category Create Update Delete and Require Method and Route
                 */
                "Category" => [
                    "Create" => [
                        "Route" => "http://YourHostName/api/category/create",
                        "Require Method" => "POST"
                    ],
                    "Update" => [
                        "Routes" => "http://YourHostName/api/category/{category_id}/update",
                        "Require Method" => "PUT"
                    ],
                    "Delete" => [
                        "Routes" => "http://YourHostName/api/category/{category_id}/delete",
                        "Require Method" => "DELETE"
                    ]
                ]
            ]
        ];
        return response()->json(['documentation' => [$routes]], 200);
    }
}
