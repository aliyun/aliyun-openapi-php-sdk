<?php

namespace Green\Request\V20180509;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of VideoFeedback
 *
 * @method string getClientInfo()
 */
class VideoFeedbackRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/green/video/feedback';

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Green',
            '2018-05-09',
            'VideoFeedback',
            'green'
        );
    }

    /**
     * @param string $clientInfo
     *
     * @return $this
     */
    public function setClientInfo($clientInfo)
    {
        $this->requestParameters['ClientInfo'] = $clientInfo;
        $this->queryParameters['ClientInfo'] = $clientInfo;

        return $this;
    }
}
