<?php

namespace cloudesl\Request\V20180801;

/**
 * Request of DescribeUserOperationLog
 *
 * @method string getOperateUserId()
 * @method string getItemTitle()
 * @method string getOperateStatus()
 * @method string getStoreId()
 * @method string getReverse()
 * @method string getPageNumber()
 * @method string getFromDate()
 * @method string getItemId()
 * @method string getToDate()
 * @method string getEslBarCode()
 * @method string getPageSize()
 * @method string getOperateType()
 * @method string getItemBarCode()
 */
class DescribeUserOperationLogRequest extends \RpcAcsRequest
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
            'DescribeUserOperationLog'
        );
    }

    /**
     * @param string $operateUserId
     *
     * @return $this
     */
    public function setOperateUserId($operateUserId)
    {
        $this->requestParameters['OperateUserId'] = $operateUserId;
        $this->queryParameters['OperateUserId'] = $operateUserId;

        return $this;
    }

    /**
     * @param string $itemTitle
     *
     * @return $this
     */
    public function setItemTitle($itemTitle)
    {
        $this->requestParameters['ItemTitle'] = $itemTitle;
        $this->queryParameters['ItemTitle'] = $itemTitle;

        return $this;
    }

    /**
     * @param string $operateStatus
     *
     * @return $this
     */
    public function setOperateStatus($operateStatus)
    {
        $this->requestParameters['OperateStatus'] = $operateStatus;
        $this->queryParameters['OperateStatus'] = $operateStatus;

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
     * @param string $reverse
     *
     * @return $this
     */
    public function setReverse($reverse)
    {
        $this->requestParameters['Reverse'] = $reverse;
        $this->queryParameters['Reverse'] = $reverse;

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
     * @param string $fromDate
     *
     * @return $this
     */
    public function setFromDate($fromDate)
    {
        $this->requestParameters['FromDate'] = $fromDate;
        $this->queryParameters['FromDate'] = $fromDate;

        return $this;
    }

    /**
     * @param string $itemId
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->requestParameters['ItemId'] = $itemId;
        $this->queryParameters['ItemId'] = $itemId;

        return $this;
    }

    /**
     * @param string $toDate
     *
     * @return $this
     */
    public function setToDate($toDate)
    {
        $this->requestParameters['ToDate'] = $toDate;
        $this->queryParameters['ToDate'] = $toDate;

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
     * @param string $operateType
     *
     * @return $this
     */
    public function setOperateType($operateType)
    {
        $this->requestParameters['OperateType'] = $operateType;
        $this->queryParameters['OperateType'] = $operateType;

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
