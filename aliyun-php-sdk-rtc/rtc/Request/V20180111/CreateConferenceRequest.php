<?php

namespace rtc\Request\V20180111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateConference
 *
 * @method string getClientToken()
 * @method string getStartTime()
 * @method string getType()
 * @method string getConferenceName()
 * @method string getOwnerId()
 * @method string getAppId()
 * @method string getRemindNotice()
 */
class CreateConferenceRequest extends \RpcAcsRequest
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
            'rtc',
            '2018-01-11',
            'CreateConference',
            'rtc'
        );
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

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
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $conferenceName
     *
     * @return $this
     */
    public function setConferenceName($conferenceName)
    {
        $this->requestParameters['ConferenceName'] = $conferenceName;
        $this->queryParameters['ConferenceName'] = $conferenceName;

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
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $remindNotice
     *
     * @return $this
     */
    public function setRemindNotice($remindNotice)
    {
        $this->requestParameters['RemindNotice'] = $remindNotice;
        $this->queryParameters['RemindNotice'] = $remindNotice;

        return $this;
    }
}
