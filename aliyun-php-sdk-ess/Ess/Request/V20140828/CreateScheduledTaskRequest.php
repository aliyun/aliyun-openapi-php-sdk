<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateScheduledTask
 *
 * @method string getLaunchTime()
 * @method string getScheduledAction()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getRecurrenceValue()
 * @method string getLaunchExpirationTime()
 * @method string getRecurrenceEndTime()
 * @method string getScheduledTaskName()
 * @method string getTaskEnabled()
 * @method string getRecurrenceType()
 */
class CreateScheduledTaskRequest extends \RpcAcsRequest
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
            'Ess',
            '2014-08-28',
            'CreateScheduledTask',
            'ess'
        );
    }

    /**
     * @param string $launchTime
     *
     * @return $this
     */
    public function setLaunchTime($launchTime)
    {
        $this->requestParameters['LaunchTime'] = $launchTime;
        $this->queryParameters['LaunchTime'] = $launchTime;

        return $this;
    }

    /**
     * @param string $scheduledAction
     *
     * @return $this
     */
    public function setScheduledAction($scheduledAction)
    {
        $this->requestParameters['ScheduledAction'] = $scheduledAction;
        $this->queryParameters['ScheduledAction'] = $scheduledAction;

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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

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
     * @param string $recurrenceValue
     *
     * @return $this
     */
    public function setRecurrenceValue($recurrenceValue)
    {
        $this->requestParameters['RecurrenceValue'] = $recurrenceValue;
        $this->queryParameters['RecurrenceValue'] = $recurrenceValue;

        return $this;
    }

    /**
     * @param string $launchExpirationTime
     *
     * @return $this
     */
    public function setLaunchExpirationTime($launchExpirationTime)
    {
        $this->requestParameters['LaunchExpirationTime'] = $launchExpirationTime;
        $this->queryParameters['LaunchExpirationTime'] = $launchExpirationTime;

        return $this;
    }

    /**
     * @param string $recurrenceEndTime
     *
     * @return $this
     */
    public function setRecurrenceEndTime($recurrenceEndTime)
    {
        $this->requestParameters['RecurrenceEndTime'] = $recurrenceEndTime;
        $this->queryParameters['RecurrenceEndTime'] = $recurrenceEndTime;

        return $this;
    }

    /**
     * @param string $scheduledTaskName
     *
     * @return $this
     */
    public function setScheduledTaskName($scheduledTaskName)
    {
        $this->requestParameters['ScheduledTaskName'] = $scheduledTaskName;
        $this->queryParameters['ScheduledTaskName'] = $scheduledTaskName;

        return $this;
    }

    /**
     * @param string $taskEnabled
     *
     * @return $this
     */
    public function setTaskEnabled($taskEnabled)
    {
        $this->requestParameters['TaskEnabled'] = $taskEnabled;
        $this->queryParameters['TaskEnabled'] = $taskEnabled;

        return $this;
    }

    /**
     * @param string $recurrenceType
     *
     * @return $this
     */
    public function setRecurrenceType($recurrenceType)
    {
        $this->requestParameters['RecurrenceType'] = $recurrenceType;
        $this->queryParameters['RecurrenceType'] = $recurrenceType;

        return $this;
    }
}
