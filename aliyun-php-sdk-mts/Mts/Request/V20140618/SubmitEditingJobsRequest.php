<?php

namespace Mts\Request\V20140618;

/**
 * Request of SubmitEditingJobs
 *
 * @method string getOutputBucket()
 * @method string getResourceOwnerId()
 * @method string getEditingJobOutputs()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOutputLocation()
 * @method string getOwnerId()
 * @method string getEditingInputs()
 * @method string getPipelineId()
 */
class SubmitEditingJobsRequest extends \RpcAcsRequest
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
            'Mts',
            '2014-06-18',
            'SubmitEditingJobs',
            'mts'
        );
    }

    /**
     * @param string $outputBucket
     *
     * @return $this
     */
    public function setOutputBucket($outputBucket)
    {
        $this->requestParameters['OutputBucket'] = $outputBucket;
        $this->queryParameters['OutputBucket'] = $outputBucket;

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
     * @param string $editingJobOutputs
     *
     * @return $this
     */
    public function setEditingJobOutputs($editingJobOutputs)
    {
        $this->requestParameters['EditingJobOutputs'] = $editingJobOutputs;
        $this->queryParameters['EditingJobOutputs'] = $editingJobOutputs;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $outputLocation
     *
     * @return $this
     */
    public function setOutputLocation($outputLocation)
    {
        $this->requestParameters['OutputLocation'] = $outputLocation;
        $this->queryParameters['OutputLocation'] = $outputLocation;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $editingInputs
     *
     * @return $this
     */
    public function setEditingInputs($editingInputs)
    {
        $this->requestParameters['EditingInputs'] = $editingInputs;
        $this->queryParameters['EditingInputs'] = $editingInputs;

        return $this;
    }

    /**
     * @param string $pipelineId
     *
     * @return $this
     */
    public function setPipelineId($pipelineId)
    {
        $this->requestParameters['PipelineId'] = $pipelineId;
        $this->queryParameters['PipelineId'] = $pipelineId;

        return $this;
    }
}
