<?php

namespace Domain\Request\V20180129;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveSingleTaskForModifyingDSRecord
 *
 * @method string getKeyTag()
 * @method string getDomainName()
 * @method string getUserClientIp()
 * @method string getDigestType()
 * @method string getDigest()
 * @method string getLang()
 * @method string getAlgorithm()
 */
class SaveSingleTaskForModifyingDSRecordRequest extends \RpcAcsRequest
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
            'SaveSingleTaskForModifyingDSRecord'
        );
    }

    /**
     * @param string $keyTag
     *
     * @return $this
     */
    public function setKeyTag($keyTag)
    {
        $this->requestParameters['KeyTag'] = $keyTag;
        $this->queryParameters['KeyTag'] = $keyTag;

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
     * @param string $digestType
     *
     * @return $this
     */
    public function setDigestType($digestType)
    {
        $this->requestParameters['DigestType'] = $digestType;
        $this->queryParameters['DigestType'] = $digestType;

        return $this;
    }

    /**
     * @param string $digest
     *
     * @return $this
     */
    public function setDigest($digest)
    {
        $this->requestParameters['Digest'] = $digest;
        $this->queryParameters['Digest'] = $digest;

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
     * @param string $algorithm
     *
     * @return $this
     */
    public function setAlgorithm($algorithm)
    {
        $this->requestParameters['Algorithm'] = $algorithm;
        $this->queryParameters['Algorithm'] = $algorithm;

        return $this;
    }
}
