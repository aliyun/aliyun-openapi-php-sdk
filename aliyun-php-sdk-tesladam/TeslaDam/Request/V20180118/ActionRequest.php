<?php

namespace TeslaDam\Request\V20180118;

/**
 * Request of Action
 *
 * @method string getOrderId()
 * @method string getStepCode()
 */
class ActionRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'TeslaDam',
            '2018-01-18',
            'Action',
            'tesladam'
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
     * @param string $stepCode
     *
     * @return $this
     */
    public function setStepCode($stepCode)
    {
        $this->requestParameters['StepCode'] = $stepCode;
        $this->queryParameters['StepCode'] = $stepCode;

        return $this;
    }
}
