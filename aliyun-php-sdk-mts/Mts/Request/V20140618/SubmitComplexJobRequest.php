<?php

namespace Mts\Request\V20140618;

/**
 * Request of SubmitComplexJob
 *
 * @method string getResourceOwnerId()
 * @method string getTranscodeOutput()
 * @method string getResourceOwnerAccount()
 * @method string getInputs()
 * @method string getOwnerAccount()
 * @method string getOutputLocation()
 * @method string getOwnerId()
 * @method string getPipelineId()
 * @method string getOutputBucket()
 * @method string getUserData()
 * @method string getComplexConfigs()
 */
class SubmitComplexJobRequest extends \RpcAcsRequest
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
            'SubmitComplexJob',
            'mts'
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
     * @param string $transcodeOutput
     *
     * @return $this
     */
    public function setTranscodeOutput($transcodeOutput)
    {
        $this->requestParameters['TranscodeOutput'] = $transcodeOutput;
        $this->queryParameters['TranscodeOutput'] = $transcodeOutput;

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
     * @param string $inputs
     *
     * @return $this
     */
    public function setInputs($inputs)
    {
        $this->requestParameters['Inputs'] = $inputs;
        $this->queryParameters['Inputs'] = $inputs;

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
     * @param string $userData
     *
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->requestParameters['UserData'] = $userData;
        $this->queryParameters['UserData'] = $userData;

        return $this;
    }

    /**
     * @param string $complexConfigs
     *
     * @return $this
     */
    public function setComplexConfigs($complexConfigs)
    {
        $this->requestParameters['ComplexConfigs'] = $complexConfigs;
        $this->queryParameters['ComplexConfigs'] = $complexConfigs;

        return $this;
    }
}
