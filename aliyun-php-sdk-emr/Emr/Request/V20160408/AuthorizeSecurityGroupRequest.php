<?php

namespace Emr\Request\V20160408;

/**
 * Request of AuthorizeSecurityGroup
 *
 * @method string getBizType()
 * @method string getResourceOwnerId()
 * @method string getBizContent()
 * @method string getClusterId()
 */
class AuthorizeSecurityGroupRequest extends \RpcAcsRequest
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
            'AuthorizeSecurityGroup',
            'emr'
        );
    }

    /**
     * @param string $bizType
     *
     * @return $this
     */
    public function setBizType($bizType)
    {
        $this->requestParameters['BizType'] = $bizType;
        $this->queryParameters['BizType'] = $bizType;

        return $this;
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
     * @param string $bizContent
     *
     * @return $this
     */
    public function setBizContent($bizContent)
    {
        $this->requestParameters['BizContent'] = $bizContent;
        $this->queryParameters['BizContent'] = $bizContent;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }
}
