<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $nb_gitlab_repositories = count(json_decode(file_get_contents("https://gitlab.com/api/v4/projects?private_token=".env('GITLAB_TOKEN')."&owned=true")));
        return view('index', ['nb_repo' => $nb_gitlab_repositories]);
    }
}
