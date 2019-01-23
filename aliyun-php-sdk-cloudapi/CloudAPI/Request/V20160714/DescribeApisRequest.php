<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of DescribeApis
 *
 * @method string getApiName()
 * @method string getCatalogId()
 * @method string getVisibility()
 * @method string getSecurityToken()
 * @method string getGroupId()
 * @method string getPageSize()
 * @method string getApiId()
 * @method string getPageNumber()
 */
class DescribeApisRequest extends \RpcAcsRequest
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
            'CloudAPI',
            '2016-07-14',
            'DescribeApis',
            'apigateway'
        );
    }

    /**
     * @param string $apiName
     *
     * @return $this
     */
    public function setApiName($apiName)
    {
        $this->requestParameters['ApiName'] = $apiName;
        $this->queryParameters['ApiName'] = $apiName;

        return $this;
    }

    /**
     * @param string $catalogId
     *
     * @return $this
     */
    public function setCatalogId($catalogId)
    {
        $this->requestParameters['CatalogId'] = $catalogId;
        $this->queryParameters['CatalogId'] = $catalogId;

        return $this;
    }

    /**
     * @param string $visibility
     *
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->requestParameters['Visibility'] = $visibility;
        $this->queryParameters['Visibility'] = $visibility;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

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
     * @param string $apiId
     *
     * @return $this
     */
    public function setApiId($apiId)
    {
        $this->requestParameters['ApiId'] = $apiId;
        $this->queryParameters['ApiId'] = $apiId;

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
}
