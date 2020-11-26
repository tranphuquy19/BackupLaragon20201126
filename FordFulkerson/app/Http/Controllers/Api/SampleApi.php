<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SampleApi extends Controller
{
    public function getSampleData()
    {
        return response(['name' => 'Qui', 'phone' => '123456789'], 200);
    }

}
