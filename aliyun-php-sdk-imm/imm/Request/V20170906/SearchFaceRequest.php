<?php

namespace imm\Request\V20170906;

/**
 * Request of SearchFace
 *
 * @method string getResultNum()
 * @method string getProject()
 * @method string getSearchThresholdLevel()
 * @method string getSrcUri()
 * @method string getIsThreshold()
 * @method string getGroupName()
 */
class SearchFaceRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'SearchFace',
            'imm'
        );
    }

    /**
     * @param string $resultNum
     *
     * @return $this
     */
    public function setResultNum($resultNum)
    {
        $this->requestParameters['ResultNum'] = $resultNum;
        $this->queryParameters['ResultNum'] = $resultNum;

        return $this;
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $searchThresholdLevel
     *
     * @return $this
     */
    public function setSearchThresholdLevel($searchThresholdLevel)
    {
        $this->requestParameters['SearchThresholdLevel'] = $searchThresholdLevel;
        $this->queryParameters['SearchThresholdLevel'] = $searchThresholdLevel;

        return $this;
    }

    /**
     * @param string $srcUri
     *
     * @return $this
     */
    public function setSrcUri($srcUri)
    {
        $this->requestParameters['SrcUri'] = $srcUri;
        $this->queryParameters['SrcUri'] = $srcUri;

        return $this;
    }

    /**
     * @param string $isThreshold
     *
     * @return $this
     */
    public function setIsThreshold($isThreshold)
    {
        $this->requestParameters['IsThreshold'] = $isThreshold;
        $this->queryParameters['IsThreshold'] = $isThreshold;

        return $this;
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->requestParameters['GroupName'] = $groupName;
        $this->queryParameters['GroupName'] = $groupName;

        return $this;
    }
}
