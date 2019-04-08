<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BatchUpdateDeviceNickname
 *
 * @method array getDeviceNicknameInfos()
 * @method string getIotInstanceId()
 */
class BatchUpdateDeviceNicknameRequest extends \RpcAcsRequest
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
            'BatchUpdateDeviceNickname',
            'iot'
        );
    }

    /**
     * @param array $deviceNicknameInfo
     *
     * @return $this
     */
    public function setDeviceNicknameInfos(array $deviceNicknameInfo)
    {
        $this->requestParameters['DeviceNicknameInfos'] = $deviceNicknameInfo;
        foreach ($deviceNicknameInfo as $depth1 => $depth1Value) {
            $this->queryParameters['DeviceNicknameInfo.' . ($depth1 + 1) . '.IotId'] = $depth1Value['IotId'];
            $this->queryParameters['DeviceNicknameInfo.' . ($depth1 + 1) . '.Nickname'] = $depth1Value['Nickname'];
            $this->queryParameters['DeviceNicknameInfo.' . ($depth1 + 1) . '.DeviceName'] = $depth1Value['DeviceName'];
            $this->queryParameters['DeviceNicknameInfo.' . ($depth1 + 1) . '.ProductKey'] = $depth1Value['ProductKey'];
        }

        return $this;
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
}
