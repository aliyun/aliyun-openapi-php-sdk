<?php

namespace Ecs\Request\V20140526;

/**
 * Request of DescribeDisksFullStatus
 *
 * @method array getEventIds()
 * @method string getResourceOwnerId()
 * @method string getPageNumber()
 * @method string getEventTimeStart()
 * @method string getPageSize()
 * @method array getDiskIds()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getEventTimeEnd()
 * @method string getHealthStatus()
 * @method string getEventType()
 * @method string getStatus()
 */
class DescribeDisksFullStatusRequest extends \RpcAcsRequest
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
            'Ecs',
            '2014-05-26',
            'DescribeDisksFullStatus',
            'ecs'
        );
    }

    /**
     * @param array $eventIds
     *
     * @return $this
     */
    public function setEventIds(array $eventIds)
    {
        $this->requestParameters['EventIds'] = $eventIds;
        foreach ($eventIds as $i => $iValue) {
            $this->queryParameters['EventId.' . ($i + 1)] = $iValue;
        }

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
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $eventTimeStart
     *
     * @return $this
     */
    public function setEventTimeStart($eventTimeStart)
    {
        $this->requestParameters['EventTimeStart'] = $eventTimeStart;
        $this->queryParameters['EventTime.Start'] = $eventTimeStart;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param array $diskIds
     *
     * @return $this
     */
    public function setDiskIds(array $diskIds)
    {
        $this->requestParameters['DiskIds'] = $diskIds;
        foreach ($diskIds as $i => $iValue) {
            $this->queryParameters['DiskId.' . ($i + 1)] = $iValue;
        }

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
     * @param string $eventTimeEnd
     *
     * @return $this
     */
    public function setEventTimeEnd($eventTimeEnd)
    {
        $this->requestParameters['EventTimeEnd'] = $eventTimeEnd;
        $this->queryParameters['EventTime.End'] = $eventTimeEnd;

        return $this;
    }

    /**
     * @param string $healthStatus
     *
     * @return $this
     */
    public function setHealthStatus($healthStatus)
    {
        $this->requestParameters['HealthStatus'] = $healthStatus;
        $this->queryParameters['HealthStatus'] = $healthStatus;

        return $this;
    }

    /**
     * @param string $eventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        $this->requestParameters['EventType'] = $eventType;
        $this->queryParameters['EventType'] = $eventType;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }
}
