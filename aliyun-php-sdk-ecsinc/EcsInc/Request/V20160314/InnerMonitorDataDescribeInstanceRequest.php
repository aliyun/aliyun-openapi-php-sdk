<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerMonitorDataDescribeInstance
 *
 * @method string getResourceOwnerId()
 * @method string getstartTime()
 * @method string getaliUid()
 * @method string getperiod()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getendTime()
 * @method string getOwnerId()
 * @method string getInstanceId()
 * @method string getmetrics()
 * @method string getbid()
 */
class InnerMonitorDataDescribeInstanceRequest extends \RpcAcsRequest
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
            'InnerMonitorDataDescribeInstance',
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
     * @param string $startTime
     *
     * @return $this
     */
    public function setstartTime($startTime)
    {
        $this->requestParameters['startTime'] = $startTime;
        $this->queryParameters['startTime'] = $startTime;

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
     * @param string $period
     *
     * @return $this
     */
    public function setperiod($period)
    {
        $this->requestParameters['period'] = $period;
        $this->queryParameters['period'] = $period;

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
     * @param string $endTime
     *
     * @return $this
     */
    public function setendTime($endTime)
    {
        $this->requestParameters['endTime'] = $endTime;
        $this->queryParameters['endTime'] = $endTime;

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
     * @param string $metrics
     *
     * @return $this
     */
    public function setmetrics($metrics)
    {
        $this->requestParameters['metrics'] = $metrics;
        $this->queryParameters['metrics'] = $metrics;

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
}
