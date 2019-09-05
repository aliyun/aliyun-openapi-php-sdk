<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateFault
 *
 * @method string getAgentOssFileName()
 * @method string getDescription()
 * @method string getOperatingSystemVersion()
 * @method string getStartTime()
 * @method string getMicrophoneList()
 * @method string getClientPort()
 * @method string getCustomFilePath()
 * @method string getClientIp()
 * @method string getSpeakerList()
 * @method string getAgentId()
 * @method string getEndTime()
 * @method string getSpeakerEquipment()
 * @method string getServicePort()
 * @method string getServiceIp()
 * @method string getInstanceId()
 * @method string getAgentFilePath()
 * @method string getConnectId()
 * @method string getCustomOssFileName()
 * @method string getMicrophoneEquipment()
 * @method string getBrowserVersion()
 */
class CreateFaultRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'CreateFault'
        );
    }

    /**
     * @param string $agentOssFileName
     *
     * @return $this
     */
    public function setAgentOssFileName($agentOssFileName)
    {
        $this->requestParameters['AgentOssFileName'] = $agentOssFileName;
        $this->queryParameters['AgentOssFileName'] = $agentOssFileName;

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
     * @param string $operatingSystemVersion
     *
     * @return $this
     */
    public function setOperatingSystemVersion($operatingSystemVersion)
    {
        $this->requestParameters['OperatingSystemVersion'] = $operatingSystemVersion;
        $this->queryParameters['OperatingSystemVersion'] = $operatingSystemVersion;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $microphoneList
     *
     * @return $this
     */
    public function setMicrophoneList($microphoneList)
    {
        $this->requestParameters['MicrophoneList'] = $microphoneList;
        $this->queryParameters['MicrophoneList'] = $microphoneList;

        return $this;
    }

    /**
     * @param string $clientPort
     *
     * @return $this
     */
    public function setClientPort($clientPort)
    {
        $this->requestParameters['ClientPort'] = $clientPort;
        $this->queryParameters['ClientPort'] = $clientPort;

        return $this;
    }

    /**
     * @param string $customFilePath
     *
     * @return $this
     */
    public function setCustomFilePath($customFilePath)
    {
        $this->requestParameters['CustomFilePath'] = $customFilePath;
        $this->queryParameters['CustomFilePath'] = $customFilePath;

        return $this;
    }

    /**
     * @param string $clientIp
     *
     * @return $this
     */
    public function setClientIp($clientIp)
    {
        $this->requestParameters['ClientIp'] = $clientIp;
        $this->queryParameters['ClientIp'] = $clientIp;

        return $this;
    }

    /**
     * @param string $speakerList
     *
     * @return $this
     */
    public function setSpeakerList($speakerList)
    {
        $this->requestParameters['SpeakerList'] = $speakerList;
        $this->queryParameters['SpeakerList'] = $speakerList;

        return $this;
    }

    /**
     * @param string $agentId
     *
     * @return $this
     */
    public function setAgentId($agentId)
    {
        $this->requestParameters['AgentId'] = $agentId;
        $this->queryParameters['AgentId'] = $agentId;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $speakerEquipment
     *
     * @return $this
     */
    public function setSpeakerEquipment($speakerEquipment)
    {
        $this->requestParameters['SpeakerEquipment'] = $speakerEquipment;
        $this->queryParameters['SpeakerEquipment'] = $speakerEquipment;

        return $this;
    }

    /**
     * @param string $servicePort
     *
     * @return $this
     */
    public function setServicePort($servicePort)
    {
        $this->requestParameters['ServicePort'] = $servicePort;
        $this->queryParameters['ServicePort'] = $servicePort;

        return $this;
    }

    /**
     * @param string $serviceIp
     *
     * @return $this
     */
    public function setServiceIp($serviceIp)
    {
        $this->requestParameters['ServiceIp'] = $serviceIp;
        $this->queryParameters['ServiceIp'] = $serviceIp;

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
     * @param string $agentFilePath
     *
     * @return $this
     */
    public function setAgentFilePath($agentFilePath)
    {
        $this->requestParameters['AgentFilePath'] = $agentFilePath;
        $this->queryParameters['AgentFilePath'] = $agentFilePath;

        return $this;
    }

    /**
     * @param string $connectId
     *
     * @return $this
     */
    public function setConnectId($connectId)
    {
        $this->requestParameters['ConnectId'] = $connectId;
        $this->queryParameters['ConnectId'] = $connectId;

        return $this;
    }

    /**
     * @param string $customOssFileName
     *
     * @return $this
     */
    public function setCustomOssFileName($customOssFileName)
    {
        $this->requestParameters['CustomOssFileName'] = $customOssFileName;
        $this->queryParameters['CustomOssFileName'] = $customOssFileName;

        return $this;
    }

    /**
     * @param string $microphoneEquipment
     *
     * @return $this
     */
    public function setMicrophoneEquipment($microphoneEquipment)
    {
        $this->requestParameters['MicrophoneEquipment'] = $microphoneEquipment;
        $this->queryParameters['MicrophoneEquipment'] = $microphoneEquipment;

        return $this;
    }

    /**
     * @param string $browserVersion
     *
     * @return $this
     */
    public function setBrowserVersion($browserVersion)
    {
        $this->requestParameters['BrowserVersion'] = $browserVersion;
        $this->queryParameters['BrowserVersion'] = $browserVersion;

        return $this;
    }
}
