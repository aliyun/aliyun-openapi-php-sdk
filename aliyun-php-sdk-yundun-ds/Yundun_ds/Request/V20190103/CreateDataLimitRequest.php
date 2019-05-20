<?php

namespace Yundun_ds\Request\V20190103;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDataLimit
 *
 * @method string getPassword()
 * @method string getSourceIp()
 * @method string getConnector()
 * @method string getDataLimitList()
 * @method string getLang()
 * @method string getResourceType()
 * @method string getServiceRegionId()
 * @method string getParentId()
 * @method string getUserName()
 */
class CreateDataLimitRequest extends \RpcAcsRequest
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
            'Yundun-ds',
            '2019-01-03',
            'CreateDataLimit',
            'sddp'
        );
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->requestParameters['Password'] = $password;
        $this->queryParameters['Password'] = $password;

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
     * @param string $connector
     *
     * @return $this
     */
    public function setConnector($connector)
    {
        $this->requestParameters['Connector'] = $connector;
        $this->queryParameters['Connector'] = $connector;

        return $this;
    }

    /**
     * @param string $dataLimitList
     *
     * @return $this
     */
    public function setDataLimitList($dataLimitList)
    {
        $this->requestParameters['DataLimitList'] = $dataLimitList;
        $this->queryParameters['DataLimitList'] = $dataLimitList;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

        return $this;
    }

    /**
     * @param string $serviceRegionId
     *
     * @return $this
     */
    public function setServiceRegionId($serviceRegionId)
    {
        $this->requestParameters['ServiceRegionId'] = $serviceRegionId;
        $this->queryParameters['ServiceRegionId'] = $serviceRegionId;

        return $this;
    }

    /**
     * @param string $parentId
     *
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->requestParameters['ParentId'] = $parentId;
        $this->queryParameters['ParentId'] = $parentId;

        return $this;
    }

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->requestParameters['UserName'] = $userName;
        $this->queryParameters['UserName'] = $userName;

        return $this;
    }
}
