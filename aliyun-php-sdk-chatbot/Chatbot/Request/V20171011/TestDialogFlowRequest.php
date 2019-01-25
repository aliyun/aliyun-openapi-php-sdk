<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of TestDialogFlow
 *
 * @method string getDialogId()
 */
class TestDialogFlowRequest extends \RpcAcsRequest
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
            'TestDialogFlow',
            'beebot'
        );
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
