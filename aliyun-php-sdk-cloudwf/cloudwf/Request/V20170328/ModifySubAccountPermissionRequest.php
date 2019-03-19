<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifySubAccountPermission
 *
 * @method array getShopGroupIdss()
 * @method array getShopIdss()
 * @method string getPagePermission()
 * @method string getId()
 * @method array getBusinessIdss()
 */
class ModifySubAccountPermissionRequest extends \RpcAcsRequest
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
            'ModifySubAccountPermission',
            'cloudwf'
        );
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function setShopGroupIdss(array $value)
    {
        $this->requestParameters['ShopGroupIdss'] = $value;
        foreach ($value as $i => $iValue) {
            $this->queryParameters['ShopGroupIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function setShopIdss(array $value)
    {
        $this->requestParameters['ShopIdss'] = $value;
        foreach ($value as $i => $iValue) {
            $this->queryParameters['ShopIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $pagePermission
     *
     * @return $this
     */
    public function setPagePermission($pagePermission)
    {
        $this->requestParameters['PagePermission'] = $pagePermission;
        $this->queryParameters['PagePermission'] = $pagePermission;

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

    /**
     * @param array $value
     *
     * @return $this
     */
    public function setBusinessIdss(array $value)
    {
        $this->requestParameters['BusinessIdss'] = $value;
        foreach ($value as $i => $iValue) {
            $this->queryParameters['BusinessIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
