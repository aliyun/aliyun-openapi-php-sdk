<?php

namespace cusanalytic_sc_online\Request\V20190524;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetPortrayal
 *
 * @method string getDate()
 * @method string getLocationIds()
 * @method string getStoreIds()
 */
class GetPortrayalRequest extends \RpcAcsRequest
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
            'GetPortrayal'
        );
    }

    /**
     * @param string $date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->requestParameters['Date'] = $date;
        $this->queryParameters['Date'] = $date;

        return $this;
    }

    /**
     * @param string $locationIds
     *
     * @return $this
     */
    public function setLocationIds($locationIds)
    {
        $this->requestParameters['LocationIds'] = $locationIds;
        $this->queryParameters['LocationIds'] = $locationIds;

        return $this;
    }

    /**
     * @param string $storeIds
     *
     * @return $this
     */
    public function setStoreIds($storeIds)
    {
        $this->requestParameters['StoreIds'] = $storeIds;
        $this->queryParameters['StoreIds'] = $storeIds;

        return $this;
    }
}
