<?php

namespace Domain\Request\V20180129;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CheckDomain
 *
 * @method string getFeeCurrency()
 * @method string getFeePeriod()
 * @method string getDomainName()
 * @method string getFeeCommand()
 * @method string getLang()
 */
class CheckDomainRequest extends \RpcAcsRequest
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
            'Domain',
            '2018-01-29',
            'CheckDomain'
        );
    }

    /**
     * @param string $feeCurrency
     *
     * @return $this
     */
    public function setFeeCurrency($feeCurrency)
    {
        $this->requestParameters['FeeCurrency'] = $feeCurrency;
        $this->queryParameters['FeeCurrency'] = $feeCurrency;

        return $this;
    }

    /**
     * @param string $feePeriod
     *
     * @return $this
     */
    public function setFeePeriod($feePeriod)
    {
        $this->requestParameters['FeePeriod'] = $feePeriod;
        $this->queryParameters['FeePeriod'] = $feePeriod;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $feeCommand
     *
     * @return $this
     */
    public function setFeeCommand($feeCommand)
    {
        $this->requestParameters['FeeCommand'] = $feeCommand;
        $this->queryParameters['FeeCommand'] = $feeCommand;

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
