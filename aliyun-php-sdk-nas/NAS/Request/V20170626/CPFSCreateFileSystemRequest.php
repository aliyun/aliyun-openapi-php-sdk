<?php

namespace NAS\Request\V20170626;

/**
 * Request of CPFSCreateFileSystem
 *
 * @method string getFsSpec()
 * @method string getVSwitchId()
 * @method string getBandwidth()
 * @method string getVpcId()
 * @method string getZoneId()
 * @method string getNetworkType()
 * @method string getFsDesc()
 * @method string getCapacity()
 */
class CPFSCreateFileSystemRequest extends \RpcAcsRequest
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
            'NAS',
            '2017-06-26',
            'CPFSCreateFileSystem',
            'nas'
        );
    }

    /**
     * @param string $fsSpec
     *
     * @return $this
     */
    public function setFsSpec($fsSpec)
    {
        $this->requestParameters['FsSpec'] = $fsSpec;
        $this->queryParameters['FsSpec'] = $fsSpec;

        return $this;
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        $this->requestParameters['VSwitchId'] = $vSwitchId;
        $this->queryParameters['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @param string $bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        $this->requestParameters['Bandwidth'] = $bandwidth;
        $this->queryParameters['Bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        $this->requestParameters['VpcId'] = $vpcId;
        $this->queryParameters['VpcId'] = $vpcId;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->requestParameters['ZoneId'] = $zoneId;
        $this->queryParameters['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $this->requestParameters['NetworkType'] = $networkType;
        $this->queryParameters['NetworkType'] = $networkType;

        return $this;
    }

    /**
     * @param string $fsDesc
     *
     * @return $this
     */
    public function setFsDesc($fsDesc)
    {
        $this->requestParameters['FsDesc'] = $fsDesc;
        $this->queryParameters['FsDesc'] = $fsDesc;

        return $this;
    }

    /**
     * @param string $capacity
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->requestParameters['Capacity'] = $capacity;
        $this->queryParameters['Capacity'] = $capacity;

        return $this;
    }
}
