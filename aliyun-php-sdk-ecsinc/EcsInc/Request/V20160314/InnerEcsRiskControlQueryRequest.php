<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerEcsRiskControlQuery
 *
 * @method string getbussinessCode()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getip()
 * @method string getchannel()
 * @method string getextras()
 * @method string getriskyUrl()
 * @method string getOwnerId()
 * @method string getoperator()
 * @method string gettoken()
 * @method string getasync()
 * @method string getdomain()
 * @method string getaliUid()
 * @method string getbid()
 * @method string getproxyId()
 */
class InnerEcsRiskControlQueryRequest extends \RpcAcsRequest
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
            'InnerEcsRiskControlQuery',
            'ecs'
        );
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
     * @param string $extras
     *
     * @return $this
     */
    public function setextras($extras)
    {
        $this->requestParameters['extras'] = $extras;
        $this->queryParameters['extras'] = $extras;

        return $this;
    }

    /**
     * @param string $riskyUrl
     *
     * @return $this
     */
    public function setriskyUrl($riskyUrl)
    {
        $this->requestParameters['riskyUrl'] = $riskyUrl;
        $this->queryParameters['riskyUrl'] = $riskyUrl;

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
     * @param string $domain
     *
     * @return $this
     */
    public function setdomain($domain)
    {
        $this->requestParameters['domain'] = $domain;
        $this->queryParameters['domain'] = $domain;

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
