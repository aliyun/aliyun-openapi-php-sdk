<?php

namespace cusanalytic_sc_online\Request\V20190524;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetEMap
 *
 * @method string getStoreId()
 * @method string getLocationId()
 */
class GetEMapRequest extends \RpcAcsRequest
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
            'cusanalytic_sc_online',
            '2019-05-24',
            'GetEMap'
        );
    }

    /**
     * @param string $storeId
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->requestParameters['StoreId'] = $storeId;
        $this->queryParameters['StoreId'] = $storeId;

        return $this;
    }

    /**
     * @param string $locationId
     *
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->requestParameters['LocationId'] = $locationId;
        $this->queryParameters['LocationId'] = $locationId;

        return $this;
    }
}
