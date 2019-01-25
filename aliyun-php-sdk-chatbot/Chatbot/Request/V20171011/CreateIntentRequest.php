<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of CreateIntent
 *
 * @method string getIntentDefinition()
 * @method string getDialogId()
 */
class CreateIntentRequest extends \RpcAcsRequest
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
            'CreateIntent',
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
     * @param string $dialogId
     *
     * @return $this
     */
    public function setDialogId($dialogId)
    {
        $this->requestParameters['DialogId'] = $dialogId;
        $this->queryParameters['DialogId'] = $dialogId;

        return $this;
    }
}
