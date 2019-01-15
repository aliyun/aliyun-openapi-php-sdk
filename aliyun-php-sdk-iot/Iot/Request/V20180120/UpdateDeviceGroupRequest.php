<?php

namespace Iot\Request\V20180120;

/**
 * Request of UpdateDeviceGroup
 *
 * @method string getGroupDesc()
 * @method string getGroupId()
 */
class UpdateDeviceGroupRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'UpdateDeviceGroup'
        );
    }

    /**
     * @param string $groupDesc
     *
     * @return $this
     */
    public function setGroupDesc($groupDesc)
    {
        $this->requestParameters['GroupDesc'] = $groupDesc;
        $this->queryParameters['GroupDesc'] = $groupDesc;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }
}
