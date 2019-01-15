<?php

namespace Iot\Request\V20180120;

/**
 * Request of CreateDeviceGroup
 *
 * @method string getGroupDesc()
 * @method string getSuperGroupId()
 * @method string getGroupName()
 */
class CreateDeviceGroupRequest extends \RpcAcsRequest
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
            'CreateDeviceGroup'
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
     * @param string $superGroupId
     *
     * @return $this
     */
    public function setSuperGroupId($superGroupId)
    {
        $this->requestParameters['SuperGroupId'] = $superGroupId;
        $this->queryParameters['SuperGroupId'] = $superGroupId;

        return $this;
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->requestParameters['GroupName'] = $groupName;
        $this->queryParameters['GroupName'] = $groupName;

        return $this;
    }
}
