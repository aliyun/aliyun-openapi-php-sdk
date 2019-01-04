<?php

namespace Rds\Request\V20140815;

/**
 * Request of ModifyReadWriteSplittingConnection
 *
 * @method string getResourceOwnerId()
 * @method string getConnectionStringPrefix()
 * @method string getResourceOwnerAccount()
 * @method string getPort()
 * @method string getDistributionType()
 * @method string getOwnerAccount()
 * @method string getWeight()
 * @method string getDBInstanceId()
 * @method string getOwnerId()
 * @method string getMaxDelayTime()
 */
class ModifyReadWriteSplittingConnectionRequest extends \RpcAcsRequest
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
            'Rds',
            '2014-08-15',
            'ModifyReadWriteSplittingConnection',
            'rds'
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
     * @param string $connectionStringPrefix
     *
     * @return $this
     */
    public function setConnectionStringPrefix($connectionStringPrefix)
    {
        $this->requestParameters['ConnectionStringPrefix'] = $connectionStringPrefix;
        $this->queryParameters['ConnectionStringPrefix'] = $connectionStringPrefix;

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
     * @param string $distributionType
     *
     * @return $this
     */
    public function setDistributionType($distributionType)
    {
        $this->requestParameters['DistributionType'] = $distributionType;
        $this->queryParameters['DistributionType'] = $distributionType;

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
     * @param string $weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->requestParameters['Weight'] = $weight;
        $this->queryParameters['Weight'] = $weight;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

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
     * @param string $maxDelayTime
     *
     * @return $this
     */
    public function setMaxDelayTime($maxDelayTime)
    {
        $this->requestParameters['MaxDelayTime'] = $maxDelayTime;
        $this->queryParameters['MaxDelayTime'] = $maxDelayTime;

        return $this;
    }
}
