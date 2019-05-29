<?php

namespace cr\Request\V20150506;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DoPhysicalDeleteResource
 *
 * @method string getCountry()
 * @method string getHid()
 * @method string getInvoker()
 * @method string getMessage()
 * @method string getSuccess()
 * @method string getInterrupt()
 * @method string getGmtWakeup()
 * @method string getPk()
 * @method string getBid()
 * @method string getTaskExtraData()
 * @method string getTaskIdentifier()
 */
class DoPhysicalDeleteResourceRequest extends \RpcAcsRequest
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
            'cr',
            '2015-05-06',
            'DoPhysicalDeleteResource',
            'cr'
        );
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->requestParameters['Country'] = $country;
        $this->queryParameters['Country'] = $country;

        return $this;
    }

    /**
     * @param string $hid
     *
     * @return $this
     */
    public function setHid($hid)
    {
        $this->requestParameters['Hid'] = $hid;
        $this->queryParameters['Hid'] = $hid;

        return $this;
    }

    /**
     * @param string $invoker
     *
     * @return $this
     */
    public function setInvoker($invoker)
    {
        $this->requestParameters['Invoker'] = $invoker;
        $this->queryParameters['Invoker'] = $invoker;

        return $this;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->requestParameters['Message'] = $message;
        $this->queryParameters['Message'] = $message;

        return $this;
    }

    /**
     * @param string $success
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->requestParameters['Success'] = $success;
        $this->queryParameters['Success'] = $success;

        return $this;
    }

    /**
     * @param string $interrupt
     *
     * @return $this
     */
    public function setInterrupt($interrupt)
    {
        $this->requestParameters['Interrupt'] = $interrupt;
        $this->queryParameters['Interrupt'] = $interrupt;

        return $this;
    }

    /**
     * @param string $gmtWakeup
     *
     * @return $this
     */
    public function setGmtWakeup($gmtWakeup)
    {
        $this->requestParameters['GmtWakeup'] = $gmtWakeup;
        $this->queryParameters['GmtWakeup'] = $gmtWakeup;

        return $this;
    }

    /**
     * @param string $pk
     *
     * @return $this
     */
    public function setPk($pk)
    {
        $this->requestParameters['Pk'] = $pk;
        $this->queryParameters['Pk'] = $pk;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->requestParameters['Bid'] = $bid;
        $this->queryParameters['Bid'] = $bid;

        return $this;
    }

    /**
     * @param string $taskExtraData
     *
     * @return $this
     */
    public function setTaskExtraData($taskExtraData)
    {
        $this->requestParameters['TaskExtraData'] = $taskExtraData;
        $this->queryParameters['TaskExtraData'] = $taskExtraData;

        return $this;
    }

    /**
     * @param string $taskIdentifier
     *
     * @return $this
     */
    public function setTaskIdentifier($taskIdentifier)
    {
        $this->requestParameters['TaskIdentifier'] = $taskIdentifier;
        $this->queryParameters['TaskIdentifier'] = $taskIdentifier;

        return $this;
    }
}
