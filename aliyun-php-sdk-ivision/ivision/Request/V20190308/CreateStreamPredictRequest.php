<?php

namespace ivision\Request\V20190308;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateStreamPredict
 *
 * @method string getAutoStart()
 * @method string getNotify()
 * @method string getOutput()
 * @method string getUserData()
 * @method string getShowLog()
 * @method string getStreamType()
 * @method string getStreamId()
 * @method string getOwnerId()
 * @method string getProbabilityThresholds()
 * @method string getModelIds()
 */
class CreateStreamPredictRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'ivision',
            '2019-03-08',
            'CreateStreamPredict',
            'ivision'
        );
    }

    /**
     * @param string $autoStart
     *
     * @return $this
     */
    public function setAutoStart($autoStart)
    {
        $this->requestParameters['AutoStart'] = $autoStart;
        $this->queryParameters['AutoStart'] = $autoStart;

        return $this;
    }

    /**
     * @param string $notify
     *
     * @return $this
     */
    public function setNotify($notify)
    {
        $this->requestParameters['Notify'] = $notify;
        $this->queryParameters['Notify'] = $notify;

        return $this;
    }

    /**
     * @param string $output
     *
     * @return $this
     */
    public function setOutput($output)
    {
        $this->requestParameters['Output'] = $output;
        $this->queryParameters['Output'] = $output;

        return $this;
    }

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->requestParameters['UserData'] = $userData;
        $this->queryParameters['UserData'] = $userData;

        return $this;
    }

    /**
     * @param string $showLog
     *
     * @return $this
     */
    public function setShowLog($showLog)
    {
        $this->requestParameters['ShowLog'] = $showLog;
        $this->queryParameters['ShowLog'] = $showLog;

        return $this;
    }

    /**
     * @param string $streamType
     *
     * @return $this
     */
    public function setStreamType($streamType)
    {
        $this->requestParameters['StreamType'] = $streamType;
        $this->queryParameters['StreamType'] = $streamType;

        return $this;
    }

    /**
     * @param string $streamId
     *
     * @return $this
     */
    public function setStreamId($streamId)
    {
        $this->requestParameters['StreamId'] = $streamId;
        $this->queryParameters['StreamId'] = $streamId;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $probabilityThresholds
     *
     * @return $this
     */
    public function setProbabilityThresholds($probabilityThresholds)
    {
        $this->requestParameters['ProbabilityThresholds'] = $probabilityThresholds;
        $this->queryParameters['ProbabilityThresholds'] = $probabilityThresholds;

        return $this;
    }

    /**
     * @param string $modelIds
     *
     * @return $this
     */
    public function setModelIds($modelIds)
    {
        $this->requestParameters['ModelIds'] = $modelIds;
        $this->queryParameters['ModelIds'] = $modelIds;

        return $this;
    }
}
