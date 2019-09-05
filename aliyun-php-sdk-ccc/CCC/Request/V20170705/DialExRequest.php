<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DialEx
 *
 * @method string getCallee()
 * @method string getRoutPoint()
 * @method string getCaller()
 * @method string getInstanceId()
 * @method string getProvider()
 * @method string getAnswerMode()
 */
class DialExRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'DialEx'
        );
    }

    /**
     * @param string $callee
     *
     * @return $this
     */
    public function setCallee($callee)
    {
        $this->requestParameters['Callee'] = $callee;
        $this->queryParameters['Callee'] = $callee;

        return $this;
    }

    /**
     * @param string $routPoint
     *
     * @return $this
     */
    public function setRoutPoint($routPoint)
    {
        $this->requestParameters['RoutPoint'] = $routPoint;
        $this->queryParameters['RoutPoint'] = $routPoint;

        return $this;
    }

    /**
     * @param string $caller
     *
     * @return $this
     */
    public function setCaller($caller)
    {
        $this->requestParameters['Caller'] = $caller;
        $this->queryParameters['Caller'] = $caller;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $provider
     *
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->requestParameters['Provider'] = $provider;
        $this->queryParameters['Provider'] = $provider;

        return $this;
    }

    /**
     * @param string $answerMode
     *
     * @return $this
     */
    public function setAnswerMode($answerMode)
    {
        $this->requestParameters['AnswerMode'] = $answerMode;
        $this->queryParameters['AnswerMode'] = $answerMode;

        return $this;
    }
}
