<?php

namespace aliyuncvc\Request\V20191030;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateEvaluation
 *
 * @method string getCreateTime()
 * @method string getMemo()
 * @method string getDescription()
 * @method string getMemberUUID()
 * @method string getUserId()
 * @method string getEvaluation()
 * @method string getScore()
 * @method string getMeetingUUID()
 * @method string getAppId()
 */
class CreateEvaluationRequest extends \RpcAcsRequest
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
            'aliyuncvc',
            '2019-10-30',
            'CreateEvaluation',
            'aliyuncvc'
        );
    }

    /**
     * @param string $createTime
     *
     * @return $this
     */
    public function setCreateTime($createTime)
    {
        $this->requestParameters['CreateTime'] = $createTime;
        $this->queryParameters['CreateTime'] = $createTime;

        return $this;
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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $memberUUID
     *
     * @return $this
     */
    public function setMemberUUID($memberUUID)
    {
        $this->requestParameters['MemberUUID'] = $memberUUID;
        $this->queryParameters['MemberUUID'] = $memberUUID;

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
     * @param string $evaluation
     *
     * @return $this
     */
    public function setEvaluation($evaluation)
    {
        $this->requestParameters['Evaluation'] = $evaluation;
        $this->queryParameters['Evaluation'] = $evaluation;

        return $this;
    }

    /**
     * @param string $score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->requestParameters['Score'] = $score;
        $this->queryParameters['Score'] = $score;

        return $this;
    }

    /**
     * @param string $meetingUUID
     *
     * @return $this
     */
    public function setMeetingUUID($meetingUUID)
    {
        $this->requestParameters['MeetingUUID'] = $meetingUUID;
        $this->queryParameters['MeetingUUID'] = $meetingUUID;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }
}
