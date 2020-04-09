<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeployApp
 *
 * @method string getDeployPacketId()
 * @method string getDeployPacketUrl()
 * @method string getTotalPartitions()
 * @method string getName()
 * @method string getDescription()
 * @method string getEnvId()
 * @method string getPauseType()
 * @method string getArmsFlag()
 */
class DeployAppRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'DeployApp',
            'retailcloud'
        );
    }

    /**
     * @param string $deployPacketId
     *
     * @return $this
     */
    public function setDeployPacketId($deployPacketId)
    {
        $this->requestParameters['DeployPacketId'] = $deployPacketId;
        $this->queryParameters['DeployPacketId'] = $deployPacketId;

        return $this;
    }

    /**
     * @param string $deployPacketUrl
     *
     * @return $this
     */
    public function setDeployPacketUrl($deployPacketUrl)
    {
        $this->requestParameters['DeployPacketUrl'] = $deployPacketUrl;
        $this->queryParameters['DeployPacketUrl'] = $deployPacketUrl;

        return $this;
    }

    /**
     * @param string $totalPartitions
     *
     * @return $this
     */
    public function setTotalPartitions($totalPartitions)
    {
        $this->requestParameters['TotalPartitions'] = $totalPartitions;
        $this->queryParameters['TotalPartitions'] = $totalPartitions;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $envId
     *
     * @return $this
     */
    public function setEnvId($envId)
    {
        $this->requestParameters['EnvId'] = $envId;
        $this->queryParameters['EnvId'] = $envId;

        return $this;
    }

    /**
     * @param string $pauseType
     *
     * @return $this
     */
    public function setPauseType($pauseType)
    {
        $this->requestParameters['PauseType'] = $pauseType;
        $this->queryParameters['PauseType'] = $pauseType;

        return $this;
    }

    /**
     * @param string $armsFlag
     *
     * @return $this
     */
    public function setArmsFlag($armsFlag)
    {
        $this->requestParameters['ArmsFlag'] = $armsFlag;
        $this->queryParameters['ArmsFlag'] = $armsFlag;

        return $this;
    }
}
