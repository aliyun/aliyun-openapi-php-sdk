<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of DescribeEntities
 *
 * @method string getEntityId()
 */
class DescribeEntitiesRequest extends \RpcAcsRequest
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
            'DescribeEntities',
            'beebot'
        );
    }

    /**
     * @param string $entityId
     *
     * @return $this
     */
    public function setEntityId($entityId)
    {
        $this->requestParameters['EntityId'] = $entityId;
        $this->queryParameters['EntityId'] = $entityId;

        return $this;
    }
}
