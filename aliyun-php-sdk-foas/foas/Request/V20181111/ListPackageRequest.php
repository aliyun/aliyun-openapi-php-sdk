<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListPackage
 *
 * @method string getprojectName()
 * @method string getpackageName()
 * @method string getpageSize()
 * @method string getpageIndex()
 * @method string gettag()
 * @method string gettype()
 */
class ListPackageRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects/[projectName]/packages';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'ListPackage',
            'foas'
        );
    }

    /**
     * @param string $projectName
     *
     * @return $this
     */
    public function setprojectName($projectName)
    {
        $this->requestParameters['projectName'] = $projectName;
        $this->pathParameters['projectName'] = $projectName;

        return $this;
    }

    /**
     * @param string $packageName
     *
     * @return $this
     */
    public function setpackageName($packageName)
    {
        $this->requestParameters['packageName'] = $packageName;
        $this->queryParameters['packageName'] = $packageName;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setpageSize($pageSize)
    {
        $this->requestParameters['pageSize'] = $pageSize;
        $this->queryParameters['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $pageIndex
     *
     * @return $this
     */
    public function setpageIndex($pageIndex)
    {
        $this->requestParameters['pageIndex'] = $pageIndex;
        $this->queryParameters['pageIndex'] = $pageIndex;

        return $this;
    }

    /**
     * @param string $tag
     *
     * @return $this
     */
    public function settag($tag)
    {
        $this->requestParameters['tag'] = $tag;
        $this->queryParameters['tag'] = $tag;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function settype($type)
    {
        $this->requestParameters['type'] = $type;
        $this->queryParameters['type'] = $type;

        return $this;
    }
}
