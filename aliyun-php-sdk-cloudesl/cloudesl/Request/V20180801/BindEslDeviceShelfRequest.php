<?php

namespace cloudesl\Request\V20180801;

/**
 * Request of BindEslDeviceShelf
 *
 * @method string getShelfCode()
 * @method string getEslBarCode()
 * @method string getStoreId()
 */
class BindEslDeviceShelfRequest extends \RpcAcsRequest
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
            'BindEslDeviceShelf'
        );
    }

    /**
     * @param string $shelfCode
     *
     * @return $this
     */
    public function setShelfCode($shelfCode)
    {
        $this->requestParameters['ShelfCode'] = $shelfCode;
        $this->queryParameters['ShelfCode'] = $shelfCode;

        return $this;
    }

    /**
     * @param string $eslBarCode
     *
     * @return $this
     */
    public function setEslBarCode($eslBarCode)
    {
        $this->requestParameters['EslBarCode'] = $eslBarCode;
        $this->queryParameters['EslBarCode'] = $eslBarCode;

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
