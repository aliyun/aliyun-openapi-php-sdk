<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetMapUrl
 *
 * @method string getMapId()
 */
class GetMapUrlRequest extends \RpcAcsRequest
{

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
            'cloudwf',
            '2017-03-28',
            'GetMapUrl',
            'cloudwf'
        );
    }

    /**
     * @param string $mapId
     *
     * @return $this
     */
    public function setMapId($mapId)
    {
        $this->requestParameters['MapId'] = $mapId;
        $this->queryParameters['MapId'] = $mapId;

        return $this;
    }
}
