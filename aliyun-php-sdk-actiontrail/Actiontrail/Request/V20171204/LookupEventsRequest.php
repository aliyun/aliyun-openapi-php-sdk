<?php

namespace Actiontrail\Request\V20171204;

/**
 * Request of LookupEvents
 *
 * @method string getRequest()
 * @method string getEventAccessKeyId()
 * @method string getEndTime()
 * @method string getEventRW()
 * @method string getStartTime()
 * @method string getResourceType()
 * @method string getEventName()
 * @method string getNextToken()
 * @method string getMaxResults()
 * @method string getEventType()
 * @method string getServiceName()
 * @method string getResourceName()
 * @method string getEvent()
 * @method string getUser()
 */
class LookupEventsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Actiontrail',
            '2017-12-04',
            'LookupEvents',
            'actiontrail'
        );
    }

    /**
     * @param string $request
     *
     * @return $this
     */
    public function setRequest($request)
    {
        $this->requestParameters['Request'] = $request;
        $this->queryParameters['Request'] = $request;

        return $this;
    }

    /**
     * @param string $eventAccessKeyId
     *
     * @return $this
     */
    public function setEventAccessKeyId($eventAccessKeyId)
    {
        $this->requestParameters['EventAccessKeyId'] = $eventAccessKeyId;
        $this->queryParameters['EventAccessKeyId'] = $eventAccessKeyId;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $eventRW
     *
     * @return $this
     */
    public function setEventRW($eventRW)
    {
        $this->requestParameters['EventRW'] = $eventRW;
        $this->queryParameters['EventRW'] = $eventRW;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

        return $this;
    }

    /**
     * @param string $eventName
     *
     * @return $this
     */
    public function setEventName($eventName)
    {
        $this->requestParameters['EventName'] = $eventName;
        $this->queryParameters['EventName'] = $eventName;

        return $this;
    }

    /**
     * @param string $nextToken
     *
     * @return $this
     */
    public function setNextToken($nextToken)
    {
        $this->requestParameters['NextToken'] = $nextToken;
        $this->queryParameters['NextToken'] = $nextToken;

        return $this;
    }

    /**
     * @param string $maxResults
     *
     * @return $this
     */
    public function setMaxResults($maxResults)
    {
        $this->requestParameters['MaxResults'] = $maxResults;
        $this->queryParameters['MaxResults'] = $maxResults;

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
     * @param string $serviceName
     *
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->requestParameters['ServiceName'] = $serviceName;
        $this->queryParameters['ServiceName'] = $serviceName;

        return $this;
    }

    /**
     * @param string $resourceName
     *
     * @return $this
     */
    public function setResourceName($resourceName)
    {
        $this->requestParameters['ResourceName'] = $resourceName;
        $this->queryParameters['ResourceName'] = $resourceName;

        return $this;
    }

    /**
     * @param string $event
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->requestParameters['Event'] = $event;
        $this->queryParameters['Event'] = $event;

        return $this;
    }

    /**
     * @param string $user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->requestParameters['User'] = $user;
        $this->queryParameters['User'] = $user;

        return $this;
    }
}
