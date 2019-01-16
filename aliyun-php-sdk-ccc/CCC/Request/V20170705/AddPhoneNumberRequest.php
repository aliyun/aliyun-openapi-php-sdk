<?php

namespace CCC\Request\V20170705;

/**
 * Request of AddPhoneNumber
 *
 * @method string getContactFlowId()
 * @method string getInstanceId()
 * @method string getUsage()
 * @method string getPhoneNumber()
 */
class AddPhoneNumberRequest extends \RpcAcsRequest
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
            'AddPhoneNumber'
        );
    }

    /**
     * @param string $contactFlowId
     *
     * @return $this
     */
    public function setContactFlowId($contactFlowId)
    {
        $this->requestParameters['ContactFlowId'] = $contactFlowId;
        $this->queryParameters['ContactFlowId'] = $contactFlowId;

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
     * @param string $usage
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->requestParameters['Usage'] = $usage;
        $this->queryParameters['Usage'] = $usage;

        return $this;
    }

    /**
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->requestParameters['PhoneNumber'] = $phoneNumber;
        $this->queryParameters['PhoneNumber'] = $phoneNumber;

        return $this;
    }
}
