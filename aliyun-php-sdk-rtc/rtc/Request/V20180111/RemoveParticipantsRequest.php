<?php

namespace rtc\Request\V20180111;

/**
 * Request of RemoveParticipants
 *
 * @method array getParticipantIdss()
 * @method string getOwnerId()
 * @method string getConferenceId()
 * @method string getAppId()
 */
class RemoveParticipantsRequest extends \RpcAcsRequest
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
            'RemoveParticipants',
            'rtc'
        );
    }

    /**
     * @param array $participantIdss
     *
     * @return $this
     */
    public function setParticipantIdss(array $participantIdss)
    {
        $this->requestParameters['ParticipantIdss'] = $participantIdss;
        foreach ($participantIdss as $i => $iValue) {
            $this->queryParameters['ParticipantIds.' . ($i + 1)] = $iValue;
        }

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
