<?php

namespace Cloudauth\Request\V20180916;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SubmitMaterials
 *
 * @method string getResourceOwnerId()
 * @method string getSourceIp()
 * @method array getMaterials()
 * @method string getVerifyToken()
 */
class SubmitMaterialsRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'Cloudauth',
            '2018-09-16',
            'SubmitMaterials',
            'cloudauth'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param array $material
     *
     * @return $this
     */
    public function setMaterials(array $material)
    {
        $this->requestParameters['Materials'] = $material;
        foreach ($material as $depth1 => $depth1Value) {
            $this->queryParameters['Material.' . ($depth1 + 1) . '.MaterialType'] = $depth1Value['MaterialType'];
            $this->queryParameters['Material.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }

    /**
     * @param string $verifyToken
     *
     * @return $this
     */
    public function setVerifyToken($verifyToken)
    {
        $this->requestParameters['VerifyToken'] = $verifyToken;
        $this->queryParameters['VerifyToken'] = $verifyToken;

        return $this;
    }
}
