<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of MoveKnowledgeCategory
 *
 * @method string getKnowledgeId()
 * @method string getCategoryId()
 */
class MoveKnowledgeCategoryRequest extends \RpcAcsRequest
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
            'MoveKnowledgeCategory',
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
     * @param string $categoryId
     *
     * @return $this
     */
    public function setCategoryId($categoryId)
    {
        $this->requestParameters['CategoryId'] = $categoryId;
        $this->queryParameters['CategoryId'] = $categoryId;

        return $this;
    }
}
