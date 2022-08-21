<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ChangeLanguageController extends Controller
{
    function changeLang($langcode)
    {
        error_log("test ti ne $langcode");
        App::setLocale($langcode);
        session()->put("lang_code", $langcode);
        return redirect()->back();
    }
}
