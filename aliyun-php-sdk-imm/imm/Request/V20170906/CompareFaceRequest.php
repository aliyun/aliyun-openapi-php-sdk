<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CompareFace
 *
 * @method string getSrcUriB()
 * @method string getSrcUriA()
 * @method string getProject()
 */
class CompareFaceRequest extends \RpcAcsRequest
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
            'CompareFace',
            'imm'
        );
    }

    /**
     * @param string $srcUriB
     *
     * @return $this
     */
    public function setSrcUriB($srcUriB)
    {
        $this->requestParameters['SrcUriB'] = $srcUriB;
        $this->queryParameters['SrcUriB'] = $srcUriB;

        return $this;
    }

    /**
     * @param string $srcUriA
     *
     * @return $this
     */
    public function setSrcUriA($srcUriA)
    {
        $this->requestParameters['SrcUriA'] = $srcUriA;
        $this->queryParameters['SrcUriA'] = $srcUriA;

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
}
