<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\ScraperService;


class LinkedinController extends Controller
{
    public function index(ScraperService $scraperService)
    {
        $url = 'https://www.linkedin.com/in/kenneth-mckrola/detail/recent-activity/shares';

        $data = $scraperService->scrape($url);

        return view('blog.index', [
            'entry' => $data
        ]);
    }


    public function apiRequest()
    {
        $response = Http::withHeaders([])->get(
            'https://www.linkedin.com/feed/update/urn:li:activity:6821934194621603840'
        );



        // From document, the post body is contained in span where
        // class == break-text
    }
}
