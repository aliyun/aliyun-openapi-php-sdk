<?php

namespace Emr\Request\V20160408;

/**
 * Request of UpdateProjectSetting
 *
 * @method string getResourceOwnerId()
 * @method string getDefaultOssPath()
 * @method string getProjectId()
 * @method string getOssConfig()
 */
class UpdateProjectSettingRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'UpdateProjectSetting',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $defaultOssPath
     *
     * @return $this
     */
    public function setDefaultOssPath($defaultOssPath)
    {
        $this->requestParameters['DefaultOssPath'] = $defaultOssPath;
        $this->queryParameters['DefaultOssPath'] = $defaultOssPath;

        return $this;
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->requestParameters['ProjectId'] = $projectId;
        $this->queryParameters['ProjectId'] = $projectId;

        return $this;
    }

    /**
     * @param string $ossConfig
     *
     * @return $this
     */
    public function setOssConfig($ossConfig)
    {
        $this->requestParameters['OssConfig'] = $ossConfig;
        $this->queryParameters['OssConfig'] = $ossConfig;

        return $this;
    }
}
