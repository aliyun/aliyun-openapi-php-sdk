<?php

namespace Sas\Request\V20181203;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyCreateVulWhitelist
 *
 * @method string getReason()
 * @method string getSourceIp()
 * @method string getWhitelist()
 */
class ModifyCreateVulWhitelistRequest extends \RpcAcsRequest
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
            'Sas',
            '2018-12-03',
            'ModifyCreateVulWhitelist',
            'sas'
        );
    }

    /**
     * @param string $reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->requestParameters['Reason'] = $reason;
        $this->queryParameters['Reason'] = $reason;

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
     * @param string $whitelist
     *
     * @return $this
     */
    public function setWhitelist($whitelist)
    {
        $this->requestParameters['Whitelist'] = $whitelist;
        $this->queryParameters['Whitelist'] = $whitelist;

        return $this;
    }
}
