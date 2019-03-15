<?php

namespace pvtz\Request\V20180101;

/**
 * Request of SetZoneRecordStatus
 *
 * @method string getRecordId()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getStatus()
 */
class SetZoneRecordStatusRequest extends \RpcAcsRequest
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
            'pvtz',
            '2018-01-01',
            'SetZoneRecordStatus',
            'pvtz'
        );
    }

    /**
     * @param string $recordId
     *
     * @return $this
     */
    public function setRecordId($recordId)
    {
        $this->requestParameters['RecordId'] = $recordId;
        $this->queryParameters['RecordId'] = $recordId;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }
}
