<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteVulBatch
 *
 * @method string getBatchName()
 * @method string getSourceIp()
 * @method string getResource()
 */
class DeleteVulBatchRequest extends \RpcAcsRequest
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
            'DeleteVulBatch',
            'vipaegis'
        );
    }

    /**
     * @param string $batchName
     *
     * @return $this
     */
    public function setBatchName($batchName)
    {
        $this->requestParameters['BatchName'] = $batchName;
        $this->queryParameters['BatchName'] = $batchName;

        return $this;
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
