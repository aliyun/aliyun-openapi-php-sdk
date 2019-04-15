<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ExportWarning
 *
 * @method string getStatusList()
 * @method string getRiskLevels()
 * @method string getExportType()
 * @method string getDealed()
 * @method string getTypeNames()
 * @method string getIsSummaryExport()
 * @method string getRiskName()
 * @method string getRiskIds()
 * @method string getSourceIp()
 * @method string getStrategyId()
 * @method string getLang()
 * @method string getTypeName()
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
     * @param string $exportType
     *
     * @return $this
     */
    public function setExportType($exportType)
    {
        $this->requestParameters['ExportType'] = $exportType;
        $this->queryParameters['ExportType'] = $exportType;

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

    /**
     * @param string $typeName
     *
     * @return $this
     */
    public function setTypeName($typeName)
    {
        $this->requestParameters['TypeName'] = $typeName;
        $this->queryParameters['TypeName'] = $typeName;

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
