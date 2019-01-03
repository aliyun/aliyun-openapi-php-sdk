<?php

namespace aegis\Request\V20161111;

/**
 * Request of ExportWarning
 *
 * @method string getTypeNames()
 * @method string getIsSummaryExport()
 * @method string getRiskName()
 * @method string getStatusList()
 * @method string getSourceIp()
 * @method string getRiskLevels()
 * @method string getDealed()
 * @method string getStrategyId()
 * @method string getSubTypeNames()
 * @method string getUuids()
 */
class ExportWarningRequest extends \RpcAcsRequest
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
            'ExportWarning',
            'vipaegis'
        );
    }

    /**
     * @param string $typeNames
     *
     * @return $this
     */
    public function setTypeNames($typeNames)
    {
        $this->requestParameters['TypeNames'] = $typeNames;
        $this->queryParameters['TypeNames'] = $typeNames;

        return $this;
    }

    /**
     * @param string $isSummaryExport
     *
     * @return $this
     */
    public function setIsSummaryExport($isSummaryExport)
    {
        $this->requestParameters['IsSummaryExport'] = $isSummaryExport;
        $this->queryParameters['IsSummaryExport'] = $isSummaryExport;

        return $this;
    }

    /**
     * @param string $riskName
     *
     * @return $this
     */
    public function setRiskName($riskName)
    {
        $this->requestParameters['RiskName'] = $riskName;
        $this->queryParameters['RiskName'] = $riskName;

        return $this;
    }

    /**
     * @param string $statusList
     *
     * @return $this
     */
    public function setStatusList($statusList)
    {
        $this->requestParameters['StatusList'] = $statusList;
        $this->queryParameters['StatusList'] = $statusList;

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
     * @param string $riskLevels
     *
     * @return $this
     */
    public function setRiskLevels($riskLevels)
    {
        $this->requestParameters['RiskLevels'] = $riskLevels;
        $this->queryParameters['RiskLevels'] = $riskLevels;

        return $this;
    }

    /**
     * @param string $dealed
     *
     * @return $this
     */
    public function setDealed($dealed)
    {
        $this->requestParameters['Dealed'] = $dealed;
        $this->queryParameters['Dealed'] = $dealed;

        return $this;
    }

    /**
     * @param string $strategyId
     *
     * @return $this
     */
    public function setStrategyId($strategyId)
    {
        $this->requestParameters['StrategyId'] = $strategyId;
        $this->queryParameters['StrategyId'] = $strategyId;

        return $this;
    }

    /**
     * @param string $subTypeNames
     *
     * @return $this
     */
    public function setSubTypeNames($subTypeNames)
    {
        $this->requestParameters['SubTypeNames'] = $subTypeNames;
        $this->queryParameters['SubTypeNames'] = $subTypeNames;

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
