<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of IgnoreHcCheckWarnings
 *
 * @method string getReason()
 * @method string getSourceIp()
 * @method string getCheckWarningIds()
 * @method string getRiskId()
 * @method string getType()
 */
class IgnoreHcCheckWarningsRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'IgnoreHcCheckWarnings',
            'vipaegis'
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
     * @param string $checkWarningIds
     *
     * @return $this
     */
    public function setCheckWarningIds($checkWarningIds)
    {
        $this->requestParameters['CheckWarningIds'] = $checkWarningIds;
        $this->queryParameters['CheckWarningIds'] = $checkWarningIds;

        return $this;
    }

    /**
     * @param string $riskId
     *
     * @return $this
     */
    public function setRiskId($riskId)
    {
        $this->requestParameters['RiskId'] = $riskId;
        $this->queryParameters['RiskId'] = $riskId;

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
