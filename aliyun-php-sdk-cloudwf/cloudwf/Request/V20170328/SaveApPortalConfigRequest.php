<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveApPortalConfig
 *
 * @method string getAuthKey()
 * @method string getPortalUrl()
 * @method string getPortalStatus()
 * @method string getWhitelist()
 * @method string getCheckUrl()
 * @method string getApConfigId()
 * @method string getAuthSecret()
 * @method string getWebAuthUrl()
 * @method string getNetwork()
 */
class SaveApPortalConfigRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'SaveApPortalConfig',
            'cloudwf'
        );
    }

    /**
     * @param string $authKey
     *
     * @return $this
     */
    public function setAuthKey($authKey)
    {
        $this->requestParameters['AuthKey'] = $authKey;
        $this->queryParameters['AuthKey'] = $authKey;

        return $this;
    }

    /**
     * @param string $portalUrl
     *
     * @return $this
     */
    public function setPortalUrl($portalUrl)
    {
        $this->requestParameters['PortalUrl'] = $portalUrl;
        $this->queryParameters['PortalUrl'] = $portalUrl;

        return $this;
    }

    /**
     * @param string $portalStatus
     *
     * @return $this
     */
    public function setPortalStatus($portalStatus)
    {
        $this->requestParameters['PortalStatus'] = $portalStatus;
        $this->queryParameters['PortalStatus'] = $portalStatus;

        return $this;
    }

    /**
     * @param string $whitelist
     *
     * @return $this
     */
    public function setWhitelist($whitelist)
    {
        $this->requestParameters['Whitelist'] = $whitelist;
        $this->queryParameters['Whitelist'] = $whitelist;

        return $this;
    }

    /**
     * @param string $checkUrl
     *
     * @return $this
     */
    public function setCheckUrl($checkUrl)
    {
        $this->requestParameters['CheckUrl'] = $checkUrl;
        $this->queryParameters['CheckUrl'] = $checkUrl;

        return $this;
    }

    /**
     * @param string $apConfigId
     *
     * @return $this
     */
    public function setApConfigId($apConfigId)
    {
        $this->requestParameters['ApConfigId'] = $apConfigId;
        $this->queryParameters['ApConfigId'] = $apConfigId;

        return $this;
    }

    /**
     * @param string $authSecret
     *
     * @return $this
     */
    public function setAuthSecret($authSecret)
    {
        $this->requestParameters['AuthSecret'] = $authSecret;
        $this->queryParameters['AuthSecret'] = $authSecret;

        return $this;
    }

    /**
     * @param string $webAuthUrl
     *
     * @return $this
     */
    public function setWebAuthUrl($webAuthUrl)
    {
        $this->requestParameters['WebAuthUrl'] = $webAuthUrl;
        $this->queryParameters['WebAuthUrl'] = $webAuthUrl;

        return $this;
    }

    /**
     * @param string $network
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->requestParameters['Network'] = $network;
        $this->queryParameters['Network'] = $network;

        return $this;
    }
}
