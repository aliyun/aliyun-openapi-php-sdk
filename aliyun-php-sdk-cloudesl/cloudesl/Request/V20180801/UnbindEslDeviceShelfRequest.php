<?php

namespace cloudesl\Request\V20180801;

/**
 * Request of UnbindEslDeviceShelf
 *
 * @method string getEslBarCode()
 * @method string getStoreId()
 */
class UnbindEslDeviceShelfRequest extends \RpcAcsRequest
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
            'UnbindEslDeviceShelf'
        );
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
