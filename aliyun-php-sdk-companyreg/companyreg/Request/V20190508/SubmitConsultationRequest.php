<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SubmitConsultation
 *
 * @method string getData()
 * @method string getBizCode()
 * @method string getConsultRequestId()
 * @method string getVcode()
 */
class SubmitConsultationRequest extends \RpcAcsRequest
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
            'companyreg',
            '2019-05-08',
            'SubmitConsultation',
            'companyreg'
        );
    }

    /**
     * @param string $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->requestParameters['Data'] = $data;
        $this->queryParameters['Data'] = $data;

        return $this;
    }

    /**
     * @param string $bizCode
     *
     * @return $this
     */
    public function setBizCode($bizCode)
    {
        $this->requestParameters['BizCode'] = $bizCode;
        $this->queryParameters['BizCode'] = $bizCode;

        return $this;
    }

    /**
     * @param string $consultRequestId
     *
     * @return $this
     */
    public function setConsultRequestId($consultRequestId)
    {
        $this->requestParameters['ConsultRequestId'] = $consultRequestId;
        $this->queryParameters['ConsultRequestId'] = $consultRequestId;

        return $this;
    }

    /**
     * @param string $vcode
     *
     * @return $this
     */
    public function setVcode($vcode)
    {
        $this->requestParameters['Vcode'] = $vcode;
        $this->queryParameters['Vcode'] = $vcode;

        return $this;
    }
}
