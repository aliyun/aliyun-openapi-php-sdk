<?php

namespace finmall\Request\V20180723;

/**
 * Request of AddTrialRecord
 *
 * @method string getNote()
 * @method string getEnterpriseEmail()
 * @method string getContractPhoneNumber()
 * @method string getContractName()
 * @method string getChannel()
 * @method string getEnterpriseName()
 * @method string getUserId()
 * @method string getProducts()
 * @method string getBudget()
 */
class AddTrialRecordRequest extends \RpcAcsRequest
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
            'finmall',
            '2018-07-23',
            'AddTrialRecord',
            'finmall'
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
     * @param string $enterpriseEmail
     *
     * @return $this
     */
    public function setEnterpriseEmail($enterpriseEmail)
    {
        $this->requestParameters['EnterpriseEmail'] = $enterpriseEmail;
        $this->queryParameters['EnterpriseEmail'] = $enterpriseEmail;

        return $this;
    }

    /**
     * @param string $contractPhoneNumber
     *
     * @return $this
     */
    public function setContractPhoneNumber($contractPhoneNumber)
    {
        $this->requestParameters['ContractPhoneNumber'] = $contractPhoneNumber;
        $this->queryParameters['ContractPhoneNumber'] = $contractPhoneNumber;

        return $this;
    }

    /**
     * @param string $contractName
     *
     * @return $this
     */
    public function setContractName($contractName)
    {
        $this->requestParameters['ContractName'] = $contractName;
        $this->queryParameters['ContractName'] = $contractName;

        return $this;
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->requestParameters['Channel'] = $channel;
        $this->queryParameters['Channel'] = $channel;

        return $this;
    }

    /**
     * @param string $enterpriseName
     *
     * @return $this
     */
    public function setEnterpriseName($enterpriseName)
    {
        $this->requestParameters['EnterpriseName'] = $enterpriseName;
        $this->queryParameters['EnterpriseName'] = $enterpriseName;

        return $this;
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->requestParameters['UserId'] = $userId;
        $this->queryParameters['UserId'] = $userId;

        return $this;
    }

    /**
     * @param string $products
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->requestParameters['Products'] = $products;
        $this->queryParameters['Products'] = $products;

        return $this;
    }

    /**
     * @param string $budget
     *
     * @return $this
     */
    public function setBudget($budget)
    {
        $this->requestParameters['Budget'] = $budget;
        $this->queryParameters['Budget'] = $budget;

        return $this;
    }
}
