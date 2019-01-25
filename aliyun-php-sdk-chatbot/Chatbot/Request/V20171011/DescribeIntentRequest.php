<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of DescribeIntent
 *
 * @method string getIntentId()
 */
class DescribeIntentRequest extends \RpcAcsRequest
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
            'Chatbot',
            '2017-10-11',
            'DescribeIntent',
            'beebot'
        );
    }

    /**
     * @param string $intentId
     *
     * @return $this
     */
    public function setIntentId($intentId)
    {
        $this->requestParameters['IntentId'] = $intentId;
        $this->queryParameters['IntentId'] = $intentId;

        return $this;
    }
}
