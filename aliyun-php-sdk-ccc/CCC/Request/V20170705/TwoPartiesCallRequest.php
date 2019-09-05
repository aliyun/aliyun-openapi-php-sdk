<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TwoPartiesCall
 *
 * @method string getCalleeCustomer()
 * @method string getCaller()
 * @method string getInstanceId()
 * @method string getCalleeAgent()
 */
class TwoPartiesCallRequest extends \RpcAcsRequest
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
            'TwoPartiesCall'
        );
    }

    /**
     * @param string $calleeCustomer
     *
     * @return $this
     */
    public function setCalleeCustomer($calleeCustomer)
    {
        $this->requestParameters['CalleeCustomer'] = $calleeCustomer;
        $this->queryParameters['CalleeCustomer'] = $calleeCustomer;

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
     * @param string $calleeAgent
     *
     * @return $this
     */
    public function setCalleeAgent($calleeAgent)
    {
        $this->requestParameters['CalleeAgent'] = $calleeAgent;
        $this->queryParameters['CalleeAgent'] = $calleeAgent;

        return $this;
    }
}
