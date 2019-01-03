<?php

namespace aegis\Request\V20161111;

/**
 * Request of OperateWarning
 *
 * @method string getReason()
 * @method string getSourceIp()
 * @method string getOperateType()
 * @method string getRiskWarningIds()
 */
class OperateWarningRequest extends \RpcAcsRequest
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
            'OperateWarning',
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
     * @param string $operateType
     *
     * @return $this
     */
    public function setOperateType($operateType)
    {
        $this->requestParameters['OperateType'] = $operateType;
        $this->queryParameters['OperateType'] = $operateType;

        return $this;
    }

    /**
     * @param string $riskWarningIds
     *
     * @return $this
     */
    public function setRiskWarningIds($riskWarningIds)
    {
        $this->requestParameters['RiskWarningIds'] = $riskWarningIds;
        $this->queryParameters['RiskWarningIds'] = $riskWarningIds;

        return $this;
    }
}
