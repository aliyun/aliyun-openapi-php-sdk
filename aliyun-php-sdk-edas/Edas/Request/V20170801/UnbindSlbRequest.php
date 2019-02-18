<?php

namespace Edas\Request\V20170801;

/**
 * Request of UnbindSlb
 *
 * @method string getSlbId()
 * @method string getAppId()
 * @method string getType()
 */
class UnbindSlbRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/app/unbind_slb_json';

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
            'UnbindSlb'
        );
    }

    /**
     * @param string $slbId
     *
     * @return $this
     */
    public function setSlbId($slbId)
    {
        $this->requestParameters['SlbId'] = $slbId;
        $this->queryParameters['SlbId'] = $slbId;

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
