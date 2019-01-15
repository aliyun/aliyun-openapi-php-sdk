<?php

namespace Iot\Request\V20180120;

/**
 * Request of QueryAppDeviceList
 *
 * @method array getProductKeyLists()
 * @method array getCategoryKeyLists()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getAppKey()
 * @method array getTagLists()
 */
class QueryAppDeviceListRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'QueryAppDeviceList'
        );
    }

    /**
     * @param array $productKeyLists
     *
     * @return $this
     */
    public function setProductKeyLists(array $productKeyLists)
    {
        $this->requestParameters['ProductKeyLists'] = $productKeyLists;
        foreach ($productKeyLists as $i => $iValue) {
            $this->queryParameters['ProductKeyList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $categoryKeyLists
     *
     * @return $this
     */
    public function setCategoryKeyLists(array $categoryKeyLists)
    {
        $this->requestParameters['CategoryKeyLists'] = $categoryKeyLists;
        foreach ($categoryKeyLists as $i => $iValue) {
            $this->queryParameters['CategoryKeyList.' . ($i + 1)] = $iValue;
        }

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
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        $this->requestParameters['CurrentPage'] = $currentPage;
        $this->queryParameters['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->requestParameters['AppKey'] = $appKey;
        $this->queryParameters['AppKey'] = $appKey;

        return $this;
    }

    /**
     * @param array $tagLists
     *
     * @return $this
     */
    public function setTagLists(array $tagLists)
    {
        $this->requestParameters['TagLists'] = $tagLists;
        foreach ($tagLists as $i => $iValue) {
            $this->queryParameters['TagList.' . ($i + 1) . '.TagName'] = $tagLists[$i]['TagName'];
            $this->queryParameters['TagList.' . ($i + 1) . '.TagValue'] = $tagLists[$i]['TagValue'];
        }

        return $this;
    }
}
