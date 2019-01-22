<?php

namespace ROS\Request\V20150901;

/**
 * Request of WaitConditions
 *
 * @method string getresource()
 * @method string getsignature()
 * @method string getstackid()
 * @method string getexpire()
 * @method string getstackname()
 */
class WaitConditionsRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/waitcondition';

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
            'ROS',
            '2015-09-01',
            'WaitConditions'
        );
    }

    /**
     * @param string $resource
     *
     * @return $this
     */
    public function setresource($resource)
    {
        $this->requestParameters['resource'] = $resource;
        $this->queryParameters['resource'] = $resource;

        return $this;
    }

    /**
     * @param string $signature
     *
     * @return $this
     */
    public function setsignature($signature)
    {
        $this->requestParameters['signature'] = $signature;
        $this->queryParameters['signature'] = $signature;

        return $this;
    }

    /**
     * @param string $stackid
     *
     * @return $this
     */
    public function setstackid($stackid)
    {
        $this->requestParameters['stackid'] = $stackid;
        $this->queryParameters['stackid'] = $stackid;

        return $this;
    }

    /**
     * @param string $expire
     *
     * @return $this
     */
    public function setexpire($expire)
    {
        $this->requestParameters['expire'] = $expire;
        $this->queryParameters['expire'] = $expire;

        return $this;
    }

    /**
     * @param string $stackname
     *
     * @return $this
     */
    public function setstackname($stackname)
    {
        $this->requestParameters['stackname'] = $stackname;
        $this->queryParameters['stackname'] = $stackname;

        return $this;
    }
}
