<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function getPage(){
        return view('invoice',["activeSidebarMain" => "invoice"]);
    }
}
