<?php

namespace Cbn\Request\V20170912;

/**
 * Request of EnableCenVbrHealthCheck
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getCenId()
 * @method string getHealthCheckSourceIp()
 * @method string getVbrInstanceOwnerId()
 * @method string getOwnerAccount()
 * @method string getVbrInstanceId()
 * @method string getHealthCheckTargetIp()
 * @method string getOwnerId()
 * @method string getVbrInstanceRegionId()
 */
class EnableCenVbrHealthCheckRequest extends \RpcAcsRequest
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
            'Cbn',
            '2017-09-12',
            'EnableCenVbrHealthCheck',
            'cbn'
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
     * @param string $cenId
     *
     * @return $this
     */
    public function setCenId($cenId)
    {
        $this->requestParameters['CenId'] = $cenId;
        $this->queryParameters['CenId'] = $cenId;

        return $this;
    }

    /**
     * @param string $healthCheckSourceIp
     *
     * @return $this
     */
    public function setHealthCheckSourceIp($healthCheckSourceIp)
    {
        $this->requestParameters['HealthCheckSourceIp'] = $healthCheckSourceIp;
        $this->queryParameters['HealthCheckSourceIp'] = $healthCheckSourceIp;

        return $this;
    }

    /**
     * @param string $vbrInstanceOwnerId
     *
     * @return $this
     */
    public function setVbrInstanceOwnerId($vbrInstanceOwnerId)
    {
        $this->requestParameters['VbrInstanceOwnerId'] = $vbrInstanceOwnerId;
        $this->queryParameters['VbrInstanceOwnerId'] = $vbrInstanceOwnerId;

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
     * @param string $vbrInstanceId
     *
     * @return $this
     */
    public function setVbrInstanceId($vbrInstanceId)
    {
        $this->requestParameters['VbrInstanceId'] = $vbrInstanceId;
        $this->queryParameters['VbrInstanceId'] = $vbrInstanceId;

        return $this;
    }

    /**
     * @param string $healthCheckTargetIp
     *
     * @return $this
     */
    public function setHealthCheckTargetIp($healthCheckTargetIp)
    {
        $this->requestParameters['HealthCheckTargetIp'] = $healthCheckTargetIp;
        $this->queryParameters['HealthCheckTargetIp'] = $healthCheckTargetIp;

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
     * @param string $vbrInstanceRegionId
     *
     * @return $this
     */
    public function setVbrInstanceRegionId($vbrInstanceRegionId)
    {
        $this->requestParameters['VbrInstanceRegionId'] = $vbrInstanceRegionId;
        $this->queryParameters['VbrInstanceRegionId'] = $vbrInstanceRegionId;

        return $this;
    }
}
