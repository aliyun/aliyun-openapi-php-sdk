<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryAppDeviceList
 *
 * @method array getProductKeyLists()
 * @method array getCategoryKeyLists()
 * @method string getIotInstanceId()
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
            'QueryAppDeviceList',
            'iot'
        );
    }

    /**
     * @param array $productKeyList
     *
     * @return $this
     */
    public function setProductKeyLists(array $productKeyList)
    {
        $this->requestParameters['ProductKeyLists'] = $productKeyList;
        foreach ($productKeyList as $i => $iValue) {
            $this->queryParameters['ProductKeyList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $categoryKeyList
     *
     * @return $this
     */
    public function setCategoryKeyLists(array $categoryKeyList)
    {
        $this->requestParameters['CategoryKeyLists'] = $categoryKeyList;
        foreach ($categoryKeyList as $i => $iValue) {
            $this->queryParameters['CategoryKeyList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

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
     * @param array $tagList
     *
     * @return $this
     */
    public function setTagLists(array $tagList)
    {
        $this->requestParameters['TagLists'] = $tagList;
        foreach ($tagList as $depth1 => $depth1Value) {
            $this->queryParameters['TagList.' . ($depth1 + 1) . '.TagName'] = $depth1Value['TagName'];
            $this->queryParameters['TagList.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
        }

        return $this;
    }
}
