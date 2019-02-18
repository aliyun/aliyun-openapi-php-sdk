<?php

namespace Edas\Request\V20170801;

/**
 * Request of ListScaleOutEcu
 *
 * @method string getMem()
 * @method string getLogicalRegionId()
 * @method string getAppId()
 * @method string getGroupId()
 * @method string getInstanceNum()
 * @method string getCpu()
 * @method string getClusterId()
 */
class ListScaleOutEcuRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/resource/scale_out_ecu_list';

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
            'Edas',
            '2017-08-01',
            'ListScaleOutEcu'
        );
    }

    /**
     * @param string $mem
     *
     * @return $this
     */
    public function setMem($mem)
    {
        $this->requestParameters['Mem'] = $mem;
        $this->queryParameters['Mem'] = $mem;

        return $this;
    }

    /**
     * @param string $logicalRegionId
     *
     * @return $this
     */
    public function setLogicalRegionId($logicalRegionId)
    {
        $this->requestParameters['LogicalRegionId'] = $logicalRegionId;
        $this->queryParameters['LogicalRegionId'] = $logicalRegionId;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

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
     * @param string $instanceNum
     *
     * @return $this
     */
    public function setInstanceNum($instanceNum)
    {
        $this->requestParameters['InstanceNum'] = $instanceNum;
        $this->queryParameters['InstanceNum'] = $instanceNum;

        return $this;
    }

    /**
     * @param string $cpu
     *
     * @return $this
     */
    public function setCpu($cpu)
    {
        $this->requestParameters['Cpu'] = $cpu;
        $this->queryParameters['Cpu'] = $cpu;

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
