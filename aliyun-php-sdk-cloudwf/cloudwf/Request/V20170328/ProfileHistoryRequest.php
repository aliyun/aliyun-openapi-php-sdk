<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ProfileHistory
 *
 * @method string getIdtype()
 * @method string getEndMonth()
 * @method string getBeginMonth()
 * @method string getAgsid()
 */
class ProfileHistoryRequest extends \RpcAcsRequest
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
            'ProfileHistory',
            'cloudwf'
        );
    }

    /**
     * @param string $idtype
     *
     * @return $this
     */
    public function setIdtype($idtype)
    {
        $this->requestParameters['Idtype'] = $idtype;
        $this->queryParameters['Idtype'] = $idtype;

        return $this;
    }

    /**
     * @param string $endMonth
     *
     * @return $this
     */
    public function setEndMonth($endMonth)
    {
        $this->requestParameters['EndMonth'] = $endMonth;
        $this->queryParameters['EndMonth'] = $endMonth;

        return $this;
    }

    /**
     * @param string $beginMonth
     *
     * @return $this
     */
    public function setBeginMonth($beginMonth)
    {
        $this->requestParameters['BeginMonth'] = $beginMonth;
        $this->queryParameters['BeginMonth'] = $beginMonth;

        return $this;
    }

    /**
     * @param string $agsid
     *
     * @return $this
     */
    public function setAgsid($agsid)
    {
        $this->requestParameters['Agsid'] = $agsid;
        $this->queryParameters['Agsid'] = $agsid;

        return $this;
    }
}
