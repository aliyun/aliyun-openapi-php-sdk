<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetWaitingRoomConfig
 *
 * @method string getWaitUrl()
 * @method string getWaitUri()
 * @method string getMaxTimeWait()
 * @method string getDomainName()
 * @method string getAllowPct()
 * @method string getGapTime()
 * @method string getOwnerId()
 */
class SetWaitingRoomConfigRequest extends \RpcAcsRequest
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
            'Cdn',
            '2018-05-10',
            'SetWaitingRoomConfig'
        );
    }

    /**
     * @param string $waitUrl
     *
     * @return $this
     */
    public function setWaitUrl($waitUrl)
    {
        $this->requestParameters['WaitUrl'] = $waitUrl;
        $this->queryParameters['WaitUrl'] = $waitUrl;

        return $this;
    }

    /**
     * @param string $waitUri
     *
     * @return $this
     */
    public function setWaitUri($waitUri)
    {
        $this->requestParameters['WaitUri'] = $waitUri;
        $this->queryParameters['WaitUri'] = $waitUri;

        return $this;
    }

    /**
     * @param string $maxTimeWait
     *
     * @return $this
     */
    public function setMaxTimeWait($maxTimeWait)
    {
        $this->requestParameters['MaxTimeWait'] = $maxTimeWait;
        $this->queryParameters['MaxTimeWait'] = $maxTimeWait;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $allowPct
     *
     * @return $this
     */
    public function setAllowPct($allowPct)
    {
        $this->requestParameters['AllowPct'] = $allowPct;
        $this->queryParameters['AllowPct'] = $allowPct;

        return $this;
    }

    /**
     * @param string $gapTime
     *
     * @return $this
     */
    public function setGapTime($gapTime)
    {
        $this->requestParameters['GapTime'] = $gapTime;
        $this->queryParameters['GapTime'] = $gapTime;

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
