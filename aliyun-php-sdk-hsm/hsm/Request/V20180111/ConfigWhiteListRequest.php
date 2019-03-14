<?php

namespace hsm\Request\V20180111;

/**
 * Request of ConfigWhiteList
 *
 * @method string getResourceOwnerId()
 * @method string getInstanceId()
 * @method string getSourceIp()
 * @method string getWhiteList()
 */
class ConfigWhiteListRequest extends \RpcAcsRequest
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
            'hsm',
            '2018-01-11',
            'ConfigWhiteList',
            'hsm'
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
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $whiteList
     *
     * @return $this
     */
    public function setWhiteList($whiteList)
    {
        $this->requestParameters['WhiteList'] = $whiteList;
        $this->queryParameters['WhiteList'] = $whiteList;

        return $this;
    }
}
