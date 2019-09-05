<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of MVFolder
 *
 * @method string getprojectName()
 * @method string getsrcPath()
 * @method string getdestPath()
 */
class MVFolderRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects/[projectName]/folders';

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
            'MVFolder',
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
     * @param string $srcPath
     *
     * @return $this
     */
    public function setsrcPath($srcPath)
    {
        $this->requestParameters['srcPath'] = $srcPath;
        $this->queryParameters['srcPath'] = $srcPath;

        return $this;
    }

    /**
     * @param string $destPath
     *
     * @return $this
     */
    public function setdestPath($destPath)
    {
        $this->requestParameters['destPath'] = $destPath;
        $this->queryParameters['destPath'] = $destPath;

        return $this;
    }
}
