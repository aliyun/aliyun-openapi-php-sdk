<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryCostUnit
 *
 * @method string getParentUnitId()
 * @method string getPageNum()
 * @method string getPageSize()
 * @method string getOwnerUid()
 */
class QueryCostUnitRequest extends \RpcAcsRequest
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
            'BssOpenApi',
            '2017-12-14',
            'QueryCostUnit',
            'BssOpenApi'
        );
    }

    /**
     * @param string $parentUnitId
     *
     * @return $this
     */
    public function setParentUnitId($parentUnitId)
    {
        $this->requestParameters['ParentUnitId'] = $parentUnitId;
        $this->queryParameters['ParentUnitId'] = $parentUnitId;

        return $this;
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

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
     * @param string $ownerUid
     *
     * @return $this
     */
    public function setOwnerUid($ownerUid)
    {
        $this->requestParameters['OwnerUid'] = $ownerUid;
        $this->queryParameters['OwnerUid'] = $ownerUid;

        return $this;
    }
}
