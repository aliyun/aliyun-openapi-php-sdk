<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerDiskReset
 *
 * @method string getecsInstanceId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getchannel()
 * @method string getOwnerId()
 * @method string getdiskType()
 * @method string getoperator()
 * @method string gettoken()
 * @method string getasync()
 * @method string getpasswd()
 * @method string getinstanceIds()
 * @method string getuseImagePasswd()
 * @method string getkeepDiskSize()
 * @method string getproxyId()
 */
class InnerDiskResetRequest extends \RpcAcsRequest
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
            'InnerDiskReset',
            'ecs'
        );
    }

    /**
     * @param string $ecsInstanceId
     *
     * @return $this
     */
    public function setecsInstanceId($ecsInstanceId)
    {
        $this->requestParameters['ecsInstanceId'] = $ecsInstanceId;
        $this->queryParameters['ecsInstanceId'] = $ecsInstanceId;

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
     * @param string $diskType
     *
     * @return $this
     */
    public function setdiskType($diskType)
    {
        $this->requestParameters['diskType'] = $diskType;
        $this->queryParameters['diskType'] = $diskType;

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
     * @param string $passwd
     *
     * @return $this
     */
    public function setpasswd($passwd)
    {
        $this->requestParameters['passwd'] = $passwd;
        $this->queryParameters['passwd'] = $passwd;

        return $this;
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setinstanceIds($instanceIds)
    {
        $this->requestParameters['instanceIds'] = $instanceIds;
        $this->queryParameters['instanceIds'] = $instanceIds;

        return $this;
    }

    /**
     * @param string $useImagePasswd
     *
     * @return $this
     */
    public function setuseImagePasswd($useImagePasswd)
    {
        $this->requestParameters['useImagePasswd'] = $useImagePasswd;
        $this->queryParameters['useImagePasswd'] = $useImagePasswd;

        return $this;
    }

    /**
     * @param string $keepDiskSize
     *
     * @return $this
     */
    public function setkeepDiskSize($keepDiskSize)
    {
        $this->requestParameters['keepDiskSize'] = $keepDiskSize;
        $this->queryParameters['keepDiskSize'] = $keepDiskSize;

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
