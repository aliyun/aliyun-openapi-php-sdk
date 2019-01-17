<?php

namespace Ecs\Request\V20140526;

/**
 * Request of DescribeInstancesFullStatus
 *
 * @method array getEventIds()
 * @method string getResourceOwnerId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getEventPublishTimeEnd()
 * @method array getInstanceEventTypes()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getNotBeforeStart()
 * @method string getOwnerId()
 * @method string getEventPublishTimeStart()
 * @method array getInstanceIds()
 * @method string getNotBeforeEnd()
 * @method string getHealthStatus()
 * @method string getEventType()
 * @method string getStatus()
 */
class DescribeInstancesFullStatusRequest extends \RpcAcsRequest
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
            'DescribeInstancesFullStatus',
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
     * @param string $eventPublishTimeEnd
     *
     * @return $this
     */
    public function setEventPublishTimeEnd($eventPublishTimeEnd)
    {
        $this->requestParameters['EventPublishTimeEnd'] = $eventPublishTimeEnd;
        $this->queryParameters['EventPublishTime.End'] = $eventPublishTimeEnd;

        return $this;
    }

    /**
     * @param array $instanceEventTypes
     *
     * @return $this
     */
    public function setInstanceEventTypes(array $instanceEventTypes)
    {
        $this->requestParameters['InstanceEventTypes'] = $instanceEventTypes;
        foreach ($instanceEventTypes as $i => $iValue) {
            $this->queryParameters['InstanceEventType.' . ($i + 1)] = $iValue;
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
     * @param string $notBeforeStart
     *
     * @return $this
     */
    public function setNotBeforeStart($notBeforeStart)
    {
        $this->requestParameters['NotBeforeStart'] = $notBeforeStart;
        $this->queryParameters['NotBefore.Start'] = $notBeforeStart;

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
     * @param string $eventPublishTimeStart
     *
     * @return $this
     */
    public function setEventPublishTimeStart($eventPublishTimeStart)
    {
        $this->requestParameters['EventPublishTimeStart'] = $eventPublishTimeStart;
        $this->queryParameters['EventPublishTime.Start'] = $eventPublishTimeStart;

        return $this;
    }

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
    public function setInstanceIds(array $instanceIds)
    {
        $this->requestParameters['InstanceIds'] = $instanceIds;
        foreach ($instanceIds as $i => $iValue) {
            $this->queryParameters['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $notBeforeEnd
     *
     * @return $this
     */
    public function setNotBeforeEnd($notBeforeEnd)
    {
        $this->requestParameters['NotBeforeEnd'] = $notBeforeEnd;
        $this->queryParameters['NotBefore.End'] = $notBeforeEnd;

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
