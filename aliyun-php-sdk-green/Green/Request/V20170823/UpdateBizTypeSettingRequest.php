<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateBizTypeSetting
 *
 * @method string getAntispam()
 * @method string getPorn()
 * @method string getSourceIp()
 * @method string getTerrorism()
 * @method string getBizTypeName()
 * @method string getAd()
 * @method string getResourceType()
 */
class UpdateBizTypeSettingRequest extends \RpcAcsRequest
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
            'Green',
            '2017-08-23',
            'UpdateBizTypeSetting',
            'green'
        );
    }

    /**
     * @param string $antispam
     *
     * @return $this
     */
    public function setAntispam($antispam)
    {
        $this->requestParameters['Antispam'] = $antispam;
        $this->queryParameters['Antispam'] = $antispam;

        return $this;
    }

    /**
     * @param string $porn
     *
     * @return $this
     */
    public function setPorn($porn)
    {
        $this->requestParameters['Porn'] = $porn;
        $this->queryParameters['Porn'] = $porn;

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
     * @param string $terrorism
     *
     * @return $this
     */
    public function setTerrorism($terrorism)
    {
        $this->requestParameters['Terrorism'] = $terrorism;
        $this->queryParameters['Terrorism'] = $terrorism;

        return $this;
    }

    /**
     * @param string $bizTypeName
     *
     * @return $this
     */
    public function setBizTypeName($bizTypeName)
    {
        $this->requestParameters['BizTypeName'] = $bizTypeName;
        $this->queryParameters['BizTypeName'] = $bizTypeName;

        return $this;
    }

    /**
     * @param string $ad
     *
     * @return $this
     */
    public function setAd($ad)
    {
        $this->requestParameters['Ad'] = $ad;
        $this->queryParameters['Ad'] = $ad;

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
}
