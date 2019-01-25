<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of DescribeKnowledge
 *
 * @method string getKnowledgeId()
 */
class DescribeKnowledgeRequest extends \RpcAcsRequest
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
            'DescribeKnowledge',
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
}
