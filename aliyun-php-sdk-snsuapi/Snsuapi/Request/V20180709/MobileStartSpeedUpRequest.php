<?php

namespace Snsuapi\Request\V20180709;

/**
 * Request of MobileStartSpeedUp
 *
 * @method string getDuration()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getIp()
 * @method string getDestinationIpAddress()
 * @method string getPublicIp()
 * @method string getPublicPort()
 * @method string getOwnerId()
 * @method string getToken()
 */
class MobileStartSpeedUpRequest extends \RpcAcsRequest
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
            'Snsuapi',
            '2018-07-09',
            'MobileStartSpeedUp',
            'snsuapi'
        );
    }

    /**
     * @param string $duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->requestParameters['Duration'] = $duration;
        $this->queryParameters['Duration'] = $duration;

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
     * @param string $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->requestParameters['Ip'] = $ip;
        $this->queryParameters['Ip'] = $ip;

        return $this;
    }

    /**
     * @param string $destinationIpAddress
     *
     * @return $this
     */
    public function setDestinationIpAddress($destinationIpAddress)
    {
        $this->requestParameters['DestinationIpAddress'] = $destinationIpAddress;
        $this->queryParameters['DestinationIpAddress'] = $destinationIpAddress;

        return $this;
    }

    /**
     * @param string $publicIp
     *
     * @return $this
     */
    public function setPublicIp($publicIp)
    {
        $this->requestParameters['PublicIp'] = $publicIp;
        $this->queryParameters['PublicIp'] = $publicIp;

        return $this;
    }

    /**
     * @param string $publicPort
     *
     * @return $this
     */
    public function setPublicPort($publicPort)
    {
        $this->requestParameters['PublicPort'] = $publicPort;
        $this->queryParameters['PublicPort'] = $publicPort;

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
    public function setToken($token)
    {
        $this->requestParameters['Token'] = $token;
        $this->queryParameters['Token'] = $token;

        return $this;
    }
}
