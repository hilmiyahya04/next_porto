<?php

use Illuminate\Support\Facades\Route;
use App\Models\Projects;
use App\Models\Skills;
use App\Models\Experiences;


Route::get('/', function () {
    $projects = Projects::latest()->get();
    $skills = Skills::all();
    $experiences = Experiences::all();

    return view('home', compact('projects', 'skills', 'experiences'));
});
