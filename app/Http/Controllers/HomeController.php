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
                'Watch Posts' => 'http://YourHostName/api/posts',
                'Watch special Post' => 'http://YourHostName/api/post/{slug_or_id}',
                'Watch Comments' => 'http://YourHostName/api/comments',
                'watch special Comment' => 'http://YourHostName/api/comment/{id_or_author_name_or_author_email}',
                'Watch Users' => 'http://YourHostName/api/users',
                'Watch Special User' => 'http://YourHostName/api/@{username_or_email}',
                "Watch each user's posts" => "http://YourHostName/api/@{username_or_email}/posts",
                'Who posted this?' => "http://YourHostName/api/postinfo",
                'Categories' => 'http://YourHostName/api/categories',
                'Post Categories' => 'http://YourHostName/api/{PostSlug_or_Postid}/categories',
                'Posts of each Category' => "http://YourHostName/api/posts/{Categoryid_or_CategoryName}"
            ],
            "Requirment Parameter For Request" => [
                'Post' => [
                    'title',
                    'body'
                ],
                'Comment' => [
                    'email',
                    'name',
                    'post_id',
                    'body'
                ],
                'User' => [
                    'name',
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
                        "Routes" => "",
                        "Require Method" => "PUT"
                    ],
                    "Delete" => [
                        "Routes" => "",
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
                        "Routes" => "",
                        "Require Method" => "PUT"
                    ],
                    "Delete" => [
                        "Routes" => "",
                        "Require Method" => "DELETE"
                    ]
                ],
                /**
                 * User Create Update Delete and Require Method and Route
                 */
                "Users" => [
                    "Create" => [
                        "Route" => "http://YourHostName/api/post/create",
                        "Require Method" => "POST"
                    ],
                    "Update" => [
                        "Routes" => "",
                        "Require Method" => "PUT"
                    ],
                    "Delete" => [
                        "Routes" => "",
                        "Require Method" => "DELETE"
                    ]
                ],
                /**
                 * Category Create Update Delete and Require Method and Route
                 */
                "Category" => [
                    "Create" => [
                        "Route" => "http://YourHostName/api/post/create",
                        "Require Method" => "POST"
                    ],
                    "Update" => [
                        "Routes" => "",
                        "Require Method" => "PUT"
                    ],
                    "Delete" => [
                        "Routes" => "",
                        "Require Method" => "DELETE"
                    ]
                ]
            ]
        ];
        return response()->json(['documentation' => [$routes]], 200);
    }
}
