<?php

namespace App\Services;

use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class ScraperService
{
    /**
     * Make a call to to specified url and return formatted data
     * 
     * @param string $url
     * 
     * @return array
     */
    public function scrape($url)
    {
        $client  = new Client();
        $crawler = $client->request('GET', $url);
        //Get outline of all shares
        $sharesOutline = $crawler->filter('.pv-recent-activity-detail__outlet-container')->each(function ($node) {
            $shares = $node->text();
            return compact('shares');
        });

        $body = $crawler->filter('.feed-shared-text div')->each(function ($node) {
            return $node->text();
        });

        return $sharesOutline;
        //Get the link to view a specific job details
        // $links = $crawler->filter('.listResults a.s-link')->each(function ($node) {
        //     $href  = 'https://stackoverflow.com' . $node->attr('href');
        //     $title = $node->attr('title');
        //     $text  = $node->text();
        //     return compact('href', 'title', 'text');
        // });

        // //Get all the technical tags for each job posting
        // $tags = $crawler->filter('.ps-relative.d-inline-block')->each(function ($node) {
        //     return $node->filter('a.post-tag')->each(function ($nested_node) {
        //         $href  = 'https://stackoverflow.com' . $nested_node->attr('href');
        //         $title = $nested_node->attr('title');
        //         $text  = $nested_node->text();
        //         return compact('href', 'title', 'text');
        //     });
        // });

        //return compact('titles', 'location', 'time', 'links', 'tags');
    }
}
