<?php

namespace Alidns\Request\V20150109;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of OperateBatchDomain
 *
 * @method array getDomainRecordInfos()
 * @method string getType()
 * @method string getUserClientIp()
 * @method string getLang()
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
     * @param array $domainRecordInfo
     *
     * @return $this
     */
	public function setDomainRecordInfos(array $domainRecordInfo)
	{
	    $this->requestParameters['DomainRecordInfos'] = $domainRecordInfo;
		foreach ($domainRecordInfo as $depth1 => $depth1Value) {
			$this->queryParameters['DomainRecordInfo.' . ($depth1 + 1) . '.Rr'] = $depth1Value['Rr'];
			$this->queryParameters['DomainRecordInfo.' . ($depth1 + 1) . '.NewType'] = $depth1Value['NewType'];
			$this->queryParameters['DomainRecordInfo.' . ($depth1 + 1) . '.NewValue'] = $depth1Value['NewValue'];
			$this->queryParameters['DomainRecordInfo.' . ($depth1 + 1) . '.Line'] = $depth1Value['Line'];
			$this->queryParameters['DomainRecordInfo.' . ($depth1 + 1) . '.Domain'] = $depth1Value['Domain'];
			$this->queryParameters['DomainRecordInfo.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			$this->queryParameters['DomainRecordInfo.' . ($depth1 + 1) . '.Priority'] = $depth1Value['Priority'];
			$this->queryParameters['DomainRecordInfo.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			$this->queryParameters['DomainRecordInfo.' . ($depth1 + 1) . '.Ttl'] = $depth1Value['Ttl'];
			$this->queryParameters['DomainRecordInfo.' . ($depth1 + 1) . '.NewRr'] = $depth1Value['NewRr'];
		}

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
