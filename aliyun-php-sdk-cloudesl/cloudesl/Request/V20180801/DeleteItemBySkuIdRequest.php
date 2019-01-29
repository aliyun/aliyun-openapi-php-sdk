<?php

namespace cloudesl\Request\V20180801;

/**
 * Request of DeleteItemBySkuId
 *
 * @method string getStoreId()
 * @method string getSkuId()
 */
class DeleteItemBySkuIdRequest extends \RpcAcsRequest
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
            'cloudesl',
            '2018-08-01',
            'DeleteItemBySkuId'
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
     * @param string $skuId
     *
     * @return $this
     */
    public function setSkuId($skuId)
    {
        $this->requestParameters['SkuId'] = $skuId;
        $this->queryParameters['SkuId'] = $skuId;

        return $this;
    }
}
