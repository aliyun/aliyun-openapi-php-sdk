<?php

namespace aliyuncvc\Request\V20190919;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryMeetingInfo
 *
 * @method string getMeetingUUID()
 */
class QueryMeetingInfoRequest extends \RpcAcsRequest
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
            'QueryMeetingInfo',
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
}
