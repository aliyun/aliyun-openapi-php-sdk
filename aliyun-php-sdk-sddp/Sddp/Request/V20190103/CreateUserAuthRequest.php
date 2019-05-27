<?php

namespace Sddp\Request\V20190103;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateUserAuth
 *
 * @method string getAccountId()
 * @method string getSourceIp()
 * @method string getAccessKey()
 * @method string getAccessKeySecret()
 * @method string getLang()
 */
class CreateUserAuthRequest extends \RpcAcsRequest
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
            'Sddp',
            '2019-01-03',
            'CreateUserAuth',
            'sddp'
        );
    }

    /**
     * @param string $accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->requestParameters['AccountId'] = $accountId;
        $this->queryParameters['AccountId'] = $accountId;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $accessKey
     *
     * @return $this
     */
    public function setAccessKey($accessKey)
    {
        $this->requestParameters['AccessKey'] = $accessKey;
        $this->queryParameters['AccessKey'] = $accessKey;

        return $this;
    }

    /**
     * @param string $accessKeySecret
     *
     * @return $this
     */
    public function setAccessKeySecret($accessKeySecret)
    {
        $this->requestParameters['AccessKeySecret'] = $accessKeySecret;
        $this->queryParameters['AccessKeySecret'] = $accessKeySecret;

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
