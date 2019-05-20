<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryCredentialsInfo
 *
 * @method string getOssKey()
 * @method string getMaterialType()
 * @method string getCompanyName()
 */
class QueryCredentialsInfoRequest extends \RpcAcsRequest
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
            'QueryCredentialsInfo',
            'trademark'
        );
    }

    /**
     * @param string $ossKey
     *
     * @return $this
     */
    public function setOssKey($ossKey)
    {
        $this->requestParameters['OssKey'] = $ossKey;
        $this->queryParameters['OssKey'] = $ossKey;

        return $this;
    }

    /**
     * @param string $materialType
     *
     * @return $this
     */
    public function setMaterialType($materialType)
    {
        $this->requestParameters['MaterialType'] = $materialType;
        $this->queryParameters['MaterialType'] = $materialType;

        return $this;
    }

    /**
     * @param string $companyName
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->requestParameters['CompanyName'] = $companyName;
        $this->queryParameters['CompanyName'] = $companyName;

        return $this;
    }
}
