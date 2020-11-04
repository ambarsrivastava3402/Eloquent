<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
class dummyApi extends Controller
{
    //
    function getData()

    {
    	 return Company::all();
    }
}
