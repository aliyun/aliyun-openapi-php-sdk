<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifySlbAP
 *
 * @method string getSslCertId()
 * @method string getEstablishedTimeout()
 * @method string getRealServerPort()
 * @method string getStickySession()
 * @method string getCookieTimeout()
 * @method string getName()
 * @method string getSlbAPId()
 */
class ModifySlbAPRequest extends \RpcAcsRequest
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
            'ModifySlbAP',
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
     * @param string $slbAPId
     *
     * @return $this
     */
    public function setSlbAPId($slbAPId)
    {
        $this->requestParameters['SlbAPId'] = $slbAPId;
        $this->queryParameters['SlbAPId'] = $slbAPId;

        return $this;
    }
}
