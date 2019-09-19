<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RegistFace
 *
 * @method string getChooseBiggestFace()
 * @method string getIsQualityLimit()
 * @method string getProject()
 * @method string getGroupName()
 * @method string getSrcUri()
 * @method string getRegisterCheckLevel()
 * @method string getUser()
 */
class RegistFaceRequest extends \RpcAcsRequest
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
            'RegistFace',
            'imm'
        );
    }

    /**
     * @param string $chooseBiggestFace
     *
     * @return $this
     */
    public function setChooseBiggestFace($chooseBiggestFace)
    {
        $this->requestParameters['ChooseBiggestFace'] = $chooseBiggestFace;
        $this->queryParameters['ChooseBiggestFace'] = $chooseBiggestFace;

        return $this;
    }

    /**
     * @param string $isQualityLimit
     *
     * @return $this
     */
    public function setIsQualityLimit($isQualityLimit)
    {
        $this->requestParameters['IsQualityLimit'] = $isQualityLimit;
        $this->queryParameters['IsQualityLimit'] = $isQualityLimit;

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
     * @param string $registerCheckLevel
     *
     * @return $this
     */
    public function setRegisterCheckLevel($registerCheckLevel)
    {
        $this->requestParameters['RegisterCheckLevel'] = $registerCheckLevel;
        $this->queryParameters['RegisterCheckLevel'] = $registerCheckLevel;

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
