<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of RemoveEntityMember
 *
 * @method string getRemoveType()
 * @method string getMember()
 * @method string getEntityId()
 */
class RemoveEntityMemberRequest extends \RpcAcsRequest
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
            'RemoveEntityMember',
            'beebot'
        );
    }

    /**
     * @param string $removeType
     *
     * @return $this
     */
    public function setRemoveType($removeType)
    {
        $this->requestParameters['RemoveType'] = $removeType;
        $this->queryParameters['RemoveType'] = $removeType;

        return $this;
    }

    /**
     * @param string $member
     *
     * @return $this
     */
    public function setMember($member)
    {
        $this->requestParameters['Member'] = $member;
        $this->queryParameters['Member'] = $member;

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
