<?php

namespace App\Http\Controllers;

use App\Models\Tariff;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        $tariffs = Tariff::all();

        return view('index', ['tariffs' => $tariffs]);
    }
}
