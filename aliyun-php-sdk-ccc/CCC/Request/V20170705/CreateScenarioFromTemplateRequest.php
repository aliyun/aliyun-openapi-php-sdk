<?php

namespace CCC\Request\V20170705;

/**
 * Request of CreateScenarioFromTemplate
 *
 * @method string getVariables()
 * @method string getInstanceId()
 * @method string getName()
 * @method string getDescription()
 * @method string getTemplateId()
 */
class CreateScenarioFromTemplateRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'CreateScenarioFromTemplate'
        );
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
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

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
}
