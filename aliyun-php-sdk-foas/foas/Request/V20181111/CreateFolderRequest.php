<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateFolder
 *
 * @method string getpath()
 * @method string getprojectName()
 */
class CreateFolderRequest extends \RoaAcsRequest
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
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'CreateFolder',
            'foas'
        );
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function setpath($path)
    {
        $this->requestParameters['path'] = $path;
        $this->queryParameters['path'] = $path;

        return $this;
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
}
