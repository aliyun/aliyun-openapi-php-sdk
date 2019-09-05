<?php

namespace Market\Request\V20151101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of NotifyContractEvent
 *
 * @method string getEventMessage()
 * @method string getEventType()
 */
class NotifyContractEventRequest extends \RpcAcsRequest
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
            'Market',
            '2015-11-01',
            'NotifyContractEvent',
            'yunmarket'
        );
    }

    /**
     * @param string $eventMessage
     *
     * @return $this
     */
    public function setEventMessage($eventMessage)
    {
        $this->requestParameters['EventMessage'] = $eventMessage;
        $this->queryParameters['EventMessage'] = $eventMessage;

        return $this;
    }

    /**
     * @param string $eventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        $this->requestParameters['EventType'] = $eventType;
        $this->queryParameters['EventType'] = $eventType;

        return $this;
    }
}
