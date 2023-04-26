<?php

namespace App\Http\Controllers;

use App\Models\InfoData;

class InfoDataController extends Controller
{
    /**
     * @return mixed
     */
    public function index(): mixed
    {
        return InfoData::first();
    }
}
