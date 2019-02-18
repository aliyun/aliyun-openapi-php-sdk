<?php

namespace Edas\Request\V20170801;

/**
 * Request of ListUserDefineRegion
 *
 * @method string getDebugEnable()
 */
class ListUserDefineRegionRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/user_region_defs';

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
            'ListUserDefineRegion'
        );
    }

    /**
     * @param string $debugEnable
     *
     * @return $this
     */
    public function setDebugEnable($debugEnable)
    {
        $this->requestParameters['DebugEnable'] = $debugEnable;
        $this->queryParameters['DebugEnable'] = $debugEnable;

        return $this;
    }
}
