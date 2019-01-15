<?php

namespace vod\Request\V20170321;

/**
 * Request of DescribeUserVvTopByDay
 *
 * @method string getVideoType()
 * @method string getBizdate()
 * @method string getSecurityToken()
 * @method string getOwnerId()
 */
class DescribeUserVvTopByDayRequest extends \RpcAcsRequest
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
            'DescribeUserVvTopByDay',
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
     * @param string $bizdate
     *
     * @return $this
     */
    public function setBizdate($bizdate)
    {
        $this->requestParameters['Bizdate'] = $bizdate;
        $this->queryParameters['Bizdate'] = $bizdate;

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
