<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateFaceGroup
 *
 * @method string getProject()
 * @method string getExternalId()
 * @method string getGroupId()
 * @method string getRemarksB()
 * @method string getRemarksA()
 * @method string getGroupName()
 * @method string getRemarksArrayA()
 * @method string getRemarksArrayB()
 * @method string getRemarksD()
 * @method string getRemarksC()
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
     * @param string $externalId
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->requestParameters['ExternalId'] = $externalId;
        $this->queryParameters['ExternalId'] = $externalId;

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
     * @param string $remarksB
     *
     * @return $this
     */
    public function setRemarksB($remarksB)
    {
        $this->requestParameters['RemarksB'] = $remarksB;
        $this->queryParameters['RemarksB'] = $remarksB;

        return $this;
    }

    /**
     * @param string $remarksA
     *
     * @return $this
     */
    public function setRemarksA($remarksA)
    {
        $this->requestParameters['RemarksA'] = $remarksA;
        $this->queryParameters['RemarksA'] = $remarksA;

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
     * @param string $remarksArrayA
     *
     * @return $this
     */
    public function setRemarksArrayA($remarksArrayA)
    {
        $this->requestParameters['RemarksArrayA'] = $remarksArrayA;
        $this->queryParameters['RemarksArrayA'] = $remarksArrayA;

        return $this;
    }

    /**
     * @param string $remarksArrayB
     *
     * @return $this
     */
    public function setRemarksArrayB($remarksArrayB)
    {
        $this->requestParameters['RemarksArrayB'] = $remarksArrayB;
        $this->queryParameters['RemarksArrayB'] = $remarksArrayB;

        return $this;
    }

    /**
     * @param string $remarksD
     *
     * @return $this
     */
    public function setRemarksD($remarksD)
    {
        $this->requestParameters['RemarksD'] = $remarksD;
        $this->queryParameters['RemarksD'] = $remarksD;

        return $this;
    }

    /**
     * @param string $remarksC
     *
     * @return $this
     */
    public function setRemarksC($remarksC)
    {
        $this->requestParameters['RemarksC'] = $remarksC;
        $this->queryParameters['RemarksC'] = $remarksC;

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
