<?php

namespace Edas\Request\V20170801;

/**
 * Request of UnbindK8sSlb
 *
 * @method string getAppId()
 * @method string getClusterId()
 * @method string getType()
 */
class UnbindK8sSlbRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/k8s/acs/k8s_slb_binding';

    /**
     * @var string
     */
    protected $method = 'DELETE';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'UnbindK8sSlb'
        );
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

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }
}
