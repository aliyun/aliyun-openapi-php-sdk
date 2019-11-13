<?php

namespace Alidns\Request\V20150109;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetMainDomainName
 *
 * @method string getInputString()
 * @method string getUserClientIp()
 * @method string getLang()
 */
class GetMainDomainNameRequest extends \RpcAcsRequest
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
            'Alidns',
            '2015-01-09',
            'GetMainDomainName',
            'alidns'
        );
    }

    /**
     * @param string $inputString
     *
     * @return $this
     */
    public function setInputString($inputString)
    {
        $this->requestParameters['InputString'] = $inputString;
        $this->queryParameters['InputString'] = $inputString;

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
}
