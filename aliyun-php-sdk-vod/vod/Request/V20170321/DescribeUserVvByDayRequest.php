<?php

namespace vod\Request\V20170321;

/**
 * Request of DescribeUserVvByDay
 *
 * @method string getVideoType()
 * @method string getSecurityToken()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 */
class DescribeUserVvByDayRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'DescribeUserVvByDay',
            'vod'
        );
    }

    /**
     * @param string $videoType
     *
     * @return $this
     */
    public function setVideoType($videoType)
    {
        $this->requestParameters['VideoType'] = $videoType;
        $this->queryParameters['VideoType'] = $videoType;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

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
}
