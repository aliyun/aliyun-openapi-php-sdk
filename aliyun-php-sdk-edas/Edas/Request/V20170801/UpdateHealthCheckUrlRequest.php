<?php

namespace Edas\Request\V20170801;

/**
 * Request of UpdateHealthCheckUrl
 *
 * @method string getAppId()
 * @method string gethcURL()
 */
class UpdateHealthCheckUrlRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/app/modify_hc_url';

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
            'UpdateHealthCheckUrl'
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
     * @param string $hcURL
     *
     * @return $this
     */
    public function sethcURL($hcURL)
    {
        $this->requestParameters['hcURL'] = $hcURL;
        $this->queryParameters['hcURL'] = $hcURL;

        return $this;
    }
}
