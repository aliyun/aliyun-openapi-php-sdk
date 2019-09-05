<?php

namespace cusanalytic_sc_online\Request\V20190524;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetImageUrl
 *
 * @method string getOriginUrls()
 * @method string getStoreId()
 * @method string getObjectKeys()
 */
class GetImageUrlRequest extends \RpcAcsRequest
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
            'GetImageUrl'
        );
    }

    /**
     * @param string $originUrls
     *
     * @return $this
     */
    public function setOriginUrls($originUrls)
    {
        $this->requestParameters['OriginUrls'] = $originUrls;
        $this->queryParameters['OriginUrls'] = $originUrls;

        return $this;
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
     * @param string $objectKeys
     *
     * @return $this
     */
    public function setObjectKeys($objectKeys)
    {
        $this->requestParameters['ObjectKeys'] = $objectKeys;
        $this->queryParameters['ObjectKeys'] = $objectKeys;

        return $this;
    }
}
