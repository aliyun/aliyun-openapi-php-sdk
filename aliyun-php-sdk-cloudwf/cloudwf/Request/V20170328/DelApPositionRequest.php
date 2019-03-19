<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DelApPosition
 *
 * @method string getApAssetId()
 * @method string getMapId()
 */
class DelApPositionRequest extends \RpcAcsRequest
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
            'DelApPosition',
            'cloudwf'
        );
    }

    /**
     * @param string $apAssetId
     *
     * @return $this
     */
    public function setApAssetId($apAssetId)
    {
        $this->requestParameters['ApAssetId'] = $apAssetId;
        $this->queryParameters['ApAssetId'] = $apAssetId;

        return $this;
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
