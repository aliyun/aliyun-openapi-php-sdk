<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of UpdateIntent
 *
 * @method string getIntentDefinition()
 * @method string getIntentId()
 */
class UpdateIntentRequest extends \RpcAcsRequest
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
            'UpdateIntent',
            'beebot'
        );
    }

    /**
     * @param string $intentDefinition
     *
     * @return $this
     */
    public function setIntentDefinition($intentDefinition)
    {
        $this->requestParameters['IntentDefinition'] = $intentDefinition;
        $this->queryParameters['IntentDefinition'] = $intentDefinition;

        return $this;
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
