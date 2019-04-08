<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BatchAddDeviceGroupRelations
 *
 * @method string getIotInstanceId()
 * @method string getGroupId()
 * @method array getDevices()
 */
class BatchAddDeviceGroupRelationsRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'BatchAddDeviceGroupRelations',
            'iot'
        );
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

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
     * @param array $device
     *
     * @return $this
     */
    public function setDevices(array $device)
    {
        $this->requestParameters['Devices'] = $device;
        foreach ($device as $depth1 => $depth1Value) {
            $this->queryParameters['Device.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
            $this->queryParameters['Device.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
        }

        return $this;
    }
}
