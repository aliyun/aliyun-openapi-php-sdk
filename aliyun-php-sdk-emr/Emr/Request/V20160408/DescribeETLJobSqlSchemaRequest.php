<?php

namespace Emr\Request\V20160408;

/**
 * Request of DescribeETLJobSqlSchema
 *
 * @method string getResourceOwnerId()
 * @method string getResolveId()
 */
class DescribeETLJobSqlSchemaRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'DescribeETLJobSqlSchema',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $resolveId
     *
     * @return $this
     */
    public function setResolveId($resolveId)
    {
        $this->requestParameters['ResolveId'] = $resolveId;
        $this->queryParameters['ResolveId'] = $resolveId;

        return $this;
    }
}
