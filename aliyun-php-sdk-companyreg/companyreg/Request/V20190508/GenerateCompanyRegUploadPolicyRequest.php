<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GenerateCompanyRegUploadPolicy
 *
 * @method string getData()
 * @method string getBizCode()
 * @method string getBizSubCode()
 */
class GenerateCompanyRegUploadPolicyRequest extends \RpcAcsRequest
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
            'GenerateCompanyRegUploadPolicy',
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
     * @param string $bizSubCode
     *
     * @return $this
     */
    public function setBizSubCode($bizSubCode)
    {
        $this->requestParameters['BizSubCode'] = $bizSubCode;
        $this->queryParameters['BizSubCode'] = $bizSubCode;

        return $this;
    }
}
