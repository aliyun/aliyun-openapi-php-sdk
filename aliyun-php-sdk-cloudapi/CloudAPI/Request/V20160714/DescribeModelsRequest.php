<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of DescribeModels
 *
 * @method string getSecurityToken()
 * @method string getModelId()
 * @method string getGroupId()
 * @method string getModelName()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class DescribeModelsRequest extends \RpcAcsRequest
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
            'DescribeModels',
            'apigateway'
        );
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
     * @param string $modelId
     *
     * @return $this
     */
    public function setModelId($modelId)
    {
        $this->requestParameters['ModelId'] = $modelId;
        $this->queryParameters['ModelId'] = $modelId;

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
     * @param string $modelName
     *
     * @return $this
     */
    public function setModelName($modelName)
    {
        $this->requestParameters['ModelName'] = $modelName;
        $this->queryParameters['ModelName'] = $modelName;

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
