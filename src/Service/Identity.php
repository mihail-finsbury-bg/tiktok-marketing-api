<?php
declare(strict_types=1);

namespace Promopult\TikTokMarketingApi\Service;

use Promopult\TikTokMarketingApi\AbstractService;

final class Identity extends AbstractService
{
    /**
     * Get info about a TikTok video
     *
     * Use this endpoint to get the information about a TikTok post that you own
     * if your identity is AUTH_CODE, TT_USER or BC_AUTH_TT
     *
     * @param int $advertiserId     Advertiser ID
     * @param string $indetityType  Identity type. Enum values: AUTH_CODE, TT_USER, BC_AUTH_TT
     * @param string $indetityId    Identity ID
     * @param string $itemId        TikTok post ID
     *
     * @return array
     *
     * @throws \Throwable
     * 
     * @see https://ads.tiktok.com/marketing_api/docs?id=1740218522178562
     */
    public function videoInfo(
        int $advertiserId,
        string $indetityType,
        string $indetityId,
        string $itemId,
    ): array {
        return $this->requestApi(
            'GET',
            '/open_api/v1.3/identity/video/info/',
            [
                'advertiser_id' => $advertiserId,
                'indetityType' => $indetityType,
                'identity_id' => $indetityId,
                'item_id' => $itemId,
            ]
        );
    }
}
