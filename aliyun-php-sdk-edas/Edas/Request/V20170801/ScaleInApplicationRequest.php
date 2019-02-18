<?php

namespace Edas\Request\V20170801;

/**
 * Request of ScaleInApplication
 *
 * @method string getForceStatus()
 * @method string getAppId()
 * @method string getEccInfo()
 */
class ScaleInApplicationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/changeorder/co_scale_in';

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
            'ScaleInApplication'
        );
    }

    /**
     * @param string $forceStatus
     *
     * @return $this
     */
    public function setForceStatus($forceStatus)
    {
        $this->requestParameters['ForceStatus'] = $forceStatus;
        $this->queryParameters['ForceStatus'] = $forceStatus;

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
     * @param string $eccInfo
     *
     * @return $this
     */
    public function setEccInfo($eccInfo)
    {
        $this->requestParameters['EccInfo'] = $eccInfo;
        $this->queryParameters['EccInfo'] = $eccInfo;

        return $this;
    }
}
