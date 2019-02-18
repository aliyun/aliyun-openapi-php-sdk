<?php

namespace Edas\Request\V20170801;

/**
 * Request of CreateServerlessApplication
 *
 * @method string getWebContainer()
 * @method string getJarStartArgs()
 * @method string getMemory()
 * @method string getCommandArgs()
 * @method string getReplicas()
 * @method string getReadiness()
 * @method string getLiveness()
 * @method string getCpu()
 * @method string getEnvs()
 * @method string getPackageVersion()
 * @method string getCommand()
 * @method string getCustomHostAlias()
 * @method string getDeploy()
 * @method string getVSwitchId()
 * @method string getJdk()
 * @method string getAppDescription()
 * @method string getJarStartOptions()
 * @method string getAppName()
 * @method string getNamespaceId()
 * @method string getPackageUrl()
 * @method string getVpcId()
 * @method string getImageUrl()
 * @method string getPackageType()
 */
class CreateServerlessApplicationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/k8s/pop/pop_serverless_app_create_without_deploy';

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
            'CreateServerlessApplication'
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
     * @param string $memory
     *
     * @return $this
     */
    public function setMemory($memory)
    {
        $this->requestParameters['Memory'] = $memory;
        $this->queryParameters['Memory'] = $memory;

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
     * @param string $replicas
     *
     * @return $this
     */
    public function setReplicas($replicas)
    {
        $this->requestParameters['Replicas'] = $replicas;
        $this->queryParameters['Replicas'] = $replicas;

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
     * @param string $cpu
     *
     * @return $this
     */
    public function setCpu($cpu)
    {
        $this->requestParameters['Cpu'] = $cpu;
        $this->queryParameters['Cpu'] = $cpu;

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
     * @param string $deploy
     *
     * @return $this
     */
    public function setDeploy($deploy)
    {
        $this->requestParameters['Deploy'] = $deploy;
        $this->queryParameters['Deploy'] = $deploy;

        return $this;
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        $this->requestParameters['VSwitchId'] = $vSwitchId;
        $this->queryParameters['VSwitchId'] = $vSwitchId;

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
     * @param string $appDescription
     *
     * @return $this
     */
    public function setAppDescription($appDescription)
    {
        $this->requestParameters['AppDescription'] = $appDescription;
        $this->queryParameters['AppDescription'] = $appDescription;

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
     * @param string $appName
     *
     * @return $this
     */
    public function setAppName($appName)
    {
        $this->requestParameters['AppName'] = $appName;
        $this->queryParameters['AppName'] = $appName;

        return $this;
    }

    /**
     * @param string $namespaceId
     *
     * @return $this
     */
    public function setNamespaceId($namespaceId)
    {
        $this->requestParameters['NamespaceId'] = $namespaceId;
        $this->queryParameters['NamespaceId'] = $namespaceId;

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
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        $this->requestParameters['VpcId'] = $vpcId;
        $this->queryParameters['VpcId'] = $vpcId;

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

    /**
     * @param string $packageType
     *
     * @return $this
     */
    public function setPackageType($packageType)
    {
        $this->requestParameters['PackageType'] = $packageType;
        $this->queryParameters['PackageType'] = $packageType;

        return $this;
    }
}
