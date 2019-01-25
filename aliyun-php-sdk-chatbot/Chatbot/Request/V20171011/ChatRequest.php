<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of Chat
 *
 * @method string getKnowledgeId()
 * @method string getSenderId()
 * @method string getInstanceId()
 * @method string getSenderNick()
 * @method array getPerspectives()
 * @method string getSessionId()
 * @method string getTag()
 * @method string getUtterance()
 */
class ChatRequest extends \RpcAcsRequest
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
            'Chat',
            'beebot'
        );
    }

    /**
     * @param string $knowledgeId
     *
     * @return $this
     */
    public function setKnowledgeId($knowledgeId)
    {
        $this->requestParameters['KnowledgeId'] = $knowledgeId;
        $this->queryParameters['KnowledgeId'] = $knowledgeId;

        return $this;
    }

    /**
     * @param string $senderId
     *
     * @return $this
     */
    public function setSenderId($senderId)
    {
        $this->requestParameters['SenderId'] = $senderId;
        $this->queryParameters['SenderId'] = $senderId;

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
     * @param string $senderNick
     *
     * @return $this
     */
    public function setSenderNick($senderNick)
    {
        $this->requestParameters['SenderNick'] = $senderNick;
        $this->queryParameters['SenderNick'] = $senderNick;

        return $this;
    }

    /**
     * @param array $perspectives
     *
     * @return $this
     */
    public function setPerspectives(array $perspectives)
    {
        $this->requestParameters['Perspectives'] = $perspectives;
        foreach ($perspectives as $i => $iValue) {
            $this->queryParameters['Perspective.' . ($i + 1)] = $iValue;
        }

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

    /**
     * @param string $tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->requestParameters['Tag'] = $tag;
        $this->queryParameters['Tag'] = $tag;

        return $this;
    }

    /**
     * @param string $utterance
     *
     * @return $this
     */
    public function setUtterance($utterance)
    {
        $this->requestParameters['Utterance'] = $utterance;
        $this->queryParameters['Utterance'] = $utterance;

        return $this;
    }
}
