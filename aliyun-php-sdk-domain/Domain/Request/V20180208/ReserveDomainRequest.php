<?php

namespace Domain\Request\V20180208;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ReserveDomain
 *
 * @method array getChannelss()
 * @method string getDomainName()
 */
class ReserveDomainRequest extends \RpcAcsRequest
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
            'Domain',
            '2018-02-08',
            'ReserveDomain'
        );
    }

    /**
     * @param array $channels
     *
     * @return $this
     */
    public function setChannelss(array $channels)
    {
        $this->requestParameters['Channelss'] = $channels;
        foreach ($channels as $i => $iValue) {
            $this->queryParameters['Channels.' . ($i + 1)] = $iValue;
        }

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
}
