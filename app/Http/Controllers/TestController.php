<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index() {
        return 'index page';
    }
    function contact() {
        return 'contact page';
    }
    function team() {
        return 'team page';
    }
    function services() {
        return 'services page';
    }
    function about() {
        return 'about page';
    }
}
