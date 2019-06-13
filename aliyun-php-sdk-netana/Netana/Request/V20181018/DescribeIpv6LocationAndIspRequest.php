<?php

namespace Netana\Request\V20181018;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeIpv6LocationAndIsp
 *
 * @method string getIpAddress()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 */
class DescribeIpv6LocationAndIspRequest extends \RpcAcsRequest
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
            'Netana',
            '2018-10-18',
            'DescribeIpv6LocationAndIsp',
            'Netana'
        );
    }

    /**
     * @param string $ipAddress
     *
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->requestParameters['IpAddress'] = $ipAddress;
        $this->queryParameters['IpAddress'] = $ipAddress;

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
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }
}
