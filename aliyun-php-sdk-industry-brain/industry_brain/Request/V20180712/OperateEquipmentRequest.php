<?php

namespace industry_brain\Request\V20180712;

/**
 * Request of OperateEquipment
 *
 * @method string getOperation()
 * @method string getProjectId()
 * @method string getRequestData()
 */
class OperateEquipmentRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'industry-brain',
            '2018-07-12',
            'OperateEquipment'
        );
    }

    /**
     * @param string $operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->requestParameters['Operation'] = $operation;
        $this->queryParameters['Operation'] = $operation;

        return $this;
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->requestParameters['ProjectId'] = $projectId;
        $this->queryParameters['ProjectId'] = $projectId;

        return $this;
    }

    /**
     * @param string $requestData
     *
     * @return $this
     */
    public function setRequestData($requestData)
    {
        $this->requestParameters['RequestData'] = $requestData;
        $this->queryParameters['RequestData'] = $requestData;

        return $this;
    }
}
