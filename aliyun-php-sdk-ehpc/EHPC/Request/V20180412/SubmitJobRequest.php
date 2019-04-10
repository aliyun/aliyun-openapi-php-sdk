<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SubmitJob
 *
 * @method string getStderrRedirectPath()
 * @method string getVariables()
 * @method string getRunasUserPassword()
 * @method string getPostCmdLine()
 * @method string getRunasUser()
 * @method string getClusterId()
 * @method string getReRunable()
 * @method string getPriority()
 * @method string getCommandLine()
 * @method string getJobQueue()
 * @method string getArrayRequest()
 * @method string getUnzipCmd()
 * @method string getPackagePath()
 * @method string getInputFileUrl()
 * @method string getName()
 * @method string getStdoutRedirectPath()
 * @method string getContainerId()
 */
class SubmitJobRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'SubmitJob',
            'ehs'
        );
    }

    /**
     * @param string $stderrRedirectPath
     *
     * @return $this
     */
    public function setStderrRedirectPath($stderrRedirectPath)
    {
        $this->requestParameters['StderrRedirectPath'] = $stderrRedirectPath;
        $this->queryParameters['StderrRedirectPath'] = $stderrRedirectPath;

        return $this;
    }

    /**
     * @param string $variables
     *
     * @return $this
     */
    public function setVariables($variables)
    {
        $this->requestParameters['Variables'] = $variables;
        $this->queryParameters['Variables'] = $variables;

        return $this;
    }

    /**
     * @param string $runasUserPassword
     *
     * @return $this
     */
    public function setRunasUserPassword($runasUserPassword)
    {
        $this->requestParameters['RunasUserPassword'] = $runasUserPassword;
        $this->queryParameters['RunasUserPassword'] = $runasUserPassword;

        return $this;
    }

    /**
     * @param string $postCmdLine
     *
     * @return $this
     */
    public function setPostCmdLine($postCmdLine)
    {
        $this->requestParameters['PostCmdLine'] = $postCmdLine;
        $this->queryParameters['PostCmdLine'] = $postCmdLine;

        return $this;
    }

    /**
     * @param string $runasUser
     *
     * @return $this
     */
    public function setRunasUser($runasUser)
    {
        $this->requestParameters['RunasUser'] = $runasUser;
        $this->queryParameters['RunasUser'] = $runasUser;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $reRunable
     *
     * @return $this
     */
    public function setReRunable($reRunable)
    {
        $this->requestParameters['ReRunable'] = $reRunable;
        $this->queryParameters['ReRunable'] = $reRunable;

        return $this;
    }

    /**
     * @param string $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->requestParameters['Priority'] = $priority;
        $this->queryParameters['Priority'] = $priority;

        return $this;
    }

    /**
     * @param string $commandLine
     *
     * @return $this
     */
    public function setCommandLine($commandLine)
    {
        $this->requestParameters['CommandLine'] = $commandLine;
        $this->queryParameters['CommandLine'] = $commandLine;

        return $this;
    }

    /**
     * @param string $jobQueue
     *
     * @return $this
     */
    public function setJobQueue($jobQueue)
    {
        $this->requestParameters['JobQueue'] = $jobQueue;
        $this->queryParameters['JobQueue'] = $jobQueue;

        return $this;
    }

    /**
     * @param string $arrayRequest
     *
     * @return $this
     */
    public function setArrayRequest($arrayRequest)
    {
        $this->requestParameters['ArrayRequest'] = $arrayRequest;
        $this->queryParameters['ArrayRequest'] = $arrayRequest;

        return $this;
    }

    /**
     * @param string $unzipCmd
     *
     * @return $this
     */
    public function setUnzipCmd($unzipCmd)
    {
        $this->requestParameters['UnzipCmd'] = $unzipCmd;
        $this->queryParameters['UnzipCmd'] = $unzipCmd;

        return $this;
    }

    /**
     * @param string $packagePath
     *
     * @return $this
     */
    public function setPackagePath($packagePath)
    {
        $this->requestParameters['PackagePath'] = $packagePath;
        $this->queryParameters['PackagePath'] = $packagePath;

        return $this;
    }

    /**
     * @param string $inputFileUrl
     *
     * @return $this
     */
    public function setInputFileUrl($inputFileUrl)
    {
        $this->requestParameters['InputFileUrl'] = $inputFileUrl;
        $this->queryParameters['InputFileUrl'] = $inputFileUrl;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $stdoutRedirectPath
     *
     * @return $this
     */
    public function setStdoutRedirectPath($stdoutRedirectPath)
    {
        $this->requestParameters['StdoutRedirectPath'] = $stdoutRedirectPath;
        $this->queryParameters['StdoutRedirectPath'] = $stdoutRedirectPath;

        return $this;
    }

    /**
     * @param string $containerId
     *
     * @return $this
     */
    public function setContainerId($containerId)
    {
        $this->requestParameters['ContainerId'] = $containerId;
        $this->queryParameters['ContainerId'] = $containerId;

        return $this;
    }
}
