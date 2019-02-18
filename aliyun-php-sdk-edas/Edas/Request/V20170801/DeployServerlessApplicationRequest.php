<?php

namespace Edas\Request\V20170801;

/**
 * Request of DeployServerlessApplication
 *
 * @method string getWebContainer()
 * @method string getJarStartArgs()
 * @method string getCommandArgs()
 * @method string getReadiness()
 * @method string getBatchWaitTime()
 * @method string getLiveness()
 * @method string getEnvs()
 * @method string getPackageVersion()
 * @method string getCommand()
 * @method string getCustomHostAlias()
 * @method string getJdk()
 * @method string getJarStartOptions()
 * @method string getMinReadyInstances()
 * @method string getPackageUrl()
 * @method string getAppId()
 * @method string getImageUrl()
 */
class DeployServerlessApplicationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/k8s/pop/pop_serverless_app_deploy';

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
            'Edas',
            '2017-08-01',
            'DeployServerlessApplication'
        );
    }

    /**
     * @param string $webContainer
     *
     * @return $this
     */
    public function setWebContainer($webContainer)
    {
        $this->requestParameters['WebContainer'] = $webContainer;
        $this->queryParameters['WebContainer'] = $webContainer;

        return $this;
    }

    /**
     * @param string $jarStartArgs
     *
     * @return $this
     */
    public function setJarStartArgs($jarStartArgs)
    {
        $this->requestParameters['JarStartArgs'] = $jarStartArgs;
        $this->queryParameters['JarStartArgs'] = $jarStartArgs;

        return $this;
    }

    /**
     * @param string $commandArgs
     *
     * @return $this
     */
    public function setCommandArgs($commandArgs)
    {
        $this->requestParameters['CommandArgs'] = $commandArgs;
        $this->queryParameters['CommandArgs'] = $commandArgs;

        return $this;
    }

    /**
     * @param string $readiness
     *
     * @return $this
     */
    public function setReadiness($readiness)
    {
        $this->requestParameters['Readiness'] = $readiness;
        $this->queryParameters['Readiness'] = $readiness;

        return $this;
    }

    /**
     * @param string $batchWaitTime
     *
     * @return $this
     */
    public function setBatchWaitTime($batchWaitTime)
    {
        $this->requestParameters['BatchWaitTime'] = $batchWaitTime;
        $this->queryParameters['BatchWaitTime'] = $batchWaitTime;

        return $this;
    }

    /**
     * @param string $liveness
     *
     * @return $this
     */
    public function setLiveness($liveness)
    {
        $this->requestParameters['Liveness'] = $liveness;
        $this->queryParameters['Liveness'] = $liveness;

        return $this;
    }

    /**
     * @param string $envs
     *
     * @return $this
     */
    public function setEnvs($envs)
    {
        $this->requestParameters['Envs'] = $envs;
        $this->queryParameters['Envs'] = $envs;

        return $this;
    }

    /**
     * @param string $packageVersion
     *
     * @return $this
     */
    public function setPackageVersion($packageVersion)
    {
        $this->requestParameters['PackageVersion'] = $packageVersion;
        $this->queryParameters['PackageVersion'] = $packageVersion;

        return $this;
    }

    /**
     * @param string $command
     *
     * @return $this
     */
    public function setCommand($command)
    {
        $this->requestParameters['Command'] = $command;
        $this->queryParameters['Command'] = $command;

        return $this;
    }

    /**
     * @param string $customHostAlias
     *
     * @return $this
     */
    public function setCustomHostAlias($customHostAlias)
    {
        $this->requestParameters['CustomHostAlias'] = $customHostAlias;
        $this->queryParameters['CustomHostAlias'] = $customHostAlias;

        return $this;
    }

    /**
     * @param string $jdk
     *
     * @return $this
     */
    public function setJdk($jdk)
    {
        $this->requestParameters['Jdk'] = $jdk;
        $this->queryParameters['Jdk'] = $jdk;

        return $this;
    }

    /**
     * @param string $jarStartOptions
     *
     * @return $this
     */
    public function setJarStartOptions($jarStartOptions)
    {
        $this->requestParameters['JarStartOptions'] = $jarStartOptions;
        $this->queryParameters['JarStartOptions'] = $jarStartOptions;

        return $this;
    }

    /**
     * @param string $minReadyInstances
     *
     * @return $this
     */
    public function setMinReadyInstances($minReadyInstances)
    {
        $this->requestParameters['MinReadyInstances'] = $minReadyInstances;
        $this->queryParameters['MinReadyInstances'] = $minReadyInstances;

        return $this;
    }

    /**
     * @param string $packageUrl
     *
     * @return $this
     */
    public function setPackageUrl($packageUrl)
    {
        $this->requestParameters['PackageUrl'] = $packageUrl;
        $this->queryParameters['PackageUrl'] = $packageUrl;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->requestParameters['ImageUrl'] = $imageUrl;
        $this->queryParameters['ImageUrl'] = $imageUrl;

        return $this;
    }
}
