<?php

namespace companyreg\Request\V20190508;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SubmitCommunicationNote
 *
 * @method string getNote()
 * @method string getType()
 * @method string getActionRequestId()
 * @method string getOperatorType()
 * @method string getBizCode()
 * @method string getBizId()
 */
class SubmitCommunicationNoteRequest extends \RpcAcsRequest
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
            'companyreg',
            '2019-05-08',
            'SubmitCommunicationNote',
            'companyreg'
        );
    }

    /**
     * @param string $note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->requestParameters['Note'] = $note;
        $this->queryParameters['Note'] = $note;

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

    /**
     * @param string $actionRequestId
     *
     * @return $this
     */
    public function setActionRequestId($actionRequestId)
    {
        $this->requestParameters['ActionRequestId'] = $actionRequestId;
        $this->queryParameters['ActionRequestId'] = $actionRequestId;

        return $this;
    }

    /**
     * @param string $operatorType
     *
     * @return $this
     */
    public function setOperatorType($operatorType)
    {
        $this->requestParameters['OperatorType'] = $operatorType;
        $this->queryParameters['OperatorType'] = $operatorType;

        return $this;
    }

    /**
     * @param string $bizCode
     *
     * @return $this
     */
    public function setBizCode($bizCode)
    {
        $this->requestParameters['BizCode'] = $bizCode;
        $this->queryParameters['BizCode'] = $bizCode;

        return $this;
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }
}
