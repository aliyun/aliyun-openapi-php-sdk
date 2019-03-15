<?php

namespace Ubsms\Request\V20150623;

/**
 * Request of DescribeBusinessStatus
 *
 * @method string getPassword()
 * @method string getcallerBid()
 */
class DescribeBusinessStatusRequest extends \RpcAcsRequest
{

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
            'Ubsms',
            '2015-06-23',
            'DescribeBusinessStatus',
            'ubsms'
        );
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->requestParameters['Password'] = $password;
        $this->queryParameters['Password'] = $password;

        return $this;
    }

    /**
     * @param string $callerBid
     *
     * @return $this
     */
    public function setcallerBid($callerBid)
    {
        $this->requestParameters['callerBid'] = $callerBid;
        $this->queryParameters['callerBid'] = $callerBid;

        return $this;
    }
}
