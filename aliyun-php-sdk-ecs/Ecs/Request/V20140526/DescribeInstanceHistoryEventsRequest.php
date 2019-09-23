<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeInstanceHistoryEvents
 *
 * @method array getEventIds()
 * @method string getResourceOwnerId()
 * @method string getEventCycleStatus()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method array getInstanceEventCycleStatuss()
 * @method string getEventPublishTimeEnd()
 * @method array getInstanceEventTypes()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getNotBeforeStart()
 * @method string getOwnerId()
 * @method string getEventPublishTimeStart()
 * @method string getInstanceId()
 * @method string getNotBeforeEnd()
 * @method string getEventType()
 */
class DescribeInstanceHistoryEventsRequest extends \RpcAcsRequest
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
            'DescribeInstanceHistoryEvents',
            'ecs'
        );
    }

    /**
     * @param array $eventId
     *
     * @return $this
     */
	public function setEventIds(array $eventId)
	{
	    $this->requestParameters['EventIds'] = $eventId;
		foreach ($eventId as $i => $iValue) {
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
     * @param string $eventCycleStatus
     *
     * @return $this
     */
    public function setEventCycleStatus($eventCycleStatus)
    {
        $this->requestParameters['EventCycleStatus'] = $eventCycleStatus;
        $this->queryParameters['EventCycleStatus'] = $eventCycleStatus;

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
     * @param array $instanceEventCycleStatus
     *
     * @return $this
     */
	public function setInstanceEventCycleStatuss(array $instanceEventCycleStatus)
	{
	    $this->requestParameters['InstanceEventCycleStatuss'] = $instanceEventCycleStatus;
		foreach ($instanceEventCycleStatus as $i => $iValue) {
			$this->queryParameters['InstanceEventCycleStatus.' . ($i + 1)] = $iValue;
		}

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
     * @param array $instanceEventType
     *
     * @return $this
     */
	public function setInstanceEventTypes(array $instanceEventType)
	{
	    $this->requestParameters['InstanceEventTypes'] = $instanceEventType;
		foreach ($instanceEventType as $i => $iValue) {
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
}
