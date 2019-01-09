<?php

namespace imm\Request\V20170906;

/**
 * Request of PutProject
 *
 * @method string getCU()
 * @method string getServiceRole()
 * @method string getProject()
 * @method string getBillingType()
 * @method string getType()
 */
class PutProjectRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'PutProject',
            'imm'
        );
    }

    /**
     * @param string $cU
     *
     * @return $this
     */
    public function setCU($cU)
    {
        $this->requestParameters['CU'] = $cU;
        $this->queryParameters['CU'] = $cU;

        return $this;
    }

    /**
     * @param string $serviceRole
     *
     * @return $this
     */
    public function setServiceRole($serviceRole)
    {
        $this->requestParameters['ServiceRole'] = $serviceRole;
        $this->queryParameters['ServiceRole'] = $serviceRole;

        return $this;
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $billingType
     *
     * @return $this
     */
    public function setBillingType($billingType)
    {
        $this->requestParameters['BillingType'] = $billingType;
        $this->queryParameters['BillingType'] = $billingType;

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
