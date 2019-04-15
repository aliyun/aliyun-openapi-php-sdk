<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ValidateHcWarnings
 *
 * @method string getRiskIds()
 * @method string getSourceIp()
 * @method string getUuids()
 */
class ValidateHcWarningsRequest extends \RpcAcsRequest
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
            'ValidateHcWarnings',
            'vipaegis'
        );
    }

    /**
     * @param string $riskIds
     *
     * @return $this
     */
    public function setRiskIds($riskIds)
    {
        $this->requestParameters['RiskIds'] = $riskIds;
        $this->queryParameters['RiskIds'] = $riskIds;

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
     * @param string $uuids
     *
     * @return $this
     */
    public function setUuids($uuids)
    {
        $this->requestParameters['Uuids'] = $uuids;
        $this->queryParameters['Uuids'] = $uuids;

        return $this;
    }
}
