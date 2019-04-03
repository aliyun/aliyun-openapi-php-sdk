<?php

namespace Sas\Request\V20181203;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of StartBaselineSecurityCheck
 *
 * @method string getResourceOwnerId()
 * @method array getAssetss()
 * @method string getSourceIp()
 * @method array getItemIdss()
 * @method string getLang()
 * @method string getType()
 */
class StartBaselineSecurityCheckRequest extends \RpcAcsRequest
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
            'Sas',
            '2018-12-03',
            'StartBaselineSecurityCheck',
            'sas'
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
     * @param array $assets
     *
     * @return $this
     */
    public function setAssetss(array $assets)
    {
        $this->requestParameters['Assetss'] = $assets;
        foreach ($assets as $i => $iValue) {
            $this->queryParameters['Assets.' . ($i + 1)] = $iValue;
        }

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
     * @param array $itemIds
     *
     * @return $this
     */
    public function setItemIdss(array $itemIds)
    {
        $this->requestParameters['ItemIdss'] = $itemIds;
        foreach ($itemIds as $i => $iValue) {
            $this->queryParameters['ItemIds.' . ($i + 1)] = $iValue;
        }

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
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }
}
