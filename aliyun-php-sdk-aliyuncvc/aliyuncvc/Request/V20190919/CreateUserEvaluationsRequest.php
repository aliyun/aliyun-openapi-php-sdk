<?php

namespace aliyuncvc\Request\V20190919;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateUserEvaluations
 *
 * @method string getMemo()
 * @method string getDescription()
 * @method string getCreateDate()
 * @method string getMemberUUID()
 * @method string getUserId()
 * @method string getEvaluation()
 * @method string getScore()
 * @method string getMeetingUUID()
 * @method string getAppId()
 */
class CreateUserEvaluationsRequest extends \RpcAcsRequest
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
            '2019-09-19',
            'CreateUserEvaluations',
            'aliyuncvc'
        );
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
     * @param string $createDate
     *
     * @return $this
     */
    public function setCreateDate($createDate)
    {
        $this->requestParameters['CreateDate'] = $createDate;
        $this->queryParameters['CreateDate'] = $createDate;

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
