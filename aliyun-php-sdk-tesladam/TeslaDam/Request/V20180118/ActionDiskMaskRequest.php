<?php

namespace TeslaDam\Request\V20180118;

/**
 * Request of ActionDiskMask
 *
 * @method string getOp()
 * @method string getDiskMount()
 * @method string getIp()
 */
class ActionDiskMaskRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'TeslaDam',
            '2018-01-18',
            'ActionDiskMask',
            'tesladam'
        );
    }

    /**
     * @param string $op
     *
     * @return $this
     */
    public function setOp($op)
    {
        $this->requestParameters['Op'] = $op;
        $this->queryParameters['Op'] = $op;

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
     * @param string $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->requestParameters['Ip'] = $ip;
        $this->queryParameters['Ip'] = $ip;

        return $this;
    }
}
