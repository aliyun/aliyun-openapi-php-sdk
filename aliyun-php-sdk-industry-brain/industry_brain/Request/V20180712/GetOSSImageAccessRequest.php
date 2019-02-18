<?php

namespace industry_brain\Request\V20180712;

/**
 * Request of GetOSSImageAccess
 *
 * @method string getUserCode()
 * @method string getProjectId()
 */
class GetOSSImageAccessRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'industry-brain',
            '2018-07-12',
            'GetOSSImageAccess'
        );
    }

    /**
     * @param string $userCode
     *
     * @return $this
     */
    public function setUserCode($userCode)
    {
        $this->requestParameters['UserCode'] = $userCode;
        $this->queryParameters['UserCode'] = $userCode;

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
}
