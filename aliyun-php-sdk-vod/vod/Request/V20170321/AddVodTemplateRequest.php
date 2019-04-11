<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddVodTemplate
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getTemplateConfig()
 * @method string getTemplateType()
 * @method string getName()
 * @method string getOwnerId()
 * @method string getSubTemplateType()
 */
class AddVodTemplateRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'AddVodTemplate',
            'vod'
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
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $templateConfig
     *
     * @return $this
     */
    public function setTemplateConfig($templateConfig)
    {
        $this->requestParameters['TemplateConfig'] = $templateConfig;
        $this->queryParameters['TemplateConfig'] = $templateConfig;

        return $this;
    }

    /**
     * @param string $templateType
     *
     * @return $this
     */
    public function setTemplateType($templateType)
    {
        $this->requestParameters['TemplateType'] = $templateType;
        $this->queryParameters['TemplateType'] = $templateType;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

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

    /**
     * @param string $subTemplateType
     *
     * @return $this
     */
    public function setSubTemplateType($subTemplateType)
    {
        $this->requestParameters['SubTemplateType'] = $subTemplateType;
        $this->queryParameters['SubTemplateType'] = $subTemplateType;

        return $this;
    }
}
