<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of UpdateEntity
 *
 * @method string getRegex()
 * @method string getEntityType()
 * @method string getMembers()
 * @method string getEntityName()
 * @method string getEntityId()
 */
class UpdateEntityRequest extends \RpcAcsRequest
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
            'UpdateEntity',
            'beebot'
        );
    }

    /**
     * @param string $regex
     *
     * @return $this
     */
    public function setRegex($regex)
    {
        $this->requestParameters['Regex'] = $regex;
        $this->queryParameters['Regex'] = $regex;

        return $this;
    }

    /**
     * @param string $entityType
     *
     * @return $this
     */
    public function setEntityType($entityType)
    {
        $this->requestParameters['EntityType'] = $entityType;
        $this->queryParameters['EntityType'] = $entityType;

        return $this;
    }

    /**
     * @param string $members
     *
     * @return $this
     */
    public function setMembers($members)
    {
        $this->requestParameters['Members'] = $members;
        $this->queryParameters['Members'] = $members;

        return $this;
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
