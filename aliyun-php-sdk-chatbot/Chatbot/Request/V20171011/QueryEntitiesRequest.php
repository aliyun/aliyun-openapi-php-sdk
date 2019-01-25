<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of QueryEntities
 *
 * @method string getEntityName()
 * @method string getPageSize()
 * @method string getDialogId()
 * @method string getPageNumber()
 */
class QueryEntitiesRequest extends \RpcAcsRequest
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
            'QueryEntities',
            'beebot'
        );
    }

    /**
     * @param string $entityName
     *
     * @return $this
     */
    public function setEntityName($entityName)
    {
        $this->requestParameters['EntityName'] = $entityName;
        $this->queryParameters['EntityName'] = $entityName;

        return $this;
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
}
