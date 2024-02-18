<?php

namespace App\Services;

use App\Models\Footer;

class FooterService
{
    public static function getFooterData()
    {
        // Get the footer data
        $facebookFooter = Footer::where('platform', 'facebook')->first();
        $twitterFooter = Footer::where('platform', 'twitter')->first();
        $instaFooter = Footer::where('platform', 'instagram')->first();

        // Data Structure
        $footerData = [
            'facebook' => [
                'platform' => $facebookFooter->platform,
                'nama_halaman' => $facebookFooter->nama_halaman,
                'link_url' => $facebookFooter->link_url,
            ],
            'twitter' => [
                'platform' => $twitterFooter->platform,
                'nama_halaman' => $twitterFooter->nama_halaman,
                'link_url' => $twitterFooter->link_url,
            ],
            'instagram' => [
                'platform' => $instaFooter->platform,
                'nama_halaman' => $instaFooter->nama_halaman,
                'link_url' => $instaFooter->link_url,
            ]
        ];

        return $footerData;
    }
}
