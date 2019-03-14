<?php

namespace Sas_api\Request\V20170705;

/**
 * Request of GetIpProfile
 *
 * @method string getDeviceIdMd5()
 * @method string getCarrier()
 * @method string getOs()
 * @method string getRequestUrl()
 * @method string getIp()
 * @method string getUserAgent()
 * @method string getConnectionType()
 * @method string getSensType()
 * @method string getDeviceType()
 * @method string getBusinessType()
 */
class GetIpProfileRequest extends \RpcAcsRequest
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
            'Sas-api',
            '2017-07-05',
            'GetIpProfile',
            'sas-api'
        );
    }

    /**
     * @param string $deviceIdMd5
     *
     * @return $this
     */
    public function setDeviceIdMd5($deviceIdMd5)
    {
        $this->requestParameters['DeviceIdMd5'] = $deviceIdMd5;
        $this->queryParameters['DeviceIdMd5'] = $deviceIdMd5;

        return $this;
    }

    /**
     * @param string $carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->requestParameters['Carrier'] = $carrier;
        $this->queryParameters['Carrier'] = $carrier;

        return $this;
    }

    /**
     * @param string $os
     *
     * @return $this
     */
    public function setOs($os)
    {
        $this->requestParameters['Os'] = $os;
        $this->queryParameters['Os'] = $os;

        return $this;
    }

    /**
     * @param string $requestUrl
     *
     * @return $this
     */
    public function setRequestUrl($requestUrl)
    {
        $this->requestParameters['RequestUrl'] = $requestUrl;
        $this->queryParameters['RequestUrl'] = $requestUrl;

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
        $this->queryParameters['Ip'] = $ip;

        return $this;
    }

    /**
     * @param string $userAgent
     *
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        $this->requestParameters['UserAgent'] = $userAgent;
        $this->queryParameters['UserAgent'] = $userAgent;

        return $this;
    }

    /**
     * @param string $connectionType
     *
     * @return $this
     */
    public function setConnectionType($connectionType)
    {
        $this->requestParameters['ConnectionType'] = $connectionType;
        $this->queryParameters['ConnectionType'] = $connectionType;

        return $this;
    }

    /**
     * @param string $sensType
     *
     * @return $this
     */
    public function setSensType($sensType)
    {
        $this->requestParameters['SensType'] = $sensType;
        $this->queryParameters['SensType'] = $sensType;

        return $this;
    }

    /**
     * @param string $deviceType
     *
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->requestParameters['DeviceType'] = $deviceType;
        $this->queryParameters['DeviceType'] = $deviceType;

        return $this;
    }

    /**
     * @param string $businessType
     *
     * @return $this
     */
    public function setBusinessType($businessType)
    {
        $this->requestParameters['BusinessType'] = $businessType;
        $this->queryParameters['BusinessType'] = $businessType;

        return $this;
    }
}
