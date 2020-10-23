<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetDRMLicense
 *
 * @method string getProject()
 * @method string getDRMType()
 * @method string getDRMLicense()
 */
class GetDRMLicenseRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'GetDRMLicense',
            'imm'
        );
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $dRMType
     *
     * @return $this
     */
    public function setDRMType($dRMType)
    {
        $this->requestParameters['DRMType'] = $dRMType;
        $this->queryParameters['DRMType'] = $dRMType;

        return $this;
    }

    /**
     * @param string $dRMLicense
     *
     * @return $this
     */
    public function setDRMLicense($dRMLicense)
    {
        $this->requestParameters['DRMLicense'] = $dRMLicense;
        $this->queryParameters['DRMLicense'] = $dRMLicense;

        return $this;
    }
}
