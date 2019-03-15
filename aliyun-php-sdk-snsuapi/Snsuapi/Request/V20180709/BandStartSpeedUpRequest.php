<?php

namespace Snsuapi\Request\V20180709;

/**
 * Request of BandStartSpeedUp
 *
 * @method string getIpAddress()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getPort()
 * @method string getBandId()
 * @method string getOwnerId()
 * @method string getTargetBandwidth()
 * @method string getBandScene()
 * @method string getDirection()
 */
class BandStartSpeedUpRequest extends \RpcAcsRequest
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
            'BandStartSpeedUp',
            'snsuapi'
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

    /**
     * @param string $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->requestParameters['Port'] = $port;
        $this->queryParameters['Port'] = $port;

        return $this;
    }

    /**
     * @param string $bandId
     *
     * @return $this
     */
    public function setBandId($bandId)
    {
        $this->requestParameters['BandId'] = $bandId;
        $this->queryParameters['BandId'] = $bandId;

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
     * @param string $targetBandwidth
     *
     * @return $this
     */
    public function setTargetBandwidth($targetBandwidth)
    {
        $this->requestParameters['TargetBandwidth'] = $targetBandwidth;
        $this->queryParameters['TargetBandwidth'] = $targetBandwidth;

        return $this;
    }

    /**
     * @param string $bandScene
     *
     * @return $this
     */
    public function setBandScene($bandScene)
    {
        $this->requestParameters['BandScene'] = $bandScene;
        $this->queryParameters['BandScene'] = $bandScene;

        return $this;
    }

    /**
     * @param string $direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->requestParameters['Direction'] = $direction;
        $this->queryParameters['Direction'] = $direction;

        return $this;
    }
}
