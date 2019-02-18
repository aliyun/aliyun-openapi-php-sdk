<?php

namespace Edas\Request\V20170801;

/**
 * Request of UpdateContainerConfiguration
 *
 * @method string getUseBodyEncoding()
 * @method string getMaxThreads()
 * @method string getURIEncoding()
 * @method string getAppId()
 * @method string getGroupId()
 * @method string getHttpPort()
 * @method string getContextPath()
 */
class UpdateContainerConfigurationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/app/container_config';

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
            'Edas',
            '2017-08-01',
            'UpdateContainerConfiguration'
        );
    }

    /**
     * @param string $useBodyEncoding
     *
     * @return $this
     */
    public function setUseBodyEncoding($useBodyEncoding)
    {
        $this->requestParameters['UseBodyEncoding'] = $useBodyEncoding;
        $this->queryParameters['UseBodyEncoding'] = $useBodyEncoding;

        return $this;
    }

    /**
     * @param string $maxThreads
     *
     * @return $this
     */
    public function setMaxThreads($maxThreads)
    {
        $this->requestParameters['MaxThreads'] = $maxThreads;
        $this->queryParameters['MaxThreads'] = $maxThreads;

        return $this;
    }

    /**
     * @param string $uRIEncoding
     *
     * @return $this
     */
    public function setURIEncoding($uRIEncoding)
    {
        $this->requestParameters['URIEncoding'] = $uRIEncoding;
        $this->queryParameters['URIEncoding'] = $uRIEncoding;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $httpPort
     *
     * @return $this
     */
    public function setHttpPort($httpPort)
    {
        $this->requestParameters['HttpPort'] = $httpPort;
        $this->queryParameters['HttpPort'] = $httpPort;

        return $this;
    }

    /**
     * @param string $contextPath
     *
     * @return $this
     */
    public function setContextPath($contextPath)
    {
        $this->requestParameters['ContextPath'] = $contextPath;
        $this->queryParameters['ContextPath'] = $contextPath;

        return $this;
    }
}
