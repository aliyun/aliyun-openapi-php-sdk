<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetOfficePreviewURL
 *
 * @method string getSrcType()
 * @method string getProject()
 * @method string getUseHTTPS()
 * @method string getSrcUri()
 */
class GetOfficePreviewURLRequest extends \RpcAcsRequest
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
            'GetOfficePreviewURL',
            'imm'
        );
    }

    /**
     * @param string $srcType
     *
     * @return $this
     */
    public function setSrcType($srcType)
    {
        $this->requestParameters['SrcType'] = $srcType;
        $this->queryParameters['SrcType'] = $srcType;

        return $this;
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
     * @param string $useHTTPS
     *
     * @return $this
     */
    public function setUseHTTPS($useHTTPS)
    {
        $this->requestParameters['UseHTTPS'] = $useHTTPS;
        $this->queryParameters['UseHTTPS'] = $useHTTPS;

        return $this;
    }

    /**
     * @param string $srcUri
     *
     * @return $this
     */
    public function setSrcUri($srcUri)
    {
        $this->requestParameters['SrcUri'] = $srcUri;
        $this->queryParameters['SrcUri'] = $srcUri;

        return $this;
    }
}
