<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerMaliceEcsUnlock
 *
 * @method string getreason()
 * @method string getResourceOwnerId()
 * @method string getinternetIp()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getchannel()
 * @method string getOwnerId()
 * @method string getoperator()
 * @method string gettoken()
 * @method string getInstanceId()
 * @method string getlockType()
 * @method string getid()
 * @method string getproof()
 * @method string getproxyId()
 */
class InnerMaliceEcsUnlockRequest extends \RpcAcsRequest
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
            'InnerMaliceEcsUnlock',
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
     * @param string $internetIp
     *
     * @return $this
     */
    public function setinternetIp($internetIp)
    {
        $this->requestParameters['internetIp'] = $internetIp;
        $this->queryParameters['internetIp'] = $internetIp;

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
     * @param string $lockType
     *
     * @return $this
     */
    public function setlockType($lockType)
    {
        $this->requestParameters['lockType'] = $lockType;
        $this->queryParameters['lockType'] = $lockType;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setid($id)
    {
        $this->requestParameters['id'] = $id;
        $this->queryParameters['id'] = $id;

        return $this;
    }

    /**
     * @param string $proof
     *
     * @return $this
     */
    public function setproof($proof)
    {
        $this->requestParameters['proof'] = $proof;
        $this->queryParameters['proof'] = $proof;

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
