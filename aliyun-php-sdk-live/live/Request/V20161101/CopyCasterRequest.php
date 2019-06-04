<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CopyCaster
 *
 * @method string getSrcCasterId()
 * @method string getCasterName()
 * @method string getClientToken()
 * @method string getOwnerId()
 */
class CopyCasterRequest extends \RpcAcsRequest
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
            'live',
            '2016-11-01',
            'CopyCaster',
            'live'
        );
    }

    /**
     * @param string $srcCasterId
     *
     * @return $this
     */
    public function setSrcCasterId($srcCasterId)
    {
        $this->requestParameters['SrcCasterId'] = $srcCasterId;
        $this->queryParameters['SrcCasterId'] = $srcCasterId;

        return $this;
    }

    /**
     * @param string $casterName
     *
     * @return $this
     */
    public function setCasterName($casterName)
    {
        $this->requestParameters['CasterName'] = $casterName;
        $this->queryParameters['CasterName'] = $casterName;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }
}
