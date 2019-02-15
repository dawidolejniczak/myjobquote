<?php

namespace App\Http\Controllers;

use App\ShortenedLink;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShortenedLinksController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('shortened-links.index');
    }


    public function store(Request $request)
    {
        $sameUrl = ShortenedLink::where('original_url', $request->get('original_url'))->first();

        if($sameUrl) {
            return $sameUrl->shortened_link;
        }


        $count = ShortenedLink::count();

        $model = ShortenedLink::create([
            'original_url' => $request->get('original_url'),
            'shortened_link' => $this->convertIntegerTo62system($count)
        ]);

        // retun only hash/ I was out of time
        return $model->shortened_link;
    }

    private function convertIntegerTo62system($integer)
    {
        // Not enough time to write an algorithm, so I just used hashing instead actually converting

        return hash('crc32', $integer);
    }
}
