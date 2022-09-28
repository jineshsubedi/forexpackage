<?php

namespace Jinesh\Forex;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ForexController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Welcome to forex page!';
        return view('forex::index', compact('title'));
    }
    public function today()
    {
        echo Carbon::today();
    }
    public function yesterday()
    {
        echo Carbon::yesterday();
    }
}
