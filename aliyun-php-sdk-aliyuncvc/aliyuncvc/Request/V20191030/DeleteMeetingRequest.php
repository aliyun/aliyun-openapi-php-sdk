<?php

namespace aliyuncvc\Request\V20191030;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteMeeting
 *
 * @method string getMeetingUUID()
 */
class DeleteMeetingRequest extends \RpcAcsRequest
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
            '2019-10-30',
            'DeleteMeeting',
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
