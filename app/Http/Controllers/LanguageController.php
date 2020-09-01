<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Change language
     *
     * @return redirect
     */
    public function postChangeLanguage(Request $request)
    {
        $changeLocale = $request->input('lang');
        $locale = session('locale');

        if ($locale !== $changeLocale && in_array($changeLocale, config('app.locales')))
        {
            session(['locale' => $changeLocale]);
            app()->setLocale($changeLocale);
        }

        return redirect()->route('login', session('locale'));
    }
}
