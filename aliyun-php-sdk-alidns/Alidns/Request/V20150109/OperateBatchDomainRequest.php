<?php

namespace Alidns\Request\V20150109;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of OperateBatchDomain
 *
 * @method string getUserClientIp()
 * @method array getDomainRecordInfos()
 * @method string getLang()
 * @method string getType()
 */
class OperateBatchDomainRequest extends \RpcAcsRequest
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
            'OperateBatchDomain',
            'alidns'
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
     * @param array $value
     *
     * @return $this
     */
    public function setDomainRecordInfos(array $value)
    {
        $this->requestParameters['DomainRecordInfos'] = $value;
        foreach ($value as $i => $iValue) {
            $this->queryParameters['DomainRecordInfo.' . ($i + 1) . '.Rr'] = $value[$i]['Rr'];
            $this->queryParameters['DomainRecordInfo.' . ($i + 1) . '.Line'] = $value[$i]['Line'];
            $this->queryParameters['DomainRecordInfo.' . ($i + 1) . '.Domain'] = $value[$i]['Domain'];
            $this->queryParameters['DomainRecordInfo.' . ($i + 1) . '.Type'] = $value[$i]['Type'];
            $this->queryParameters['DomainRecordInfo.' . ($i + 1) . '.Priority'] = $value[$i]['Priority'];
            $this->queryParameters['DomainRecordInfo.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->queryParameters['DomainRecordInfo.' . ($i + 1) . '.Ttl'] = $value[$i]['Ttl'];
        }

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
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }
}
