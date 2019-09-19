<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteFaceSearchImageById
 *
 * @method string getImageId()
 * @method string getProject()
 * @method string getGroupName()
 * @method string getSrcUri()
 * @method string getUser()
 */
class DeleteFaceSearchImageByIdRequest extends \RpcAcsRequest
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
            'DeleteFaceSearchImageById',
            'imm'
        );
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->requestParameters['ImageId'] = $imageId;
        $this->queryParameters['ImageId'] = $imageId;

        return $this;
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
     * @param string $srcUri
     *
     * @return $this
     */
    public function setSrcUri($srcUri)
    {
        $this->requestParameters['SrcUri'] = $srcUri;
        $this->queryParameters['SrcUri'] = $srcUri;

        return $this;
    }

    /**
     * @param string $user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->requestParameters['User'] = $user;
        $this->queryParameters['User'] = $user;

        return $this;
    }
}
