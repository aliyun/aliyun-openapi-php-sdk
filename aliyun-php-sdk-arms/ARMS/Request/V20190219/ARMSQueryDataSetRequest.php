<?php

namespace ARMS\Request\V20190219;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ARMSQueryDataSet
 *
 * @method string getDateStr()
 * @method string getMinTime()
 * @method string getReduceTail()
 * @method string getMaxTime()
 * @method array getOptionalDimss()
 * @method array getMeasuress()
 * @method string getIntervalInSec()
 * @method string getIsDrillDown()
 * @method string getHungryMode()
 * @method string getSecurityToken()
 * @method string getOrderByKey()
 * @method string getLimit()
 * @method array getRequiredDimss()
 * @method string getDatasetId()
 * @method array getDimensionss()
 */
class ARMSQueryDataSetRequest extends \RpcAcsRequest
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
            'ARMS',
            '2019-02-19',
            'ARMSQueryDataSet'
        );
    }

    /**
     * @param string $dateStr
     *
     * @return $this
     */
    public function setDateStr($dateStr)
    {
        $this->requestParameters['DateStr'] = $dateStr;
        $this->queryParameters['DateStr'] = $dateStr;

        return $this;
    }

    /**
     * @param string $minTime
     *
     * @return $this
     */
    public function setMinTime($minTime)
    {
        $this->requestParameters['MinTime'] = $minTime;
        $this->queryParameters['MinTime'] = $minTime;

        return $this;
    }

    /**
     * @param string $reduceTail
     *
     * @return $this
     */
    public function setReduceTail($reduceTail)
    {
        $this->requestParameters['ReduceTail'] = $reduceTail;
        $this->queryParameters['ReduceTail'] = $reduceTail;

        return $this;
    }

    /**
     * @param string $maxTime
     *
     * @return $this
     */
    public function setMaxTime($maxTime)
    {
        $this->requestParameters['MaxTime'] = $maxTime;
        $this->queryParameters['MaxTime'] = $maxTime;

        return $this;
    }

    /**
     * @param array $optionalDims
     *
     * @return $this
     */
    public function setOptionalDimss(array $optionalDims)
    {
        $this->requestParameters['OptionalDimss'] = $optionalDims;
        foreach ($optionalDims as $depth1 => $depth1Value) {
            $this->queryParameters['OptionalDims.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->queryParameters['OptionalDims.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->queryParameters['OptionalDims.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }

    /**
     * @param array $measures
     *
     * @return $this
     */
    public function setMeasuress(array $measures)
    {
        $this->requestParameters['Measuress'] = $measures;
        foreach ($measures as $i => $iValue) {
            $this->queryParameters['Measures.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $intervalInSec
     *
     * @return $this
     */
    public function setIntervalInSec($intervalInSec)
    {
        $this->requestParameters['IntervalInSec'] = $intervalInSec;
        $this->queryParameters['IntervalInSec'] = $intervalInSec;

        return $this;
    }

    /**
     * @param string $isDrillDown
     *
     * @return $this
     */
    public function setIsDrillDown($isDrillDown)
    {
        $this->requestParameters['IsDrillDown'] = $isDrillDown;
        $this->queryParameters['IsDrillDown'] = $isDrillDown;

        return $this;
    }

    /**
     * @param string $hungryMode
     *
     * @return $this
     */
    public function setHungryMode($hungryMode)
    {
        $this->requestParameters['HungryMode'] = $hungryMode;
        $this->queryParameters['HungryMode'] = $hungryMode;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $orderByKey
     *
     * @return $this
     */
    public function setOrderByKey($orderByKey)
    {
        $this->requestParameters['OrderByKey'] = $orderByKey;
        $this->queryParameters['OrderByKey'] = $orderByKey;

        return $this;
    }

    /**
     * @param string $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->requestParameters['Limit'] = $limit;
        $this->queryParameters['Limit'] = $limit;

        return $this;
    }

    /**
     * @param array $requiredDims
     *
     * @return $this
     */
    public function setRequiredDimss(array $requiredDims)
    {
        $this->requestParameters['RequiredDimss'] = $requiredDims;
        foreach ($requiredDims as $depth1 => $depth1Value) {
            $this->queryParameters['RequiredDims.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->queryParameters['RequiredDims.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->queryParameters['RequiredDims.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }

    /**
     * @param string $datasetId
     *
     * @return $this
     */
    public function setDatasetId($datasetId)
    {
        $this->requestParameters['DatasetId'] = $datasetId;
        $this->queryParameters['DatasetId'] = $datasetId;

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
    public function setDimensionss(array $dimensions)
    {
        $this->requestParameters['Dimensionss'] = $dimensions;
        foreach ($dimensions as $depth1 => $depth1Value) {
            $this->queryParameters['Dimensions.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->queryParameters['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->queryParameters['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}
