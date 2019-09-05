<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeletePackage
 *
 * @method string getprojectName()
 * @method string getpackageName()
 */
class DeletePackageRequest extends \RoaAcsRequest
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
    protected $method = 'DELETE';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'DeletePackage',
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
        $this->pathParameters['packageName'] = $packageName;

        return $this;
    }
}
