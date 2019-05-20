<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BindMaterial
 *
 * @method string getBizId()
 * @method string getMaterialId()
 * @method string getLoaOssKey()
 */
class BindMaterialRequest extends \RpcAcsRequest
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
            'BindMaterial',
            'trademark'
        );
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }

    /**
     * @param string $materialId
     *
     * @return $this
     */
    public function setMaterialId($materialId)
    {
        $this->requestParameters['MaterialId'] = $materialId;
        $this->queryParameters['MaterialId'] = $materialId;

        return $this;
    }

    /**
     * @param string $loaOssKey
     *
     * @return $this
     */
    public function setLoaOssKey($loaOssKey)
    {
        $this->requestParameters['LoaOssKey'] = $loaOssKey;
        $this->queryParameters['LoaOssKey'] = $loaOssKey;

        return $this;
    }
}
