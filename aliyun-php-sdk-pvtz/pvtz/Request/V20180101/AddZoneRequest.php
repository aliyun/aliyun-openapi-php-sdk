<?php

namespace pvtz\Request\V20180101;

/**
 * Request of AddZone
 *
 * @method string getProxyPattern()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getZoneName()
 */
class AddZoneRequest extends \RpcAcsRequest
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
            'pvtz',
            '2018-01-01',
            'AddZone',
            'pvtz'
        );
    }

    /**
     * @param string $proxyPattern
     *
     * @return $this
     */
    public function setProxyPattern($proxyPattern)
    {
        $this->requestParameters['ProxyPattern'] = $proxyPattern;
        $this->queryParameters['ProxyPattern'] = $proxyPattern;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $zoneName
     *
     * @return $this
     */
    public function setZoneName($zoneName)
    {
        $this->requestParameters['ZoneName'] = $zoneName;
        $this->queryParameters['ZoneName'] = $zoneName;

        return $this;
    }
}
