<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeVulMachineList
 *
 * @method string getSourceIp()
 * @method string getEndTs()
 * @method string getStartTs()
 * @method string getUuids()
 */
class DescribeVulMachineListRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'DescribeVulMachineList',
            'vipaegis'
        );
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $endTs
     *
     * @return $this
     */
    public function setEndTs($endTs)
    {
        $this->requestParameters['EndTs'] = $endTs;
        $this->queryParameters['EndTs'] = $endTs;

        return $this;
    }

    /**
     * @param string $startTs
     *
     * @return $this
     */
    public function setStartTs($startTs)
    {
        $this->requestParameters['StartTs'] = $startTs;
        $this->queryParameters['StartTs'] = $startTs;

        return $this;
    }

    /**
     * @param string $uuids
     *
     * @return $this
     */
    public function setUuids($uuids)
    {
        $this->requestParameters['Uuids'] = $uuids;
        $this->queryParameters['Uuids'] = $uuids;

        return $this;
    }
}
