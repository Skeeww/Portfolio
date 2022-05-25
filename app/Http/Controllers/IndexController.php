<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        try {
            $nb_gitlab_repositories = count(json_decode(file_get_contents("https://gitlab.com/api/v4/projects?private_token=".env('GITLAB_TOKEN')."&owned=true")));
        } catch(Exception $e) {
            $nb_gitlab_repositories = 404;
        }
        return view('index', ['nb_repo' => $nb_gitlab_repositories]);
    }
}
