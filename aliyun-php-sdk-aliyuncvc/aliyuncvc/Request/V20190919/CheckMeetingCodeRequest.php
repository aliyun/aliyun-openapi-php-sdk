<?php

namespace aliyuncvc\Request\V20190919;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CheckMeetingCode
 *
 * @method string getMeetingCode()
 * @method string getUserId()
 */
class CheckMeetingCodeRequest extends \RpcAcsRequest
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
            'CheckMeetingCode',
            'aliyuncvc'
        );
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

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->requestParameters['UserId'] = $userId;
        $this->queryParameters['UserId'] = $userId;

        return $this;
    }
}
