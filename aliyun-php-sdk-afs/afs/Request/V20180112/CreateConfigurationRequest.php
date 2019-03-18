<?php

namespace afs\Request\V20180112;

/**
 * Request of CreateConfiguration
 *
 * @method string getSourceIp()
 * @method string getConfigurationName()
 * @method string getMaxPV()
 * @method string getConfigurationMethod()
 * @method string getApplyType()
 * @method string getScene()
 */
class CreateConfigurationRequest extends \RpcAcsRequest
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
            'afs',
            '2018-01-12',
            'CreateConfiguration',
            'afs'
        );
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $configurationName
     *
     * @return $this
     */
    public function setConfigurationName($configurationName)
    {
        $this->requestParameters['ConfigurationName'] = $configurationName;
        $this->queryParameters['ConfigurationName'] = $configurationName;

        return $this;
    }

    /**
     * @param string $maxPV
     *
     * @return $this
     */
    public function setMaxPV($maxPV)
    {
        $this->requestParameters['MaxPV'] = $maxPV;
        $this->queryParameters['MaxPV'] = $maxPV;

        return $this;
    }

    /**
     * @param string $configurationMethod
     *
     * @return $this
     */
    public function setConfigurationMethod($configurationMethod)
    {
        $this->requestParameters['ConfigurationMethod'] = $configurationMethod;
        $this->queryParameters['ConfigurationMethod'] = $configurationMethod;

        return $this;
    }

    /**
     * @param string $applyType
     *
     * @return $this
     */
    public function setApplyType($applyType)
    {
        $this->requestParameters['ApplyType'] = $applyType;
        $this->queryParameters['ApplyType'] = $applyType;

        return $this;
    }

    /**
     * @param string $scene
     *
     * @return $this
     */
    public function setScene($scene)
    {
        $this->requestParameters['Scene'] = $scene;
        $this->queryParameters['Scene'] = $scene;

        return $this;
    }
}
