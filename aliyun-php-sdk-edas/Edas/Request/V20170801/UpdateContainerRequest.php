<?php

namespace Edas\Request\V20170801;

/**
 * Request of UpdateContainer
 *
 * @method string getBuildPackId()
 * @method string getAppId()
 */
class UpdateContainerRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/changeorder/co_update_container';

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
            'UpdateContainer'
        );
    }

    /**
     * @param string $buildPackId
     *
     * @return $this
     */
    public function setBuildPackId($buildPackId)
    {
        $this->requestParameters['BuildPackId'] = $buildPackId;
        $this->queryParameters['BuildPackId'] = $buildPackId;

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
