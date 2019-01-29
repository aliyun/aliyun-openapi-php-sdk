<?php

namespace cloudesl\Request\V20180801;

/**
 * Request of DescribeItems
 *
 * @method string getItemId()
 * @method string getBePromotion()
 * @method string getShelfCode()
 * @method string getItemTitle()
 * @method string getPageSize()
 * @method string getStoreId()
 * @method string getSkuId()
 * @method string getPageNumber()
 * @method string getItemBarCode()
 */
class DescribeItemsRequest extends \RpcAcsRequest
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
            'DescribeItems'
        );
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
     * @param string $bePromotion
     *
     * @return $this
     */
    public function setBePromotion($bePromotion)
    {
        $this->requestParameters['BePromotion'] = $bePromotion;
        $this->queryParameters['BePromotion'] = $bePromotion;

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
