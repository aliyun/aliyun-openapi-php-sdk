<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of Feedback
 *
 * @method string getFeedback()
 * @method string getInstanceId()
 * @method string getMessageId()
 * @method string getSessionId()
 */
class FeedbackRequest extends \RpcAcsRequest
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
            'Feedback',
            'beebot'
        );
    }

    /**
     * @param string $feedback
     *
     * @return $this
     */
    public function setFeedback($feedback)
    {
        $this->requestParameters['Feedback'] = $feedback;
        $this->queryParameters['Feedback'] = $feedback;

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
     * @param string $messageId
     *
     * @return $this
     */
    public function setMessageId($messageId)
    {
        $this->requestParameters['MessageId'] = $messageId;
        $this->queryParameters['MessageId'] = $messageId;

        return $this;
    }

    /**
     * @param string $sessionId
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->requestParameters['SessionId'] = $sessionId;
        $this->queryParameters['SessionId'] = $sessionId;

        return $this;
    }
}
