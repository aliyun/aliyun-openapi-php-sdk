<?php

namespace CCC\Request\V20170705;

/**
 * Request of CallOnlinePrivacyNumber
 *
 * @method string getTelA()
 * @method string getTelB()
 * @method string getInstanceId()
 */
class CallOnlinePrivacyNumberRequest extends \RpcAcsRequest
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
            'CallOnlinePrivacyNumber'
        );
    }

    /**
     * @param string $telA
     *
     * @return $this
     */
    public function setTelA($telA)
    {
        $this->requestParameters['TelA'] = $telA;
        $this->queryParameters['TelA'] = $telA;

        return $this;
    }

    /**
     * @param string $telB
     *
     * @return $this
     */
    public function setTelB($telB)
    {
        $this->requestParameters['TelB'] = $telB;
        $this->queryParameters['TelB'] = $telB;

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
}
