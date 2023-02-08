<?php

declare(strict_types=1);

namespace Promopult\TikTokMarketingApi\Service;

use Promopult\TikTokMarketingApi\AbstractService;

final class SparkAd extends AbstractService
{
    /**
     * Get spark ad post information
     *
     * Use this endpoint to get the information about the Spark Ads post that you have been authorized to use as an ad. 
     * You need to pass in the authorization code from the post owner.
     *
     * @param int $advertiserId Advertiser ID
     * @param string $authCode   The authorization code for the Spark Ads post.
     *
     * @return array
     *
     * @throws \Throwable
     * 
     * @see https://ads.tiktok.com/marketing_api/docs?id=1738376324021250
     */
    public function info(
        int $advertiserId,
        string $authCode
    ): array {
        return $this->requestApi(
            'GET',
            '/open_api/v1.3/tt_video/info/',
            [
                'advertiser_id' => $advertiserId,
                'auth_code' => $authCode
            ]
        );
    }
}
