<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SorteadorController extends Controller
{
    public function index()
    {
        $data =
        [
            'scripts' => [
                asset('/assets/js/admin/sorteador/index.js'),
            ],
            'styles' => ['/assets/css/admin/sorteador/style.css'],
        ];

        return view('admin.sorteador.index', $data);
    }
}
