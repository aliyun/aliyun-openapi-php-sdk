<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListConfigByAction
 *
 * @method string getSearchName()
 * @method string getLimit()
 * @method string getActionName()
 */
class ListConfigByActionRequest extends \RpcAcsRequest
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
            'ListConfigByAction',
            'cloudwf'
        );
    }

    /**
     * @param string $searchName
     *
     * @return $this
     */
    public function setSearchName($searchName)
    {
        $this->requestParameters['SearchName'] = $searchName;
        $this->queryParameters['SearchName'] = $searchName;

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
     * @param string $actionName
     *
     * @return $this
     */
    public function setActionName($actionName)
    {
        $this->requestParameters['ActionName'] = $actionName;
        $this->queryParameters['ActionName'] = $actionName;

        return $this;
    }
}
