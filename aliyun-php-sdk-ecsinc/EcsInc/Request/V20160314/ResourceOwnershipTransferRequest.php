<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of ResourceOwnershipTransfer
 *
 * @method string getResourceOwnerId()
 * @method string getToVSwitchId()
 * @method string getClientToken()
 * @method string getchannel()
 * @method string getoperator()
 * @method string getAliUid()
 * @method string getproxyId()
 * @method string getDryRun()
 * @method array getPrivateIpss()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getKeepPublicIp()
 * @method string getOwnerId()
 * @method string gettoken()
 * @method string getNewOwnerId()
 * @method string getToSecurityGroupId()
 * @method array getInstanceIdss()
 * @method string getappKey()
 * @method string getBid()
 * @method string getToVSwitchAliUid()
 */
class ResourceOwnershipTransferRequest extends \RpcAcsRequest
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
            'ResourceOwnershipTransfer',
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
     * @param string $toVSwitchId
     *
     * @return $this
     */
    public function setToVSwitchId($toVSwitchId)
    {
        $this->requestParameters['ToVSwitchId'] = $toVSwitchId;
        $this->queryParameters['ToVSwitchId'] = $toVSwitchId;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

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
     * @param string $aliUid
     *
     * @return $this
     */
    public function setAliUid($aliUid)
    {
        $this->requestParameters['AliUid'] = $aliUid;
        $this->queryParameters['AliUid'] = $aliUid;

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
     * @param string $dryRun
     *
     * @return $this
     */
    public function setDryRun($dryRun)
    {
        $this->requestParameters['DryRun'] = $dryRun;
        $this->queryParameters['DryRun'] = $dryRun;

        return $this;
    }

    /**
     * @param array $privateIpss
     *
     * @return $this
     */
    public function setPrivateIpss(array $privateIpss)
    {
        $this->requestParameters['PrivateIpss'] = $privateIpss;
        foreach ($privateIpss as $i => $iValue) {
            $this->queryParameters['PrivateIps.' . ($i + 1)] = $iValue;
        }

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
     * @param string $keepPublicIp
     *
     * @return $this
     */
    public function setKeepPublicIp($keepPublicIp)
    {
        $this->requestParameters['KeepPublicIp'] = $keepPublicIp;
        $this->queryParameters['KeepPublicIp'] = $keepPublicIp;

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
     * @param string $newOwnerId
     *
     * @return $this
     */
    public function setNewOwnerId($newOwnerId)
    {
        $this->requestParameters['NewOwnerId'] = $newOwnerId;
        $this->queryParameters['NewOwnerId'] = $newOwnerId;

        return $this;
    }

    /**
     * @param string $toSecurityGroupId
     *
     * @return $this
     */
    public function setToSecurityGroupId($toSecurityGroupId)
    {
        $this->requestParameters['ToSecurityGroupId'] = $toSecurityGroupId;
        $this->queryParameters['ToSecurityGroupId'] = $toSecurityGroupId;

        return $this;
    }

    /**
     * @param array $instanceIdss
     *
     * @return $this
     */
    public function setInstanceIdss(array $instanceIdss)
    {
        $this->requestParameters['InstanceIdss'] = $instanceIdss;
        foreach ($instanceIdss as $i => $iValue) {
            $this->queryParameters['InstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function setappKey($appKey)
    {
        $this->requestParameters['appKey'] = $appKey;
        $this->queryParameters['appKey'] = $appKey;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->requestParameters['Bid'] = $bid;
        $this->queryParameters['Bid'] = $bid;

        return $this;
    }

    /**
     * @param string $toVSwitchAliUid
     *
     * @return $this
     */
    public function setToVSwitchAliUid($toVSwitchAliUid)
    {
        $this->requestParameters['ToVSwitchAliUid'] = $toVSwitchAliUid;
        $this->queryParameters['ToVSwitchAliUid'] = $toVSwitchAliUid;

        return $this;
    }
}
