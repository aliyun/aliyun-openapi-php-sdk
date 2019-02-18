<?php

namespace Edas\Request\V20170801;

/**
 * Request of GetServerlessAppConfigDetail
 *
 * @method string getAppId()
 */
class GetServerlessAppConfigDetailRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/k8s/pop/pop_serverless_app_config_detail';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'GetServerlessAppConfigDetail'
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
}
