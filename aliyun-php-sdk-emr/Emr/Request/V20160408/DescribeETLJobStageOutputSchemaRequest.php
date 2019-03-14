<?php

namespace Emr\Request\V20160408;

/**
 * Request of DescribeETLJobStageOutputSchema
 *
 * @method string getStageName()
 * @method string getResourceOwnerId()
 * @method string getEtlJobId()
 */
class DescribeETLJobStageOutputSchemaRequest extends \RpcAcsRequest
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
            'DescribeETLJobStageOutputSchema',
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
}
