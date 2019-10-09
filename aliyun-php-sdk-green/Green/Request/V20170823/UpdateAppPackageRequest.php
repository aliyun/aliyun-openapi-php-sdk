<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateAppPackage
 *
 * @method string getDebug()
 * @method string getPlatform()
 * @method string getSourceIp()
 * @method string getPackageUrl()
 * @method string getId()
 * @method string getLang()
 */
class UpdateAppPackageRequest extends \RpcAcsRequest
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
            'Green',
            '2017-08-23',
            'UpdateAppPackage',
            'green'
        );
    }

    /**
     * @param string $debug
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->requestParameters['Debug'] = $debug;
        $this->queryParameters['Debug'] = $debug;

        return $this;
    }

    /**
     * @param string $platform
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->requestParameters['Platform'] = $platform;
        $this->queryParameters['Platform'] = $platform;

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
     * @param string $packageUrl
     *
     * @return $this
     */
    public function setPackageUrl($packageUrl)
    {
        $this->requestParameters['PackageUrl'] = $packageUrl;
        $this->queryParameters['PackageUrl'] = $packageUrl;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

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
