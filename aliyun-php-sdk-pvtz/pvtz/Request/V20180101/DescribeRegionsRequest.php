<?php

namespace pvtz\Request\V20180101;

/**
 * Request of DescribeRegions
 *
 * @method string getUserClientIp()
 * @method string getAcceptLanguage()
 * @method string getLang()
 */
class DescribeRegionsRequest extends \RpcAcsRequest
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
            'DescribeRegions',
            'pvtz'
        );
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
     * @param string $acceptLanguage
     *
     * @return $this
     */
    public function setAcceptLanguage($acceptLanguage)
    {
        $this->requestParameters['AcceptLanguage'] = $acceptLanguage;
        $this->queryParameters['AcceptLanguage'] = $acceptLanguage;

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
}
