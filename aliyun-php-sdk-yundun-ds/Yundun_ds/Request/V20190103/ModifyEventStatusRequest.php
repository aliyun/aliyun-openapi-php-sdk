<?php

namespace Yundun_ds\Request\V20190103;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyEventStatus
 *
 * @method string getSourceIp()
 * @method string getBacked()
 * @method string getFeatureType()
 * @method string getDealReason()
 * @method string getId()
 * @method string getLang()
 * @method string getStatus()
 */
class ModifyEventStatusRequest extends \RpcAcsRequest
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
            'ModifyEventStatus',
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
     * @param string $backed
     *
     * @return $this
     */
    public function setBacked($backed)
    {
        $this->requestParameters['Backed'] = $backed;
        $this->queryParameters['Backed'] = $backed;

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
     * @param string $dealReason
     *
     * @return $this
     */
    public function setDealReason($dealReason)
    {
        $this->requestParameters['DealReason'] = $dealReason;
        $this->queryParameters['DealReason'] = $dealReason;

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
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }
}
