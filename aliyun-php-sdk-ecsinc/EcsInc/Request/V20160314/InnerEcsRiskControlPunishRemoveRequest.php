<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerEcsRiskControlPunishRemove
 *
 * @method string getreason()
 * @method string getbussinessCode()
 * @method string getResourceOwnerId()
 * @method string getcoordinate()
 * @method string getsignatureCode()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getchannel()
 * @method string getpunishResult()
 * @method string getactionCode()
 * @method string getOwnerId()
 * @method string getoperator()
 * @method string gettoken()
 * @method string getasync()
 * @method string getInstanceId()
 * @method string getaliUid()
 * @method string getbid()
 * @method string getproxyId()
 */
class InnerEcsRiskControlPunishRemoveRequest extends \RpcAcsRequest
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
            'InnerEcsRiskControlPunishRemove',
            'ecs'
        );
    }

    /**
     * @param string $reason
     *
     * @return $this
     */
    public function setreason($reason)
    {
        $this->requestParameters['reason'] = $reason;
        $this->queryParameters['reason'] = $reason;

        return $this;
    }

    /**
     * @param string $bussinessCode
     *
     * @return $this
     */
    public function setbussinessCode($bussinessCode)
    {
        $this->requestParameters['bussinessCode'] = $bussinessCode;
        $this->queryParameters['bussinessCode'] = $bussinessCode;

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
     * @param string $coordinate
     *
     * @return $this
     */
    public function setcoordinate($coordinate)
    {
        $this->requestParameters['coordinate'] = $coordinate;
        $this->queryParameters['coordinate'] = $coordinate;

        return $this;
    }

    /**
     * @param string $signatureCode
     *
     * @return $this
     */
    public function setsignatureCode($signatureCode)
    {
        $this->requestParameters['signatureCode'] = $signatureCode;
        $this->queryParameters['signatureCode'] = $signatureCode;

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
     * @param string $punishResult
     *
     * @return $this
     */
    public function setpunishResult($punishResult)
    {
        $this->requestParameters['punishResult'] = $punishResult;
        $this->queryParameters['punishResult'] = $punishResult;

        return $this;
    }

    /**
     * @param string $actionCode
     *
     * @return $this
     */
    public function setactionCode($actionCode)
    {
        $this->requestParameters['actionCode'] = $actionCode;
        $this->queryParameters['actionCode'] = $actionCode;

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
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

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
}
