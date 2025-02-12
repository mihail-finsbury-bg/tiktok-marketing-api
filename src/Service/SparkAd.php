<?php

declare(strict_types=1);

namespace Promopult\TikTokMarketingApi\Service;

use Promopult\TikTokMarketingApi\AbstractService;

final class SparkAd extends AbstractService
{
    /**
     * Get info about a Spark Ad post
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

    /**
     * Get Spark Ad posts
     *
     * Use this endpoint to get a list of Spark Ads posts that have been authorized to an ad account.
     *
     * @param int $advertiserId Advertiser ID
     * @param int|null $page   The current page number. The default value is 1. The value must be ≥ 1.
     * @param int|null $pageSize   The page size. The default value: 20. The value must be in the range of 1-50.
     *
     * @return array
     *
     * @throws \Throwable
     * 
     * @see https://ads.tiktok.com/marketing_api/docs?id=1738376465972226
     */
    public function list(
        int $advertiserId,
        ?int $page = null,
        ?int $pageSize = null
    ): array {
        return $this->requestApi(
            'GET',
            '/open_api/v1.3/tt_video/list/',
            [
                'advertiser_id' => $advertiserId,
                'page' => $page,
                'page_size' => $pageSize,
            ]
        );
    }
}
