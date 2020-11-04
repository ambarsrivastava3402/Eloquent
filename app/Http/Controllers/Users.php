<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\DB;
class Users extends Controller
{
    function getData()

    {
    	 $data= DB::table('companies')->get();
         return   view('companyform',['data'=>$data]);  
    } 

}