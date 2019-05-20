<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UploadNotaryData
 *
 * @method string getUploadContext()
 * @method string getBizOrderNo()
 * @method string getNotaryType()
 */
class UploadNotaryDataRequest extends \RpcAcsRequest
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
            'Trademark',
            '2018-07-24',
            'UploadNotaryData',
            'trademark'
        );
    }

    /**
     * @param string $uploadContext
     *
     * @return $this
     */
    public function setUploadContext($uploadContext)
    {
        $this->requestParameters['UploadContext'] = $uploadContext;
        $this->queryParameters['UploadContext'] = $uploadContext;

        return $this;
    }

    /**
     * @param string $bizOrderNo
     *
     * @return $this
     */
    public function setBizOrderNo($bizOrderNo)
    {
        $this->requestParameters['BizOrderNo'] = $bizOrderNo;
        $this->queryParameters['BizOrderNo'] = $bizOrderNo;

        return $this;
    }

    /**
     * @param string $notaryType
     *
     * @return $this
     */
    public function setNotaryType($notaryType)
    {
        $this->requestParameters['NotaryType'] = $notaryType;
        $this->queryParameters['NotaryType'] = $notaryType;

        return $this;
    }
}
