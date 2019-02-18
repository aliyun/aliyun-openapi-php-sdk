<?php

namespace Edas\Request\V20170801;

/**
 * Request of UpdateK8sSlb
 *
 * @method string getSlbProtocol()
 * @method string getPort()
 * @method string getAppId()
 * @method string getClusterId()
 * @method string getType()
 * @method string getTargetPort()
 */
class UpdateK8sSlbRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/k8s/acs/k8s_slb_binding';

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'UpdateK8sSlb'
        );
    }

    /**
     * @param string $slbProtocol
     *
     * @return $this
     */
    public function setSlbProtocol($slbProtocol)
    {
        $this->requestParameters['SlbProtocol'] = $slbProtocol;
        $this->queryParameters['SlbProtocol'] = $slbProtocol;

        return $this;
    }

    /**
     * @param string $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->requestParameters['Port'] = $port;
        $this->queryParameters['Port'] = $port;

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

    /**
     * @param string $targetPort
     *
     * @return $this
     */
    public function setTargetPort($targetPort)
    {
        $this->requestParameters['TargetPort'] = $targetPort;
        $this->queryParameters['TargetPort'] = $targetPort;

        return $this;
    }
}
