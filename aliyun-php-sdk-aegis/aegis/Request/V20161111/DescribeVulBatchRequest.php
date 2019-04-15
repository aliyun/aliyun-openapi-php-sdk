<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeVulBatch
 *
 * @method string getSourceIp()
 * @method string getResource()
 */
class DescribeVulBatchRequest extends \RpcAcsRequest
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
            'DescribeVulBatch',
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
     * @param string $resource
     *
     * @return $this
     */
    public function setResource($resource)
    {
        $this->requestParameters['Resource'] = $resource;
        $this->queryParameters['Resource'] = $resource;

        return $this;
    }
}
