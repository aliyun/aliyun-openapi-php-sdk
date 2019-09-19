<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of IndexVideo
 *
 * @method string getGrabType()
 * @method string getProject()
 * @method string getExternalId()
 * @method string getStartTime()
 * @method string getRemarksB()
 * @method string getRemarksA()
 * @method string getEndTime()
 * @method string getVideoUri()
 * @method string getSaveType()
 * @method string getRemarksD()
 * @method string getRemarksC()
 * @method string getSetId()
 * @method string getInterval()
 * @method string getTgtUri()
 */
class IndexVideoRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'IndexVideo',
            'imm'
        );
    }

    /**
     * @param string $grabType
     *
     * @return $this
     */
    public function setGrabType($grabType)
    {
        $this->requestParameters['GrabType'] = $grabType;
        $this->queryParameters['GrabType'] = $grabType;

        return $this;
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $externalId
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->requestParameters['ExternalId'] = $externalId;
        $this->queryParameters['ExternalId'] = $externalId;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $remarksB
     *
     * @return $this
     */
    public function setRemarksB($remarksB)
    {
        $this->requestParameters['RemarksB'] = $remarksB;
        $this->queryParameters['RemarksB'] = $remarksB;

        return $this;
    }

    /**
     * @param string $remarksA
     *
     * @return $this
     */
    public function setRemarksA($remarksA)
    {
        $this->requestParameters['RemarksA'] = $remarksA;
        $this->queryParameters['RemarksA'] = $remarksA;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $videoUri
     *
     * @return $this
     */
    public function setVideoUri($videoUri)
    {
        $this->requestParameters['VideoUri'] = $videoUri;
        $this->queryParameters['VideoUri'] = $videoUri;

        return $this;
    }

    /**
     * @param string $saveType
     *
     * @return $this
     */
    public function setSaveType($saveType)
    {
        $this->requestParameters['SaveType'] = $saveType;
        $this->queryParameters['SaveType'] = $saveType;

        return $this;
    }

    /**
     * @param string $remarksD
     *
     * @return $this
     */
    public function setRemarksD($remarksD)
    {
        $this->requestParameters['RemarksD'] = $remarksD;
        $this->queryParameters['RemarksD'] = $remarksD;

        return $this;
    }

    /**
     * @param string $remarksC
     *
     * @return $this
     */
    public function setRemarksC($remarksC)
    {
        $this->requestParameters['RemarksC'] = $remarksC;
        $this->queryParameters['RemarksC'] = $remarksC;

        return $this;
    }

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        $this->requestParameters['SetId'] = $setId;
        $this->queryParameters['SetId'] = $setId;

        return $this;
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->requestParameters['Interval'] = $interval;
        $this->queryParameters['Interval'] = $interval;

        return $this;
    }

    /**
     * @param string $tgtUri
     *
     * @return $this
     */
    public function setTgtUri($tgtUri)
    {
        $this->requestParameters['TgtUri'] = $tgtUri;
        $this->queryParameters['TgtUri'] = $tgtUri;

        return $this;
    }
}
