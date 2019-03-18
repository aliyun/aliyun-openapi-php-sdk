<?php

namespace ARMS4FINANCE\Request\V20171130;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ARMSQueryDataSet
 *
 * @method array getMeasuress()
 * @method string getIntervalInSec()
 * @method string getDateStr()
 * @method string getIsDrillDown()
 * @method string getMinTime()
 * @method string getDatasetId()
 * @method string getMaxTime()
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
            'ARMS4FINANCE',
            '2017-11-30',
            'ARMSQueryDataSet',
            'arms4finance'
        );
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function setMeasuress(array $value)
    {
        $this->requestParameters['Measuress'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function setDimensionss(array $value)
    {
        $this->requestParameters['Dimensionss'] = $value;
        foreach ($value as $i => $iValue) {
            $this->queryParameters['Dimensions.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->queryParameters['Dimensions.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}
