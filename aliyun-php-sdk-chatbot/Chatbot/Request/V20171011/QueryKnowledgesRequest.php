<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of QueryKnowledges
 *
 * @method string getPageSize()
 * @method string getCoreWordName()
 * @method string getKnowledgeTitle()
 * @method string getPageNumber()
 * @method string getCategoryId()
 */
class QueryKnowledgesRequest extends \RpcAcsRequest
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
            'QueryKnowledges',
            'beebot'
        );
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $coreWordName
     *
     * @return $this
     */
    public function setCoreWordName($coreWordName)
    {
        $this->requestParameters['CoreWordName'] = $coreWordName;
        $this->queryParameters['CoreWordName'] = $coreWordName;

        return $this;
    }

    /**
     * @param string $knowledgeTitle
     *
     * @return $this
     */
    public function setKnowledgeTitle($knowledgeTitle)
    {
        $this->requestParameters['KnowledgeTitle'] = $knowledgeTitle;
        $this->queryParameters['KnowledgeTitle'] = $knowledgeTitle;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

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
