<?php

namespace NAS\Request\V20170626;

/**
 * Request of DeleteAccessRule
 *
 * @method string getAccessGroupName()
 * @method string getAccessRuleId()
 */
class DeleteAccessRuleRequest extends \RpcAcsRequest
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
            'NAS',
            '2017-06-26',
            'DeleteAccessRule',
            'nas'
        );
    }

    /**
     * @param string $accessGroupName
     *
     * @return $this
     */
    public function setAccessGroupName($accessGroupName)
    {
        $this->requestParameters['AccessGroupName'] = $accessGroupName;
        $this->queryParameters['AccessGroupName'] = $accessGroupName;

        return $this;
    }

    /**
     * @param string $accessRuleId
     *
     * @return $this
     */
    public function setAccessRuleId($accessRuleId)
    {
        $this->requestParameters['AccessRuleId'] = $accessRuleId;
        $this->queryParameters['AccessRuleId'] = $accessRuleId;

        return $this;
    }
}
