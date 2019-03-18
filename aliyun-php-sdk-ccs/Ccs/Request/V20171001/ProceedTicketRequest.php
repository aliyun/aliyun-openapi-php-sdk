<?php

namespace Ccs\Request\V20171001;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ProceedTicket
 *
 * @method string getMemo()
 * @method string getId()
 * @method string getCcsInstanceId()
 * @method string getOperation()
 * @method string getOperatorId()
 */
class ProceedTicketRequest extends \RpcAcsRequest
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
            'Ccs',
            '2017-10-01',
            'ProceedTicket',
            'ccs'
        );
    }

    /**
     * @param string $memo
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->requestParameters['Memo'] = $memo;
        $this->queryParameters['Memo'] = $memo;

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
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function setCcsInstanceId($ccsInstanceId)
    {
        $this->requestParameters['CcsInstanceId'] = $ccsInstanceId;
        $this->queryParameters['CcsInstanceId'] = $ccsInstanceId;

        return $this;
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
     * @param string $operatorId
     *
     * @return $this
     */
    public function setOperatorId($operatorId)
    {
        $this->requestParameters['OperatorId'] = $operatorId;
        $this->queryParameters['OperatorId'] = $operatorId;

        return $this;
    }
}
