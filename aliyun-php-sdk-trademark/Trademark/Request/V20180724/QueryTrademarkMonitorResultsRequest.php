<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryTrademarkMonitorResults
 *
 * @method string getActionType()
 * @method string getTmName()
 * @method string getApplyYear()
 * @method string getPageSize()
 * @method string getProcedureStatus()
 * @method string getRuleId()
 * @method string getClassification()
 * @method string getPageNum()
 * @method string getRegistrationNumber()
 */
class QueryTrademarkMonitorResultsRequest extends \RpcAcsRequest
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
            'Trademark',
            '2018-07-24',
            'QueryTrademarkMonitorResults',
            'trademark'
        );
    }

    /**
     * @param string $actionType
     *
     * @return $this
     */
    public function setActionType($actionType)
    {
        $this->requestParameters['ActionType'] = $actionType;
        $this->queryParameters['ActionType'] = $actionType;

        return $this;
    }

    /**
     * @param string $tmName
     *
     * @return $this
     */
    public function setTmName($tmName)
    {
        $this->requestParameters['TmName'] = $tmName;
        $this->queryParameters['TmName'] = $tmName;

        return $this;
    }

    /**
     * @param string $applyYear
     *
     * @return $this
     */
    public function setApplyYear($applyYear)
    {
        $this->requestParameters['ApplyYear'] = $applyYear;
        $this->queryParameters['ApplyYear'] = $applyYear;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $procedureStatus
     *
     * @return $this
     */
    public function setProcedureStatus($procedureStatus)
    {
        $this->requestParameters['ProcedureStatus'] = $procedureStatus;
        $this->queryParameters['ProcedureStatus'] = $procedureStatus;

        return $this;
    }

    /**
     * @param string $ruleId
     *
     * @return $this
     */
    public function setRuleId($ruleId)
    {
        $this->requestParameters['RuleId'] = $ruleId;
        $this->queryParameters['RuleId'] = $ruleId;

        return $this;
    }

    /**
     * @param string $classification
     *
     * @return $this
     */
    public function setClassification($classification)
    {
        $this->requestParameters['Classification'] = $classification;
        $this->queryParameters['Classification'] = $classification;

        return $this;
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param string $registrationNumber
     *
     * @return $this
     */
    public function setRegistrationNumber($registrationNumber)
    {
        $this->requestParameters['RegistrationNumber'] = $registrationNumber;
        $this->queryParameters['RegistrationNumber'] = $registrationNumber;

        return $this;
    }
}
