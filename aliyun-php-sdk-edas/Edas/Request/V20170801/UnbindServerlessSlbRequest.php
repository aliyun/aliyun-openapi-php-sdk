<?php

namespace Edas\Request\V20170801;

/**
 * Request of UnbindServerlessSlb
 *
 * @method string getIntranet()
 * @method string getAppId()
 * @method string getInternet()
 */
class UnbindServerlessSlbRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/k8s/acs/serverless_slb_binding';

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
            'UnbindServerlessSlb'
        );
    }

    /**
     * @param string $intranet
     *
     * @return $this
     */
    public function setIntranet($intranet)
    {
        $this->requestParameters['Intranet'] = $intranet;
        $this->queryParameters['Intranet'] = $intranet;

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
     * @param string $internet
     *
     * @return $this
     */
    public function setInternet($internet)
    {
        $this->requestParameters['Internet'] = $internet;
        $this->queryParameters['Internet'] = $internet;

        return $this;
    }
}
