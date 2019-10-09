<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateAuditSetting
 *
 * @method string getSeed()
 * @method string getAuditRange()
 * @method string getSourceIp()
 * @method string getCallback()
 */
class UpdateAuditSettingRequest extends \RpcAcsRequest
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
            'UpdateAuditSetting',
            'green'
        );
    }

    /**
     * @param string $seed
     *
     * @return $this
     */
    public function setSeed($seed)
    {
        $this->requestParameters['Seed'] = $seed;
        $this->queryParameters['Seed'] = $seed;

        return $this;
    }

    /**
     * @param string $auditRange
     *
     * @return $this
     */
    public function setAuditRange($auditRange)
    {
        $this->requestParameters['AuditRange'] = $auditRange;
        $this->queryParameters['AuditRange'] = $auditRange;

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
     * @param string $callback
     *
     * @return $this
     */
    public function setCallback($callback)
    {
        $this->requestParameters['Callback'] = $callback;
        $this->queryParameters['Callback'] = $callback;

        return $this;
    }
}
