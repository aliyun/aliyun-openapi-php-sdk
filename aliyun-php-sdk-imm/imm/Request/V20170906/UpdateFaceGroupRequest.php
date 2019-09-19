<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateFaceGroup
 *
 * @method string getProject()
 * @method string getGroupId()
 * @method string getGroupName()
 * @method string getSetId()
 * @method string getGroupCoverFaceId()
 */
class UpdateFaceGroupRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'UpdateFaceGroup',
            'imm'
        );
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

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

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        $this->requestParameters['SetId'] = $setId;
        $this->queryParameters['SetId'] = $setId;

        return $this;
    }

    /**
     * @param string $groupCoverFaceId
     *
     * @return $this
     */
    public function setGroupCoverFaceId($groupCoverFaceId)
    {
        $this->requestParameters['GroupCoverFaceId'] = $groupCoverFaceId;
        $this->queryParameters['GroupCoverFaceId'] = $groupCoverFaceId;

        return $this;
    }
}
