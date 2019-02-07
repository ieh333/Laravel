<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = "ИКТ Инженеринг";
        $text_header = "ИКТ Инженеринг - пренос на данни от ново поколение - 10G EPON";
        $paragraph = "Фирмата предлага следните услуги - изграждане на оптична кабелна система за пренос на данни с иновативна технология - 10G EPON;  поддръжка на управлението и обслужване на компютърни средства и системи; изграждане и поддържане на оптични кабелни мрежи.";
        return view('index', compact('title', 'text_header', 'paragraph'));
    }

    public function about()
    {
        $title = "ИКТ Инженеринг";
        $text_header = "За компанията";
        $paragraph = "";
        return view('pages.about', compact('title', 'text_header', 'paragraph'));
    }

    public function service()
    {
        $title = "ИКТ Инженеринг";
        $text_header = "Услуги и продукти";
        $paragraph = "";
        return view('pages.services', compact('title', 'text_header', 'paragraph'));
    }

    public function price()
    {
        $title = "ИКТ Инженеринг";
        $text_header = "Цени";
        $paragraph = "";
        return view('pages.prices', compact('title', 'text_header', 'paragraph'));
    }

    public function support()
    {
        $title = "ИКТ Инженеринг";
        $text_header = "Поддръжка";
        $paragraph = "";
        return view('pages.support', compact('title', 'text_header', 'paragraph'));
    }
}
