<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetWebofficeURL
 *
 * @method string getSrcType()
 * @method string getProject()
 * @method string getFile()
 * @method string getNotifyEndpoint()
 * @method string getFileID()
 * @method string getNotifyTopicName()
 * @method string getPermission()
 * @method string getUser()
 */
class GetWebofficeURLRequest extends \RpcAcsRequest
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
            'GetWebofficeURL',
            'imm'
        );
    }

    /**
     * @param string $srcType
     *
     * @return $this
     */
    public function setSrcType($srcType)
    {
        $this->requestParameters['SrcType'] = $srcType;
        $this->queryParameters['SrcType'] = $srcType;

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
     * @param string $file
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->requestParameters['File'] = $file;
        $this->queryParameters['File'] = $file;

        return $this;
    }

    /**
     * @param string $notifyEndpoint
     *
     * @return $this
     */
    public function setNotifyEndpoint($notifyEndpoint)
    {
        $this->requestParameters['NotifyEndpoint'] = $notifyEndpoint;
        $this->queryParameters['NotifyEndpoint'] = $notifyEndpoint;

        return $this;
    }

    /**
     * @param string $fileID
     *
     * @return $this
     */
    public function setFileID($fileID)
    {
        $this->requestParameters['FileID'] = $fileID;
        $this->queryParameters['FileID'] = $fileID;

        return $this;
    }

    /**
     * @param string $notifyTopicName
     *
     * @return $this
     */
    public function setNotifyTopicName($notifyTopicName)
    {
        $this->requestParameters['NotifyTopicName'] = $notifyTopicName;
        $this->queryParameters['NotifyTopicName'] = $notifyTopicName;

        return $this;
    }

    /**
     * @param string $permission
     *
     * @return $this
     */
    public function setPermission($permission)
    {
        $this->requestParameters['Permission'] = $permission;
        $this->queryParameters['Permission'] = $permission;

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
