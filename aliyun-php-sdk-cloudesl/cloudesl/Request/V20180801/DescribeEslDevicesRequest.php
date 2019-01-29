<?php

namespace cloudesl\Request\V20180801;

/**
 * Request of DescribeEslDevices
 *
 * @method string getEslStatus()
 * @method string getToBatteryLevel()
 * @method string getStoreId()
 * @method string getType()
 * @method string getMac()
 * @method string getPageNumber()
 * @method string getFromBatteryLevel()
 * @method string getShelfCode()
 * @method string getEslBarCode()
 * @method string getVendor()
 * @method string getPageSize()
 * @method string getBeBind()
 * @method string getItemBarCode()
 */
class DescribeEslDevicesRequest extends \RpcAcsRequest
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
            'DescribeEslDevices'
        );
    }

    /**
     * @param string $eslStatus
     *
     * @return $this
     */
    public function setEslStatus($eslStatus)
    {
        $this->requestParameters['EslStatus'] = $eslStatus;
        $this->queryParameters['EslStatus'] = $eslStatus;

        return $this;
    }

    /**
     * @param string $toBatteryLevel
     *
     * @return $this
     */
    public function setToBatteryLevel($toBatteryLevel)
    {
        $this->requestParameters['ToBatteryLevel'] = $toBatteryLevel;
        $this->queryParameters['ToBatteryLevel'] = $toBatteryLevel;

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
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $mac
     *
     * @return $this
     */
    public function setMac($mac)
    {
        $this->requestParameters['Mac'] = $mac;
        $this->queryParameters['Mac'] = $mac;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $fromBatteryLevel
     *
     * @return $this
     */
    public function setFromBatteryLevel($fromBatteryLevel)
    {
        $this->requestParameters['FromBatteryLevel'] = $fromBatteryLevel;
        $this->queryParameters['FromBatteryLevel'] = $fromBatteryLevel;

        return $this;
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
     * @param string $vendor
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->requestParameters['Vendor'] = $vendor;
        $this->queryParameters['Vendor'] = $vendor;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $beBind
     *
     * @return $this
     */
    public function setBeBind($beBind)
    {
        $this->requestParameters['BeBind'] = $beBind;
        $this->queryParameters['BeBind'] = $beBind;

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
