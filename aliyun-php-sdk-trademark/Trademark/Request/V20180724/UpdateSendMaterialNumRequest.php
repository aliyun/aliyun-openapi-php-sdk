<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateSendMaterialNum
 *
 * @method string getNum()
 * @method string getBizId()
 * @method string getOperateType()
 */
class UpdateSendMaterialNumRequest extends \RpcAcsRequest
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
            'UpdateSendMaterialNum',
            'trademark'
        );
    }

    /**
     * @param string $num
     *
     * @return $this
     */
    public function setNum($num)
    {
        $this->requestParameters['Num'] = $num;
        $this->queryParameters['Num'] = $num;

        return $this;
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
     * @param string $operateType
     *
     * @return $this
     */
    public function setOperateType($operateType)
    {
        $this->requestParameters['OperateType'] = $operateType;
        $this->queryParameters['OperateType'] = $operateType;

        return $this;
    }
}
