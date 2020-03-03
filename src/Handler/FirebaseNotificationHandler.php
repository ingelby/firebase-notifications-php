<?php

namespace Firebase\Notifications\Handler;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

/**
 * Class FirebaseNotificationHandler
 * @package Firebase\Notifications\Handler
 * @author George Hallam
 * @deprecated 
 * @see FirebaseCloudMessagingHandler
 */
class FirebaseNotificationHandler extends BaseHandler
{
    const FIREBASE_SEND_URL = 'https://fcm.googleapis.com/fcm/send';

    protected $authorisationKey;
    protected $headers = [];
    protected $client;

    /**
     * @param string $authorisationKey
     */
    public function setAuthHeader($authorisationKey)
    {
        $this->headers['Authorization'] = 'key=' . $authorisationKey;
    }

    /**
     * @return string
     */
    protected function getSendUrl()
    {
        return static::FIREBASE_SEND_URL;
    }
}
