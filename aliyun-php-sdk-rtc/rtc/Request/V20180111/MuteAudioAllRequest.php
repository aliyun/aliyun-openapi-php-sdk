<?php

namespace rtc\Request\V20180111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of MuteAudioAll
 *
 * @method string getOwnerId()
 * @method string getParticipantId()
 * @method string getConferenceId()
 * @method string getAppId()
 */
class MuteAudioAllRequest extends \RpcAcsRequest
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
            'MuteAudioAll',
            'rtc'
        );
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
     * @param string $participantId
     *
     * @return $this
     */
    public function setParticipantId($participantId)
    {
        $this->requestParameters['ParticipantId'] = $participantId;
        $this->queryParameters['ParticipantId'] = $participantId;

        return $this;
    }

    /**
     * @param string $conferenceId
     *
     * @return $this
     */
    public function setConferenceId($conferenceId)
    {
        $this->requestParameters['ConferenceId'] = $conferenceId;
        $this->queryParameters['ConferenceId'] = $conferenceId;

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
}
