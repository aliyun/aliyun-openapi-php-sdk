<?php

namespace Emr\Request\V20160408;

/**
 * Request of CancelETLJobRelease
 *
 * @method string getResourceOwnerId()
 * @method string getEtlJobId()
 * @method string getReleaseId()
 */
class CancelETLJobReleaseRequest extends \RpcAcsRequest
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
            'CancelETLJobRelease',
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
     * @param string $releaseId
     *
     * @return $this
     */
    public function setReleaseId($releaseId)
    {
        $this->requestParameters['ReleaseId'] = $releaseId;
        $this->queryParameters['ReleaseId'] = $releaseId;

        return $this;
    }
}
