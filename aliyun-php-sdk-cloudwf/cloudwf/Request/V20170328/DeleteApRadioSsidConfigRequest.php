<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteApRadioSsidConfig
 *
 * @method string getInstantlyEffective()
 * @method string getId()
 */
class DeleteApRadioSsidConfigRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'DeleteApRadioSsidConfig',
            'cloudwf'
        );
    }

    /**
     * @param string $instantlyEffective
     *
     * @return $this
     */
    public function setInstantlyEffective($instantlyEffective)
    {
        $this->requestParameters['InstantlyEffective'] = $instantlyEffective;
        $this->queryParameters['InstantlyEffective'] = $instantlyEffective;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }
}
