<?php

namespace Emr\Request\V20160408;

/**
 * Request of UpdateETLJobStage
 *
 * @method string getStageName()
 * @method string getStageConf()
 * @method string getResourceOwnerId()
 * @method string getStageType()
 * @method string getEtlJobId()
 * @method string getStagePlugin()
 */
class UpdateETLJobStageRequest extends \RpcAcsRequest
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
            'UpdateETLJobStage',
            'emr'
        );
    }

    /**
     * @param string $stageName
     *
     * @return $this
     */
    public function setStageName($stageName)
    {
        $this->requestParameters['StageName'] = $stageName;
        $this->queryParameters['StageName'] = $stageName;

        return $this;
    }

    /**
     * @param string $stageConf
     *
     * @return $this
     */
    public function setStageConf($stageConf)
    {
        $this->requestParameters['StageConf'] = $stageConf;
        $this->queryParameters['StageConf'] = $stageConf;

        return $this;
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
     * @param string $stageType
     *
     * @return $this
     */
    public function setStageType($stageType)
    {
        $this->requestParameters['StageType'] = $stageType;
        $this->queryParameters['StageType'] = $stageType;

        return $this;
    }

    /**
     * @param string $etlJobId
     *
     * @return $this
     */
    public function setEtlJobId($etlJobId)
    {
        $this->requestParameters['EtlJobId'] = $etlJobId;
        $this->queryParameters['EtlJobId'] = $etlJobId;

        return $this;
    }

    /**
     * @param string $stagePlugin
     *
     * @return $this
     */
    public function setStagePlugin($stagePlugin)
    {
        $this->requestParameters['StagePlugin'] = $stagePlugin;
        $this->queryParameters['StagePlugin'] = $stagePlugin;

        return $this;
    }
}
