<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdatePackage
 *
 * @method string getprojectName()
 * @method string getossBucket()
 * @method string getossOwner()
 * @method string getpackageName()
 * @method string getossEndpoint()
 * @method string getdescription()
 * @method string gettag()
 * @method string getoriginName()
 * @method string getossPath()
 * @method string getmd5()
 */
class UpdatePackageRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects/[projectName]/packages/[packageName]';

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'UpdatePackage',
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
     * @param string $ossBucket
     *
     * @return $this
     */
    public function setossBucket($ossBucket)
    {
        $this->requestParameters['ossBucket'] = $ossBucket;
        $this->queryParameters['ossBucket'] = $ossBucket;

        return $this;
    }

    /**
     * @param string $ossOwner
     *
     * @return $this
     */
    public function setossOwner($ossOwner)
    {
        $this->requestParameters['ossOwner'] = $ossOwner;
        $this->queryParameters['ossOwner'] = $ossOwner;

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
        $this->pathParameters['packageName'] = $packageName;

        return $this;
    }

    /**
     * @param string $ossEndpoint
     *
     * @return $this
     */
    public function setossEndpoint($ossEndpoint)
    {
        $this->requestParameters['ossEndpoint'] = $ossEndpoint;
        $this->queryParameters['ossEndpoint'] = $ossEndpoint;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setdescription($description)
    {
        $this->requestParameters['description'] = $description;
        $this->queryParameters['description'] = $description;

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
     * @param string $originName
     *
     * @return $this
     */
    public function setoriginName($originName)
    {
        $this->requestParameters['originName'] = $originName;
        $this->queryParameters['originName'] = $originName;

        return $this;
    }

    /**
     * @param string $ossPath
     *
     * @return $this
     */
    public function setossPath($ossPath)
    {
        $this->requestParameters['ossPath'] = $ossPath;
        $this->queryParameters['ossPath'] = $ossPath;

        return $this;
    }

    /**
     * @param string $md5
     *
     * @return $this
     */
    public function setmd5($md5)
    {
        $this->requestParameters['md5'] = $md5;
        $this->queryParameters['md5'] = $md5;

        return $this;
    }
}
