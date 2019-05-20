<?php

namespace Yundun_ds\Request\V20190103;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyDefaultLevel
 *
 * @method string getSourceIp()
 * @method string getFeatureType()
 * @method string getDefaultId()
 * @method string getLang()
 * @method string getSensitiveIds()
 */
class ModifyDefaultLevelRequest extends \RpcAcsRequest
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
            'ModifyDefaultLevel',
            'sddp'
        );
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
     * @param string $featureType
     *
     * @return $this
     */
    public function setFeatureType($featureType)
    {
        $this->requestParameters['FeatureType'] = $featureType;
        $this->queryParameters['FeatureType'] = $featureType;

        return $this;
    }

    /**
     * @param string $defaultId
     *
     * @return $this
     */
    public function setDefaultId($defaultId)
    {
        $this->requestParameters['DefaultId'] = $defaultId;
        $this->queryParameters['DefaultId'] = $defaultId;

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
     * @param string $sensitiveIds
     *
     * @return $this
     */
    public function setSensitiveIds($sensitiveIds)
    {
        $this->requestParameters['SensitiveIds'] = $sensitiveIds;
        $this->queryParameters['SensitiveIds'] = $sensitiveIds;

        return $this;
    }
}
