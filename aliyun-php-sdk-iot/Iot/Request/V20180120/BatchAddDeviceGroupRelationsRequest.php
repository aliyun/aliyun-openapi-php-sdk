<?php

namespace Iot\Request\V20180120;

/**
 * Request of BatchAddDeviceGroupRelations
 *
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
            'BatchAddDeviceGroupRelations'
        );
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
     * @param array $devices
     *
     * @return $this
     */
    public function setDevices(array $devices)
    {
        $this->requestParameters['Devices'] = $devices;
        foreach ($devices as $i => $iValue) {
            $this->queryParameters['Device.' . ($i + 1) . '.DeviceName'] = $devices[$i]['DeviceName'];
            $this->queryParameters['Device.' . ($i + 1) . '.ProductKey'] = $devices[$i]['ProductKey'];
        }

        return $this;
    }
}
