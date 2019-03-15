<?php

namespace openanalytics\Request\V20180301;

/**
 * Request of GetRegionStatus
 *
 * @method string getTargetUid()
 */
class GetRegionStatusRequest extends \RpcAcsRequest
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
            'openanalytics',
            '2018-03-01',
            'GetRegionStatus',
            'openanalytics'
        );
    }

    /**
     * @param string $targetUid
     *
     * @return $this
     */
    public function setTargetUid($targetUid)
    {
        $this->requestParameters['TargetUid'] = $targetUid;
        $this->queryParameters['TargetUid'] = $targetUid;

        return $this;
    }
}
