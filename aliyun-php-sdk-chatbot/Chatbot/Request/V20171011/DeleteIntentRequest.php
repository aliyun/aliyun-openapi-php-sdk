<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of DeleteIntent
 *
 * @method string getIntentId()
 */
class DeleteIntentRequest extends \RpcAcsRequest
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
            'DeleteIntent',
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
