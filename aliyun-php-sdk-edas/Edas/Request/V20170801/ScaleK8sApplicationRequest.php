<?php

namespace Edas\Request\V20170801;

/**
 * Request of ScaleK8sApplication
 *
 * @method string getReplicas()
 * @method string getAppId()
 */
class ScaleK8sApplicationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/k8s/acs/k8s_apps';

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
            'ScaleK8sApplication'
        );
    }

    /**
     * @param string $replicas
     *
     * @return $this
     */
    public function setReplicas($replicas)
    {
        $this->requestParameters['Replicas'] = $replicas;
        $this->queryParameters['Replicas'] = $replicas;

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
