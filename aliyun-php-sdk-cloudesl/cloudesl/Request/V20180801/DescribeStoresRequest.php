<?php

namespace cloudesl\Request\V20180801;

/**
 * Request of DescribeStores
 *
 * @method string getToDate()
 * @method string getPageSize()
 * @method string getStoreName()
 * @method string getGroups()
 * @method string getStoreId()
 * @method string getBrand()
 * @method string getPageNumber()
 * @method string getFromDate()
 */
class DescribeStoresRequest extends \RpcAcsRequest
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
            'DescribeStores'
        );
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
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->requestParameters['StoreName'] = $storeName;
        $this->queryParameters['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @param string $groups
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->requestParameters['Groups'] = $groups;
        $this->queryParameters['Groups'] = $groups;

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
     * @param string $brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->requestParameters['Brand'] = $brand;
        $this->queryParameters['Brand'] = $brand;

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
}
