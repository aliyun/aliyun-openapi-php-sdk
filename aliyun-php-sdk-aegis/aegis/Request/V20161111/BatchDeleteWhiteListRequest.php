<?php

namespace aegis\Request\V20161111;

/**
 * Request of BatchDeleteWhiteList
 *
 * @method string getRiskIdList()
 * @method string getSourceIp()
 */
class BatchDeleteWhiteListRequest extends \RpcAcsRequest
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
            'BatchDeleteWhiteList',
            'vipaegis'
        );
    }

    /**
     * @param string $riskIdList
     *
     * @return $this
     */
    public function setRiskIdList($riskIdList)
    {
        $this->requestParameters['RiskIdList'] = $riskIdList;
        $this->queryParameters['RiskIdList'] = $riskIdList;

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
}
