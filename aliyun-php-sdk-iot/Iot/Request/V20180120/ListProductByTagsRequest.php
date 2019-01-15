<?php

namespace Iot\Request\V20180120;

/**
 * Request of ListProductByTags
 *
 * @method array getProductTags()
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
            'ListProductByTags'
        );
    }

    /**
     * @param array $productTags
     *
     * @return $this
     */
    public function setProductTags(array $productTags)
    {
        $this->requestParameters['ProductTags'] = $productTags;
        foreach ($productTags as $i => $iValue) {
            $this->queryParameters['ProductTag.' . ($i + 1) . '.TagValue'] = $productTags[$i]['TagValue'];
            $this->queryParameters['ProductTag.' . ($i + 1) . '.TagKey'] = $productTags[$i]['TagKey'];
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
}
