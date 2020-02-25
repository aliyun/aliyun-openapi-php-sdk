<?php

namespace dms_enterprise\Request\V20181101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreatePublishGroupTask
 *
 * @method string getOrderId()
 * @method string getDbId()
 * @method string getPlanTime()
 * @method string getLogic()
 * @method string getTid()
 * @method string getPublishStrategy()
 */
class CreatePublishGroupTaskRequest extends \RpcAcsRequest
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
            'dms-enterprise',
            '2018-11-01',
            'CreatePublishGroupTask'
        );
    }

    /**
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->requestParameters['OrderId'] = $orderId;
        $this->queryParameters['OrderId'] = $orderId;

        return $this;
    }

    /**
     * @param string $dbId
     *
     * @return $this
     */
    public function setDbId($dbId)
    {
        $this->requestParameters['DbId'] = $dbId;
        $this->queryParameters['DbId'] = $dbId;

        return $this;
    }

    /**
     * @param string $planTime
     *
     * @return $this
     */
    public function setPlanTime($planTime)
    {
        $this->requestParameters['PlanTime'] = $planTime;
        $this->queryParameters['PlanTime'] = $planTime;

        return $this;
    }

    /**
     * @param string $logic
     *
     * @return $this
     */
    public function setLogic($logic)
    {
        $this->requestParameters['Logic'] = $logic;
        $this->queryParameters['Logic'] = $logic;

        return $this;
    }

    /**
     * @param string $tid
     *
     * @return $this
     */
    public function setTid($tid)
    {
        $this->requestParameters['Tid'] = $tid;
        $this->queryParameters['Tid'] = $tid;

        return $this;
    }

    /**
     * @param string $publishStrategy
     *
     * @return $this
     */
    public function setPublishStrategy($publishStrategy)
    {
        $this->requestParameters['PublishStrategy'] = $publishStrategy;
        $this->queryParameters['PublishStrategy'] = $publishStrategy;

        return $this;
    }
}
