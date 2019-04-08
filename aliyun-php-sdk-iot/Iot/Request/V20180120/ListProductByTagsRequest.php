<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListProductByTags
 *
 * @method array getProductTags()
 * @method string getIotInstanceId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class ListProductByTagsRequest extends \RpcAcsRequest
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
            'ListProductByTags',
            'iot'
        );
    }

    /**
     * @param array $productTag
     *
     * @return $this
     */
    public function setProductTags(array $productTag)
    {
        $this->requestParameters['ProductTags'] = $productTag;
        foreach ($productTag as $depth1 => $depth1Value) {
            $this->queryParameters['ProductTag.' . ($depth1 + 1) . '.TagValue'] = $depth1Value['TagValue'];
            $this->queryParameters['ProductTag.' . ($depth1 + 1) . '.TagKey'] = $depth1Value['TagKey'];
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
}
