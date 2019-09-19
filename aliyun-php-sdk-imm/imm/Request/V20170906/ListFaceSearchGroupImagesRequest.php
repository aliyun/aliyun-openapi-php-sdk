<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListFaceSearchGroupImages
 *
 * @method string getMaxKeys()
 * @method string getProject()
 * @method string getGroupName()
 * @method string getMarker()
 * @method string getUser()
 */
class ListFaceSearchGroupImagesRequest extends \RpcAcsRequest
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
            'ListFaceSearchGroupImages',
            'imm'
        );
    }

    /**
     * @param string $maxKeys
     *
     * @return $this
     */
    public function setMaxKeys($maxKeys)
    {
        $this->requestParameters['MaxKeys'] = $maxKeys;
        $this->queryParameters['MaxKeys'] = $maxKeys;

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
     * @param string $marker
     *
     * @return $this
     */
    public function setMarker($marker)
    {
        $this->requestParameters['Marker'] = $marker;
        $this->queryParameters['Marker'] = $marker;

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
