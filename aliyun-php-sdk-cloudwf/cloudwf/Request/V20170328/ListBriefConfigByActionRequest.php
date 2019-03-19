<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListBriefConfigByAction
 *
 * @method string getAncestorApgroupId()
 * @method string getLimit()
 * @method string getFuzzySearch()
 */
class ListBriefConfigByActionRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'ListBriefConfigByAction',
            'cloudwf'
        );
    }

    /**
     * @param string $ancestorApgroupId
     *
     * @return $this
     */
    public function setAncestorApgroupId($ancestorApgroupId)
    {
        $this->requestParameters['AncestorApgroupId'] = $ancestorApgroupId;
        $this->queryParameters['AncestorApgroupId'] = $ancestorApgroupId;

        return $this;
    }

    /**
     * @param string $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->requestParameters['Limit'] = $limit;
        $this->queryParameters['Limit'] = $limit;

        return $this;
    }

    /**
     * @param string $fuzzySearch
     *
     * @return $this
     */
    public function setFuzzySearch($fuzzySearch)
    {
        $this->requestParameters['FuzzySearch'] = $fuzzySearch;
        $this->queryParameters['FuzzySearch'] = $fuzzySearch;

        return $this;
    }
}
