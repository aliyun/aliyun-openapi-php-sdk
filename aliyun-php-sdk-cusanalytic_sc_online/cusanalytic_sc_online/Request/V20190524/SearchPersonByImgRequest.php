<?php

namespace cusanalytic_sc_online\Request\V20190524;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SearchPersonByImg
 *
 * @method string getImgUrl()
 * @method string getStoreId()
 */
class SearchPersonByImgRequest extends \RpcAcsRequest
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
            'SearchPersonByImg'
        );
    }

    /**
     * @param string $imgUrl
     *
     * @return $this
     */
    public function setImgUrl($imgUrl)
    {
        $this->requestParameters['ImgUrl'] = $imgUrl;
        $this->queryParameters['ImgUrl'] = $imgUrl;

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
}
