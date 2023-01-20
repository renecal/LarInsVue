<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function index()
    {
        // dd(Listing::all());
        return inertia(
            'Index/Index',
            [
                'message' => 'hello from laravel1',
            ]
        );
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
