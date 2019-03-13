<?php

namespace jarvis\Request\V20180206;

/**
 * Request of DeleteUidWhiteListGroup
 *
 * @method string getGroupIdList()
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getSourceCode()
 */
class DeleteUidWhiteListGroupRequest extends \RpcAcsRequest
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
            'jarvis',
            '2018-02-06',
            'DeleteUidWhiteListGroup',
            'jarvis'
        );
    }

    /**
     * @param string $groupIdList
     *
     * @return $this
     */
    public function setGroupIdList($groupIdList)
    {
        $this->requestParameters['GroupIdList'] = $groupIdList;
        $this->queryParameters['GroupIdList'] = $groupIdList;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

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
     * @param string $sourceCode
     *
     * @return $this
     */
    public function setSourceCode($sourceCode)
    {
        $this->requestParameters['SourceCode'] = $sourceCode;
        $this->queryParameters['SourceCode'] = $sourceCode;

        return $this;
    }
}
