<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateDeployConfig
 *
 * @method string getCodePath()
 * @method array getConfigMapLists()
 * @method string getConfigMap()
 * @method string getStatefulSet()
 * @method string getAppId()
 * @method array getSecretLists()
 * @method string getId()
 * @method string getDeployment()
 */
class UpdateDeployConfigRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'UpdateDeployConfig',
            'retailcloud'
        );
    }

    /**
     * @param string $codePath
     *
     * @return $this
     */
    public function setCodePath($codePath)
    {
        $this->requestParameters['CodePath'] = $codePath;
        $this->queryParameters['CodePath'] = $codePath;

        return $this;
    }

    /**
     * @param array $configMapList
     *
     * @return $this
     */
	public function setConfigMapLists(array $configMapList)
	{
	    $this->requestParameters['ConfigMapLists'] = $configMapList;
		foreach ($configMapList as $i => $iValue) {
			$this->queryParameters['ConfigMapList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $configMap
     *
     * @return $this
     */
    public function setConfigMap($configMap)
    {
        $this->requestParameters['ConfigMap'] = $configMap;
        $this->queryParameters['ConfigMap'] = $configMap;

        return $this;
    }

    /**
     * @param string $statefulSet
     *
     * @return $this
     */
    public function setStatefulSet($statefulSet)
    {
        $this->requestParameters['StatefulSet'] = $statefulSet;
        $this->queryParameters['StatefulSet'] = $statefulSet;

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
     * @param array $secretList
     *
     * @return $this
     */
	public function setSecretLists(array $secretList)
	{
	    $this->requestParameters['SecretLists'] = $secretList;
		foreach ($secretList as $i => $iValue) {
			$this->queryParameters['SecretList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }

    /**
     * @param string $deployment
     *
     * @return $this
     */
    public function setDeployment($deployment)
    {
        $this->requestParameters['Deployment'] = $deployment;
        $this->queryParameters['Deployment'] = $deployment;

        return $this;
    }
}
