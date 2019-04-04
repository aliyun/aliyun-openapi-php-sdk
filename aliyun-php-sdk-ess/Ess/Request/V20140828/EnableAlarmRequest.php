<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of EnableAlarm
 *
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getAlarmTaskId()
 */
class EnableAlarmRequest extends \RpcAcsRequest
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
            'EnableAlarm',
            'ess'
        );
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
     * @param string $alarmTaskId
     *
     * @return $this
     */
    public function setAlarmTaskId($alarmTaskId)
    {
        $this->requestParameters['AlarmTaskId'] = $alarmTaskId;
        $this->queryParameters['AlarmTaskId'] = $alarmTaskId;

        return $this;
    }
}
