<?php

namespace CS\Request\V20151215;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteClusterNode
 *
 * @method string getreleaseInstance()
 * @method string getIp()
 * @method string getforce()
 * @method string getClusterId()
 */
class DeleteClusterNodeRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/clusters/[ClusterId]/ip/[Ip]';

    /**
     * @var string
     */
    protected $method = 'DELETE';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'CS',
            '2015-12-15',
            'DeleteClusterNode'
        );
    }

    /**
     * @param string $releaseInstance
     *
     * @return $this
     */
    public function setreleaseInstance($releaseInstance)
    {
        $this->requestParameters['releaseInstance'] = $releaseInstance;
        $this->queryParameters['releaseInstance'] = $releaseInstance;

        return $this;
    }

    /**
     * @param string $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->requestParameters['Ip'] = $ip;
        $this->pathParameters['Ip'] = $ip;

        return $this;
    }

    /**
     * @param string $force
     *
     * @return $this
     */
    public function setforce($force)
    {
        $this->requestParameters['force'] = $force;
        $this->queryParameters['force'] = $force;

        return $this;
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
}
