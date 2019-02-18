<?php

namespace Edas\Request\V20170801;

/**
 * Request of UpdateApplicationBaseInfo
 *
 * @method string getAppName()
 * @method string getAppId()
 * @method string getdesc()
 */
class UpdateApplicationBaseInfoRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/app/update_app_info';

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
            'UpdateApplicationBaseInfo'
        );
    }

    /**
     * @param string $appName
     *
     * @return $this
     */
    public function setAppName($appName)
    {
        $this->requestParameters['AppName'] = $appName;
        $this->queryParameters['AppName'] = $appName;

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
     * @param string $desc
     *
     * @return $this
     */
    public function setdesc($desc)
    {
        $this->requestParameters['desc'] = $desc;
        $this->queryParameters['desc'] = $desc;

        return $this;
    }
}
