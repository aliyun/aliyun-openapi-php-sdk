<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateClusterVolumes
 *
 * @method array getAdditionalVolumess()
 * @method string getClusterId()
 */
class UpdateClusterVolumesRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'UpdateClusterVolumes',
            'ehs'
        );
    }

    /**
     * @param array $additionalVolumes
     *
     * @return $this
     */
    public function setAdditionalVolumess(array $additionalVolumes)
    {
        $this->requestParameters['AdditionalVolumess'] = $additionalVolumes;
        foreach ($additionalVolumes as $depth1 => $depth1Value) {
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeType'] = $depth1Value['VolumeType'];
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeProtocol'] = $depth1Value['VolumeProtocol'];
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.LocalDirectory'] = $depth1Value['LocalDirectory'];
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.RemoteDirectory'] = $depth1Value['RemoteDirectory'];
            foreach ($depth1Value['Roles'] as $depth2 => $depth2Value) {
                $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.Roles.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
            }
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeId'] = $depth1Value['VolumeId'];
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeMountpoint'] = $depth1Value['VolumeMountpoint'];
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.Location'] = $depth1Value['Location'];
            $this->queryParameters['AdditionalVolumes.' . ($depth1 + 1) . '.JobQueue'] = $depth1Value['JobQueue'];
        }

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }
}
