<?php

namespace ROS\Request\V20150901;

/**
 * Request of DescribeResourceDetail
 *
 * @method string getStackId()
 * @method string getStackName()
 * @method string getResourceName()
 */
class DescribeResourceDetailRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/stacks/[StackName]/[StackId]/resources/[ResourceName]';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'ROS',
            '2015-09-01',
            'DescribeResourceDetail'
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

    /**
     * @param string $resourceName
     *
     * @return $this
     */
    public function setResourceName($resourceName)
    {
        $this->requestParameters['ResourceName'] = $resourceName;
        $this->pathParameters['ResourceName'] = $resourceName;

        return $this;
    }
}
