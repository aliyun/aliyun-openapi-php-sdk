<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateSlbAP
 *
 * @method string getSslCertId()
 * @method string getListenerPort()
 * @method string getProtocol()
 * @method string getEstablishedTimeout()
 * @method string getSlbId()
 * @method string getRealServerPort()
 * @method string getStickySession()
 * @method string getCookieTimeout()
 * @method string getName()
 * @method string getEnvId()
 */
class CreateSlbAPRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'CreateSlbAP',
            'retailcloud'
        );
    }

    /**
     * @param string $sslCertId
     *
     * @return $this
     */
    public function setSslCertId($sslCertId)
    {
        $this->requestParameters['SslCertId'] = $sslCertId;
        $this->queryParameters['SslCertId'] = $sslCertId;

        return $this;
    }

    /**
     * @param string $listenerPort
     *
     * @return $this
     */
    public function setListenerPort($listenerPort)
    {
        $this->requestParameters['ListenerPort'] = $listenerPort;
        $this->queryParameters['ListenerPort'] = $listenerPort;

        return $this;
    }

    /**
     * @param string $protocol
     *
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $this->requestParameters['Protocol'] = $protocol;
        $this->queryParameters['Protocol'] = $protocol;

        return $this;
    }

    /**
     * @param string $establishedTimeout
     *
     * @return $this
     */
    public function setEstablishedTimeout($establishedTimeout)
    {
        $this->requestParameters['EstablishedTimeout'] = $establishedTimeout;
        $this->queryParameters['EstablishedTimeout'] = $establishedTimeout;

        return $this;
    }

    /**
     * @param string $slbId
     *
     * @return $this
     */
    public function setSlbId($slbId)
    {
        $this->requestParameters['SlbId'] = $slbId;
        $this->queryParameters['SlbId'] = $slbId;

        return $this;
    }

    /**
     * @param string $realServerPort
     *
     * @return $this
     */
    public function setRealServerPort($realServerPort)
    {
        $this->requestParameters['RealServerPort'] = $realServerPort;
        $this->queryParameters['RealServerPort'] = $realServerPort;

        return $this;
    }

    /**
     * @param string $stickySession
     *
     * @return $this
     */
    public function setStickySession($stickySession)
    {
        $this->requestParameters['StickySession'] = $stickySession;
        $this->queryParameters['StickySession'] = $stickySession;

        return $this;
    }

    /**
     * @param string $cookieTimeout
     *
     * @return $this
     */
    public function setCookieTimeout($cookieTimeout)
    {
        $this->requestParameters['CookieTimeout'] = $cookieTimeout;
        $this->queryParameters['CookieTimeout'] = $cookieTimeout;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $envId
     *
     * @return $this
     */
    public function setEnvId($envId)
    {
        $this->requestParameters['EnvId'] = $envId;
        $this->queryParameters['EnvId'] = $envId;

        return $this;
    }
}
