<?php

namespace CCC\Request\V20170705;

/**
 * Request of RemoveUsers
 *
 * @method string getInstanceId()
 * @method array getUserIds()
 */
class RemoveUsersRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'RemoveUsers'
        );
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param array $userIds
     *
     * @return $this
     */
    public function setUserIds(array $userIds)
    {
        $this->requestParameters['UserIds'] = $userIds;
        foreach ($userIds as $i => $iValue) {
            $this->queryParameters['UserId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
