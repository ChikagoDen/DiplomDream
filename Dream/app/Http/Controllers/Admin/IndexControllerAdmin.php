<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class IndexControllerAdmin extends Controller
{
    public function index(){
        return view("Admin.adminIndex");
    }
}
