<?php

namespace imm\Request\V20170906;

/**
 * Request of UpdateProject
 *
 * @method string getNewServiceRole()
 * @method string getProject()
 * @method string getNewCU()
 */
class UpdateProjectRequest extends \RpcAcsRequest
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
            'UpdateProject',
            'imm'
        );
    }

    /**
     * @param string $newServiceRole
     *
     * @return $this
     */
    public function setNewServiceRole($newServiceRole)
    {
        $this->requestParameters['NewServiceRole'] = $newServiceRole;
        $this->queryParameters['NewServiceRole'] = $newServiceRole;

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
     * @param string $newCU
     *
     * @return $this
     */
    public function setNewCU($newCU)
    {
        $this->requestParameters['NewCU'] = $newCU;
        $this->queryParameters['NewCU'] = $newCU;

        return $this;
    }
}
