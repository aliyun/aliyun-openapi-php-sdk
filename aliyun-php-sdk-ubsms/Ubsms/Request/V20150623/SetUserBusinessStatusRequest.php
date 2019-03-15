<?php

namespace Ubsms\Request\V20150623;

/**
 * Request of SetUserBusinessStatus
 *
 * @method string getUid()
 * @method string getStatusValue()
 * @method string getService()
 * @method string getStatusKey()
 */
class SetUserBusinessStatusRequest extends \RpcAcsRequest
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
            'SetUserBusinessStatus',
            'ubsms'
        );
    }

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->requestParameters['Uid'] = $uid;
        $this->queryParameters['Uid'] = $uid;

        return $this;
    }

    /**
     * @param string $statusValue
     *
     * @return $this
     */
    public function setStatusValue($statusValue)
    {
        $this->requestParameters['StatusValue'] = $statusValue;
        $this->queryParameters['StatusValue'] = $statusValue;

        return $this;
    }

    /**
     * @param string $service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->requestParameters['Service'] = $service;
        $this->queryParameters['Service'] = $service;

        return $this;
    }

    /**
     * @param string $statusKey
     *
     * @return $this
     */
    public function setStatusKey($statusKey)
    {
        $this->requestParameters['StatusKey'] = $statusKey;
        $this->queryParameters['StatusKey'] = $statusKey;

        return $this;
    }
}
