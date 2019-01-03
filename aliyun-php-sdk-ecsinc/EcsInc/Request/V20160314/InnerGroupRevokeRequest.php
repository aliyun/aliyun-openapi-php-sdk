<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerGroupRevoke
 *
 * @method string getResourceOwnerId()
 * @method string getsourceGroupNo()
 * @method string getportRange()
 * @method string getResourceOwnerAccount()
 * @method string getlevel()
 * @method string getipProtocol()
 * @method string getOwnerAccount()
 * @method string getsourceCidrIp()
 * @method string getchannel()
 * @method string getnic()
 * @method string getvpcInstanceId()
 * @method string getOwnerId()
 * @method string getdestCidrIp()
 * @method string getoperator()
 * @method string gettoken()
 * @method string getasync()
 * @method string getsourceGroupOwnerAliUid()
 * @method string getaliUid()
 * @method string getbid()
 * @method string getgroupNo()
 * @method string getproxyId()
 * @method string getpolicy()
 */
class InnerGroupRevokeRequest extends \RpcAcsRequest
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
            'InnerGroupRevoke',
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
     * @param string $sourceGroupNo
     *
     * @return $this
     */
    public function setsourceGroupNo($sourceGroupNo)
    {
        $this->requestParameters['sourceGroupNo'] = $sourceGroupNo;
        $this->queryParameters['sourceGroupNo'] = $sourceGroupNo;

        return $this;
    }

    /**
     * @param string $portRange
     *
     * @return $this
     */
    public function setportRange($portRange)
    {
        $this->requestParameters['portRange'] = $portRange;
        $this->queryParameters['portRange'] = $portRange;

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
     * @param string $level
     *
     * @return $this
     */
    public function setlevel($level)
    {
        $this->requestParameters['level'] = $level;
        $this->queryParameters['level'] = $level;

        return $this;
    }

    /**
     * @param string $ipProtocol
     *
     * @return $this
     */
    public function setipProtocol($ipProtocol)
    {
        $this->requestParameters['ipProtocol'] = $ipProtocol;
        $this->queryParameters['ipProtocol'] = $ipProtocol;

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
     * @param string $sourceCidrIp
     *
     * @return $this
     */
    public function setsourceCidrIp($sourceCidrIp)
    {
        $this->requestParameters['sourceCidrIp'] = $sourceCidrIp;
        $this->queryParameters['sourceCidrIp'] = $sourceCidrIp;

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
     * @param string $nic
     *
     * @return $this
     */
    public function setnic($nic)
    {
        $this->requestParameters['nic'] = $nic;
        $this->queryParameters['nic'] = $nic;

        return $this;
    }

    /**
     * @param string $vpcInstanceId
     *
     * @return $this
     */
    public function setvpcInstanceId($vpcInstanceId)
    {
        $this->requestParameters['vpcInstanceId'] = $vpcInstanceId;
        $this->queryParameters['vpcInstanceId'] = $vpcInstanceId;

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
     * @param string $destCidrIp
     *
     * @return $this
     */
    public function setdestCidrIp($destCidrIp)
    {
        $this->requestParameters['destCidrIp'] = $destCidrIp;
        $this->queryParameters['destCidrIp'] = $destCidrIp;

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
     * @param string $async
     *
     * @return $this
     */
    public function setasync($async)
    {
        $this->requestParameters['async'] = $async;
        $this->queryParameters['async'] = $async;

        return $this;
    }

    /**
     * @param string $sourceGroupOwnerAliUid
     *
     * @return $this
     */
    public function setsourceGroupOwnerAliUid($sourceGroupOwnerAliUid)
    {
        $this->requestParameters['sourceGroupOwnerAliUid'] = $sourceGroupOwnerAliUid;
        $this->queryParameters['sourceGroupOwnerAliUid'] = $sourceGroupOwnerAliUid;

        return $this;
    }

    /**
     * @param string $aliUid
     *
     * @return $this
     */
    public function setaliUid($aliUid)
    {
        $this->requestParameters['aliUid'] = $aliUid;
        $this->queryParameters['aliUid'] = $aliUid;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function setbid($bid)
    {
        $this->requestParameters['bid'] = $bid;
        $this->queryParameters['bid'] = $bid;

        return $this;
    }

    /**
     * @param string $groupNo
     *
     * @return $this
     */
    public function setgroupNo($groupNo)
    {
        $this->requestParameters['groupNo'] = $groupNo;
        $this->queryParameters['groupNo'] = $groupNo;

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
     * @param string $policy
     *
     * @return $this
     */
    public function setpolicy($policy)
    {
        $this->requestParameters['policy'] = $policy;
        $this->queryParameters['policy'] = $policy;

        return $this;
    }
}
