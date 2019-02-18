<?php

namespace Edas\Request\V20170801;

/**
 * Request of DeployApplication
 *
 * @method string getBuildPackId()
 * @method string getComponentIds()
 * @method string getAppId()
 * @method string getImageUrl()
 * @method string getGroupId()
 * @method string getBatchWaitTime()
 * @method string getBatch()
 * @method string getAppEnv()
 * @method string getWarUrl()
 * @method string getPackageVersion()
 * @method string getDesc()
 * @method string getDeployType()
 */
class DeployApplicationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/changeorder/co_deploy';

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
            'Edas',
            '2017-08-01',
            'DeployApplication'
        );
    }

    /**
     * @param string $buildPackId
     *
     * @return $this
     */
    public function setBuildPackId($buildPackId)
    {
        $this->requestParameters['BuildPackId'] = $buildPackId;
        $this->queryParameters['BuildPackId'] = $buildPackId;

        return $this;
    }

    /**
     * @param string $componentIds
     *
     * @return $this
     */
    public function setComponentIds($componentIds)
    {
        $this->requestParameters['ComponentIds'] = $componentIds;
        $this->queryParameters['ComponentIds'] = $componentIds;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->requestParameters['ImageUrl'] = $imageUrl;
        $this->queryParameters['ImageUrl'] = $imageUrl;

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
     * @param string $batchWaitTime
     *
     * @return $this
     */
    public function setBatchWaitTime($batchWaitTime)
    {
        $this->requestParameters['BatchWaitTime'] = $batchWaitTime;
        $this->queryParameters['BatchWaitTime'] = $batchWaitTime;

        return $this;
    }

    /**
     * @param string $batch
     *
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->requestParameters['Batch'] = $batch;
        $this->queryParameters['Batch'] = $batch;

        return $this;
    }

    /**
     * @param string $appEnv
     *
     * @return $this
     */
    public function setAppEnv($appEnv)
    {
        $this->requestParameters['AppEnv'] = $appEnv;
        $this->queryParameters['AppEnv'] = $appEnv;

        return $this;
    }

    /**
     * @param string $warUrl
     *
     * @return $this
     */
    public function setWarUrl($warUrl)
    {
        $this->requestParameters['WarUrl'] = $warUrl;
        $this->queryParameters['WarUrl'] = $warUrl;

        return $this;
    }

    /**
     * @param string $packageVersion
     *
     * @return $this
     */
    public function setPackageVersion($packageVersion)
    {
        $this->requestParameters['PackageVersion'] = $packageVersion;
        $this->queryParameters['PackageVersion'] = $packageVersion;

        return $this;
    }

    /**
     * @param string $desc
     *
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->requestParameters['Desc'] = $desc;
        $this->queryParameters['Desc'] = $desc;

        return $this;
    }

    /**
     * @param string $deployType
     *
     * @return $this
     */
    public function setDeployType($deployType)
    {
        $this->requestParameters['DeployType'] = $deployType;
        $this->queryParameters['DeployType'] = $deployType;

        return $this;
    }
}
