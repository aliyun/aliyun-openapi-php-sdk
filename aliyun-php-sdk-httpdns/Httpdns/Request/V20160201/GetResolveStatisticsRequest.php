<?php

namespace Httpdns\Request\V20160201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetResolveStatistics
 *
 * @method string getGranularity()
 * @method string getProtocolName()
 * @method string getDomainName()
 * @method string getTimeSpan()
 */
class GetResolveStatisticsRequest extends \RpcAcsRequest
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
            'Httpdns',
            '2016-02-01',
            'GetResolveStatistics',
            'httpdns'
        );
    }

    /**
     * @param string $granularity
     *
     * @return $this
     */
    public function setGranularity($granularity)
    {
        $this->requestParameters['Granularity'] = $granularity;
        $this->queryParameters['Granularity'] = $granularity;

        return $this;
    }

    /**
     * @param string $protocolName
     *
     * @return $this
     */
    public function setProtocolName($protocolName)
    {
        $this->requestParameters['ProtocolName'] = $protocolName;
        $this->queryParameters['ProtocolName'] = $protocolName;

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
     * @param string $timeSpan
     *
     * @return $this
     */
    public function setTimeSpan($timeSpan)
    {
        $this->requestParameters['TimeSpan'] = $timeSpan;
        $this->queryParameters['TimeSpan'] = $timeSpan;

        return $this;
    }
}
