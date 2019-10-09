<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateOssCallbackSetting
 *
 * @method string getScanCallbackSuggestions()
 * @method string getSourceIp()
 * @method string getCallbackSeed()
 * @method string getServiceModules()
 * @method string getAuditCallback()
 * @method string getScanCallback()
 * @method string getCallbackUrl()
 */
class UpdateOssCallbackSettingRequest extends \RpcAcsRequest
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
            'UpdateOssCallbackSetting',
            'green'
        );
    }

    /**
     * @param string $scanCallbackSuggestions
     *
     * @return $this
     */
    public function setScanCallbackSuggestions($scanCallbackSuggestions)
    {
        $this->requestParameters['ScanCallbackSuggestions'] = $scanCallbackSuggestions;
        $this->queryParameters['ScanCallbackSuggestions'] = $scanCallbackSuggestions;

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
     * @param string $callbackSeed
     *
     * @return $this
     */
    public function setCallbackSeed($callbackSeed)
    {
        $this->requestParameters['CallbackSeed'] = $callbackSeed;
        $this->queryParameters['CallbackSeed'] = $callbackSeed;

        return $this;
    }

    /**
     * @param string $serviceModules
     *
     * @return $this
     */
    public function setServiceModules($serviceModules)
    {
        $this->requestParameters['ServiceModules'] = $serviceModules;
        $this->queryParameters['ServiceModules'] = $serviceModules;

        return $this;
    }

    /**
     * @param string $auditCallback
     *
     * @return $this
     */
    public function setAuditCallback($auditCallback)
    {
        $this->requestParameters['AuditCallback'] = $auditCallback;
        $this->queryParameters['AuditCallback'] = $auditCallback;

        return $this;
    }

    /**
     * @param string $scanCallback
     *
     * @return $this
     */
    public function setScanCallback($scanCallback)
    {
        $this->requestParameters['ScanCallback'] = $scanCallback;
        $this->queryParameters['ScanCallback'] = $scanCallback;

        return $this;
    }

    /**
     * @param string $callbackUrl
     *
     * @return $this
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->requestParameters['CallbackUrl'] = $callbackUrl;
        $this->queryParameters['CallbackUrl'] = $callbackUrl;

        return $this;
    }
}
