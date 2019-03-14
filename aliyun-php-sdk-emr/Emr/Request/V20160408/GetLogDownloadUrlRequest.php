<?php

namespace Emr\Request\V20160408;

/**
 * Request of GetLogDownloadUrl
 *
 * @method string getResourceOwnerId()
 * @method string getHostName()
 * @method string getLogstoreName()
 * @method string getClusterId()
 * @method string getLogFileName()
 */
class GetLogDownloadUrlRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'GetLogDownloadUrl',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        $this->requestParameters['HostName'] = $hostName;
        $this->queryParameters['HostName'] = $hostName;

        return $this;
    }

    /**
     * @param string $logstoreName
     *
     * @return $this
     */
    public function setLogstoreName($logstoreName)
    {
        $this->requestParameters['LogstoreName'] = $logstoreName;
        $this->queryParameters['LogstoreName'] = $logstoreName;

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
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $logFileName
     *
     * @return $this
     */
    public function setLogFileName($logFileName)
    {
        $this->requestParameters['LogFileName'] = $logFileName;
        $this->queryParameters['LogFileName'] = $logFileName;

        return $this;
    }
}
