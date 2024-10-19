<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model 
{
    protected $table = "articles";

    protected $allowedFields = ["title", "content"];

    protected $returnType = \App\Entities\Article::class;

    protected $validationRules = [
        "title" => "required|max_length[128]",
        "content" => "required"
    ];

    protected $calidationMessages = [
        "title" => [
            "required" => "please enter a title" ,
            "max_length" => "{param} maximum characters for the {field}"
        ]
    ];
}