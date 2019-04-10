<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of EditJobTemplate
 *
 * @method string getStderrRedirectPath()
 * @method string getVariables()
 * @method string getRunasUser()
 * @method string getReRunable()
 * @method string getTemplateId()
 * @method string getPriority()
 * @method string getCommandLine()
 * @method string getArrayRequest()
 * @method string getPackagePath()
 * @method string getName()
 * @method string getStdoutRedirectPath()
 */
class EditJobTemplateRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'EditJobTemplate',
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
     * @param string $templateId
     *
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->requestParameters['TemplateId'] = $templateId;
        $this->queryParameters['TemplateId'] = $templateId;

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
}
