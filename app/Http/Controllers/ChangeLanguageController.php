<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Log;

class ChangeLanguageController extends Controller
{
    function changeLang($langcode)
    {
        App::setLocale($langcode);
        session()->put("lang_code", $langcode);

        return redirect()->back();
    }
}
