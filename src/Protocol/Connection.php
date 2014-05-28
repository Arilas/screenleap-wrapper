<?php
/**
 * Created by PhpStorm.
 * User: krona
 * Date: 4/25/14
 * Time: 3:26 PM
 */

namespace Arilas\ScreenLeap\Protocol;


use Arilas\ScreenLeap\Response\ShareResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Message\ResponseInterface;

class Connection
{
    const SHARE_URL = 'https://api.screenleap.com/v2/screen-shares';

    /** @var  string */
    protected $accountId;
    /** @var  string */
    protected $token;

    public function __construct($accountId, $token)
    {
        $this->accountId = $accountId;
        $this->token = $token;
    }

    /**
     *
     * @return ShareResponse
     */
    public function doShareRequest()
    {
        $client = new Client();
        /** @var ResponseInterface $response */
        $response = $client->post(
            static::SHARE_URL,
            [
                'headers' => [
                    'authtoken' => $this->token,
                    'Accept' => 'application/json',
                ],
                'body' => [
                    'accountid' => $this->accountId,
                ],
            ]
        );

        return new ShareResponse(json_decode($response->getBody(), true));
    }
} 