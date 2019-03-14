<?php

namespace Emr\Request\V20160408;

/**
 * Request of RunETLJob
 *
 * @method string getResourceOwnerId()
 * @method array getInstanceRunParams()
 * @method string getIsDebug()
 * @method string getId()
 */
class RunETLJobRequest extends \RpcAcsRequest
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
            'RunETLJob',
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
     * @param array $instanceRunParams
     *
     * @return $this
     */
    public function setInstanceRunParams(array $instanceRunParams)
    {
        $this->requestParameters['InstanceRunParams'] = $instanceRunParams;
        foreach ($instanceRunParams as $i => $iValue) {
            $this->queryParameters['InstanceRunParam.' . ($i + 1) . '.Value'] = $instanceRunParams[$i]['Value'];
            $this->queryParameters['InstanceRunParam.' . ($i + 1) . '.Key'] = $instanceRunParams[$i]['Key'];
        }

        return $this;
    }

    /**
     * @param string $isDebug
     *
     * @return $this
     */
    public function setIsDebug($isDebug)
    {
        $this->requestParameters['IsDebug'] = $isDebug;
        $this->queryParameters['IsDebug'] = $isDebug;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }
}
