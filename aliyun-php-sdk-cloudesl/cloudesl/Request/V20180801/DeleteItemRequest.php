<?php

namespace cloudesl\Request\V20180801;

/**
 * Request of DeleteItem
 *
 * @method string getStoreId()
 * @method string getItemBarCode()
 */
class DeleteItemRequest extends \RpcAcsRequest
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
            'DeleteItem'
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
     * @param string $itemBarCode
     *
     * @return $this
     */
    public function setItemBarCode($itemBarCode)
    {
        $this->requestParameters['ItemBarCode'] = $itemBarCode;
        $this->queryParameters['ItemBarCode'] = $itemBarCode;

        return $this;
    }
}
