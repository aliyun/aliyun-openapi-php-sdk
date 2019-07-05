<?php

namespace Green\Request\V20180509;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetAddVideoDnaResults
 *
 * @method string getClientInfo()
 */
class GetAddVideoDnaResultsRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/green/video/dna/add/results';

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
            'GetAddVideoDnaResults',
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
