<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerEcsFindById
 *
 * @method string getResourceOwnerId()
 * @method string getinternetIp()
 * @method string getserialNumber()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getip()
 * @method string getchannel()
 * @method string getOwnerId()
 * @method string getoperator()
 * @method string gettoken()
 * @method string getinstanceId()
 * @method string getaliUid()
 * @method string getauthedEcsIds()
 * @method string getid()
 * @method string getbid()
 * @method string getproxyId()
 * @method string getintranetIp()
 */
class InnerEcsFindByIdRequest extends \RpcAcsRequest
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
            'InnerEcsFindById',
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
     * @param string $serialNumber
     *
     * @return $this
     */
    public function setserialNumber($serialNumber)
    {
        $this->requestParameters['serialNumber'] = $serialNumber;
        $this->queryParameters['serialNumber'] = $serialNumber;

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
     * @param string $ip
     *
     * @return $this
     */
    public function setip($ip)
    {
        $this->requestParameters['ip'] = $ip;
        $this->queryParameters['ip'] = $ip;

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
    public function setinstanceId($instanceId)
    {
        $this->requestParameters['instanceId'] = $instanceId;
        $this->queryParameters['instanceId'] = $instanceId;

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
     * @param string $authedEcsIds
     *
     * @return $this
     */
    public function setauthedEcsIds($authedEcsIds)
    {
        $this->requestParameters['authedEcsIds'] = $authedEcsIds;
        $this->queryParameters['authedEcsIds'] = $authedEcsIds;

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

    /**
     * @param string $intranetIp
     *
     * @return $this
     */
    public function setintranetIp($intranetIp)
    {
        $this->requestParameters['intranetIp'] = $intranetIp;
        $this->queryParameters['intranetIp'] = $intranetIp;

        return $this;
    }
}
