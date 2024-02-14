<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{
    public function index()
    {
        $data = [
            'scripts' => ['/assets/js/admin/index.js'],
        ];

        return view('admin.index', $data);
    }
}
