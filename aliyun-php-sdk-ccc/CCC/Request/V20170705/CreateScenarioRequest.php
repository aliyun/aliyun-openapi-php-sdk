<?php

namespace CCC\Request\V20170705;

/**
 * Request of CreateScenario
 *
 * @method string getInstanceId()
 * @method array getSurveysJsons()
 * @method string getStrategyJson()
 * @method string getName()
 * @method string getDescription()
 * @method string getType()
 */
class CreateScenarioRequest extends \RpcAcsRequest
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
            'CreateScenario'
        );
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
     * @param array $surveysJsons
     *
     * @return $this
     */
    public function setSurveysJsons(array $surveysJsons)
    {
        $this->requestParameters['SurveysJsons'] = $surveysJsons;
        foreach ($surveysJsons as $i => $iValue) {
            $this->queryParameters['SurveysJson.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $strategyJson
     *
     * @return $this
     */
    public function setStrategyJson($strategyJson)
    {
        $this->requestParameters['StrategyJson'] = $strategyJson;
        $this->queryParameters['StrategyJson'] = $strategyJson;

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
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }
}
