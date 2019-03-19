<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SavePageConfigTemplate
 *
 * @method string getTempType()
 * @method string getTempDesc()
 * @method string getTempName()
 * @method string getId()
 * @method string getTempPermission()
 */
class SavePageConfigTemplateRequest extends \RpcAcsRequest
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
            'SavePageConfigTemplate',
            'cloudwf'
        );
    }

    /**
     * @param string $tempType
     *
     * @return $this
     */
    public function setTempType($tempType)
    {
        $this->requestParameters['TempType'] = $tempType;
        $this->queryParameters['TempType'] = $tempType;

        return $this;
    }

    /**
     * @param string $tempDesc
     *
     * @return $this
     */
    public function setTempDesc($tempDesc)
    {
        $this->requestParameters['TempDesc'] = $tempDesc;
        $this->queryParameters['TempDesc'] = $tempDesc;

        return $this;
    }

    /**
     * @param string $tempName
     *
     * @return $this
     */
    public function setTempName($tempName)
    {
        $this->requestParameters['TempName'] = $tempName;
        $this->queryParameters['TempName'] = $tempName;

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
     * @param string $tempPermission
     *
     * @return $this
     */
    public function setTempPermission($tempPermission)
    {
        $this->requestParameters['TempPermission'] = $tempPermission;
        $this->queryParameters['TempPermission'] = $tempPermission;

        return $this;
    }
}
