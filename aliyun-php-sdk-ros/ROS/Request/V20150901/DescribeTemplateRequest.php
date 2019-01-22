<?php

namespace ROS\Request\V20150901;

/**
 * Request of DescribeTemplate
 *
 * @method string getStackId()
 * @method string getStackName()
 */
class DescribeTemplateRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/stacks/[StackName]/[StackId]/template';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'ROS',
            '2015-09-01',
            'DescribeTemplate'
        );
    }

    /**
     * @param string $stackId
     *
     * @return $this
     */
    public function setStackId($stackId)
    {
        $this->requestParameters['StackId'] = $stackId;
        $this->pathParameters['StackId'] = $stackId;

        return $this;
    }

    /**
     * @param string $stackName
     *
     * @return $this
     */
    public function setStackName($stackName)
    {
        $this->requestParameters['StackName'] = $stackName;
        $this->pathParameters['StackName'] = $stackName;

        return $this;
    }
}
