<?php

namespace Edas\Request\V20170801;

/**
 * Request of ScaleOutApplication
 *
 * @method string getEcuInfo()
 * @method string getDeployGroup()
 * @method string getAppId()
 */
class ScaleOutApplicationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/changeorder/co_scale_out';

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
            'ScaleOutApplication'
        );
    }

    /**
     * @param string $ecuInfo
     *
     * @return $this
     */
    public function setEcuInfo($ecuInfo)
    {
        $this->requestParameters['EcuInfo'] = $ecuInfo;
        $this->queryParameters['EcuInfo'] = $ecuInfo;

        return $this;
    }

    /**
     * @param string $deployGroup
     *
     * @return $this
     */
    public function setDeployGroup($deployGroup)
    {
        $this->requestParameters['DeployGroup'] = $deployGroup;
        $this->queryParameters['DeployGroup'] = $deployGroup;

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
}
