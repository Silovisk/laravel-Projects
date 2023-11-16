<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $movies = Movie::paginate(6);
        $data = [
            'movies' => $movies,
            'styles' => [
                '/assets/css/dashboard/index.css',
            ],
        ];

        return view('admin.dashboard', $data);
    }
}
