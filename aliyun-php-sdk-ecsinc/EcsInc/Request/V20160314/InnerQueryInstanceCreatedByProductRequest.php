<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerQueryInstanceCreatedByProduct
 *
 * @method string getResourceOwnerId()
 * @method array getPrivateIpAddressess()
 * @method array getAliUidss()
 * @method array getInstanceTypess()
 * @method string getchannel()
 * @method string getSecurityGroupId()
 * @method string getoperator()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method array getPublicIpAddressess()
 * @method string getproxyId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string gettoken()
 * @method string getVSwitchId()
 */
class InnerQueryInstanceCreatedByProductRequest extends \RpcAcsRequest
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
            'EcsInc',
            '2016-03-14',
            'InnerQueryInstanceCreatedByProduct',
            'ecs'
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
     * @param array $privateIpAddressess
     *
     * @return $this
     */
    public function setPrivateIpAddressess(array $privateIpAddressess)
    {
        $this->requestParameters['PrivateIpAddressess'] = $privateIpAddressess;
        foreach ($privateIpAddressess as $i => $iValue) {
            $this->queryParameters['PrivateIpAddresses.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $aliUidss
     *
     * @return $this
     */
    public function setAliUidss(array $aliUidss)
    {
        $this->requestParameters['AliUidss'] = $aliUidss;
        foreach ($aliUidss as $i => $iValue) {
            $this->queryParameters['AliUids.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $instanceTypess
     *
     * @return $this
     */
    public function setInstanceTypess(array $instanceTypess)
    {
        $this->requestParameters['InstanceTypess'] = $instanceTypess;
        foreach ($instanceTypess as $i => $iValue) {
            $this->queryParameters['InstanceTypes.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function setchannel($channel)
    {
        $this->requestParameters['channel'] = $channel;
        $this->queryParameters['channel'] = $channel;

        return $this;
    }

    /**
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->requestParameters['SecurityGroupId'] = $securityGroupId;
        $this->queryParameters['SecurityGroupId'] = $securityGroupId;

        return $this;
    }

    /**
     * @param string $operator
     *
     * @return $this
     */
    public function setoperator($operator)
    {
        $this->requestParameters['operator'] = $operator;
        $this->queryParameters['operator'] = $operator;

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
     * @param array $publicIpAddressess
     *
     * @return $this
     */
    public function setPublicIpAddressess(array $publicIpAddressess)
    {
        $this->requestParameters['PublicIpAddressess'] = $publicIpAddressess;
        foreach ($publicIpAddressess as $i => $iValue) {
            $this->queryParameters['PublicIpAddresses.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $proxyId
     *
     * @return $this
     */
    public function setproxyId($proxyId)
    {
        $this->requestParameters['proxyId'] = $proxyId;
        $this->queryParameters['proxyId'] = $proxyId;

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

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function settoken($token)
    {
        $this->requestParameters['token'] = $token;
        $this->queryParameters['token'] = $token;

        return $this;
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        $this->requestParameters['VSwitchId'] = $vSwitchId;
        $this->queryParameters['VSwitchId'] = $vSwitchId;

        return $this;
    }
}
