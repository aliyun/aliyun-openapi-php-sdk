<?php

namespace CS\Request\V20151215;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeEdgeClusterAttachScripts
 *
 * @method string getClusterId()
 * @method string getNamePrefix()
 */
class DescribeEdgeClusterAttachScriptsRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/clusters/[ClusterId]/attachscript';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'CS',
            '2015-12-15',
            'DescribeEdgeClusterAttachScripts'
        );
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->pathParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $namePrefix
     *
     * @return $this
     */
    public function setNamePrefix($namePrefix)
    {
        $this->requestParameters['NamePrefix'] = $namePrefix;
        $this->queryParameters['NamePrefix'] = $namePrefix;

        return $this;
    }
}
