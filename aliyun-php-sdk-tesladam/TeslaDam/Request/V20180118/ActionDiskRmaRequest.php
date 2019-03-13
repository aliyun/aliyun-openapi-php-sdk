<?php

namespace TeslaDam\Request\V20180118;

/**
 * Request of ActionDiskRma
 *
 * @method string getDiskName()
 * @method string getExecutionId()
 * @method string getDiskSlot()
 * @method string getHostname()
 * @method string getDiskMount()
 * @method string getDiskReason()
 * @method string getDiskSn()
 */
class ActionDiskRmaRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'TeslaDam',
            '2018-01-18',
            'ActionDiskRma',
            'tesladam'
        );
    }

    /**
     * @param string $diskName
     *
     * @return $this
     */
    public function setDiskName($diskName)
    {
        $this->requestParameters['DiskName'] = $diskName;
        $this->queryParameters['DiskName'] = $diskName;

        return $this;
    }

    /**
     * @param string $executionId
     *
     * @return $this
     */
    public function setExecutionId($executionId)
    {
        $this->requestParameters['ExecutionId'] = $executionId;
        $this->queryParameters['ExecutionId'] = $executionId;

        return $this;
    }

    /**
     * @param string $diskSlot
     *
     * @return $this
     */
    public function setDiskSlot($diskSlot)
    {
        $this->requestParameters['DiskSlot'] = $diskSlot;
        $this->queryParameters['DiskSlot'] = $diskSlot;

        return $this;
    }

    /**
     * @param string $hostname
     *
     * @return $this
     */
    public function setHostname($hostname)
    {
        $this->requestParameters['Hostname'] = $hostname;
        $this->queryParameters['Hostname'] = $hostname;

        return $this;
    }

    /**
     * @param string $diskMount
     *
     * @return $this
     */
    public function setDiskMount($diskMount)
    {
        $this->requestParameters['DiskMount'] = $diskMount;
        $this->queryParameters['DiskMount'] = $diskMount;

        return $this;
    }

    /**
     * @param string $diskReason
     *
     * @return $this
     */
    public function setDiskReason($diskReason)
    {
        $this->requestParameters['DiskReason'] = $diskReason;
        $this->queryParameters['DiskReason'] = $diskReason;

        return $this;
    }

    /**
     * @param string $diskSn
     *
     * @return $this
     */
    public function setDiskSn($diskSn)
    {
        $this->requestParameters['DiskSn'] = $diskSn;
        $this->queryParameters['DiskSn'] = $diskSn;

        return $this;
    }
}
