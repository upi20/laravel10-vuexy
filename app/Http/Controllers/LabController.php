<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('content.lab.datatable', ['pageConfigs' => $pageConfigs]);
    }
}
