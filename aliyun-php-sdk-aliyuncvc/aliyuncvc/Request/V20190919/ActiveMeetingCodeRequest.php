<?php

namespace aliyuncvc\Request\V20190919;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ActiveMeetingCode
 *
 * @method string getMeetingUUID()
 * @method string getMeetingCode()
 */
class ActiveMeetingCodeRequest extends \RpcAcsRequest
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
            'aliyuncvc',
            '2019-09-19',
            'ActiveMeetingCode',
            'aliyuncvc'
        );
    }

    /**
     * @param string $meetingUUID
     *
     * @return $this
     */
    public function setMeetingUUID($meetingUUID)
    {
        $this->requestParameters['MeetingUUID'] = $meetingUUID;
        $this->queryParameters['MeetingUUID'] = $meetingUUID;

        return $this;
    }

    /**
     * @param string $meetingCode
     *
     * @return $this
     */
    public function setMeetingCode($meetingCode)
    {
        $this->requestParameters['MeetingCode'] = $meetingCode;
        $this->queryParameters['MeetingCode'] = $meetingCode;

        return $this;
    }
}
