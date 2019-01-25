<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of UpdateKnowledge
 *
 * @method string getKnowledge()
 */
class UpdateKnowledgeRequest extends \RpcAcsRequest
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
            'UpdateKnowledge',
            'beebot'
        );
    }

    /**
     * @param string $knowledge
     *
     * @return $this
     */
    public function setKnowledge($knowledge)
    {
        $this->requestParameters['Knowledge'] = $knowledge;
        $this->queryParameters['Knowledge'] = $knowledge;

        return $this;
    }
}
