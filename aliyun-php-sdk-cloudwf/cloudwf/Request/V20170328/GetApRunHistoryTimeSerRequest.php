<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetApRunHistoryTimeSer
 *
 * @method string getStart()
 * @method string getEnd()
 * @method string getId()
 */
class GetApRunHistoryTimeSerRequest extends \RpcAcsRequest
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
            'GetApRunHistoryTimeSer',
            'cloudwf'
        );
    }

    /**
     * @param string $start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->requestParameters['Start'] = $start;
        $this->queryParameters['Start'] = $start;

        return $this;
    }

    /**
     * @param string $end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->requestParameters['End'] = $end;
        $this->queryParameters['End'] = $end;

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
