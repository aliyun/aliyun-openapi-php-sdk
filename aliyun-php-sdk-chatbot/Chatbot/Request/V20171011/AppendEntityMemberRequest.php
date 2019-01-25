<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of AppendEntityMember
 *
 * @method string getMember()
 * @method string getEntityId()
 * @method string getApplyType()
 */
class AppendEntityMemberRequest extends \RpcAcsRequest
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
            'AppendEntityMember',
            'beebot'
        );
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

    /**
     * @param string $applyType
     *
     * @return $this
     */
    public function setApplyType($applyType)
    {
        $this->requestParameters['ApplyType'] = $applyType;
        $this->queryParameters['ApplyType'] = $applyType;

        return $this;
    }
}
