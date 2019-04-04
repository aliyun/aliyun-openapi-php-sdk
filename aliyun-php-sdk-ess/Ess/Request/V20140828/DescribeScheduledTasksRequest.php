<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeScheduledTasks
 *
 * @method string getResourceOwnerId()
 * @method string getScheduledAction2()
 * @method string getScheduledAction1()
 * @method string getScheduledAction6()
 * @method string getScheduledAction5()
 * @method string getScheduledAction4()
 * @method string getScheduledAction3()
 * @method string getScheduledAction9()
 * @method string getScheduledAction8()
 * @method string getScheduledAction7()
 * @method string getOwnerId()
 * @method string getScheduledTaskName20()
 * @method string getScheduledTaskName19()
 * @method string getScheduledTaskName18()
 * @method string getScheduledTaskId20()
 * @method string getScheduledTaskName13()
 * @method string getScheduledTaskName12()
 * @method string getScheduledTaskName11()
 * @method string getScheduledTaskName10()
 * @method string getScheduledTaskName17()
 * @method string getScheduledTaskName16()
 * @method string getPageNumber()
 * @method string getScheduledTaskName15()
 * @method string getScheduledTaskName14()
 * @method string getScheduledTaskId2()
 * @method string getScheduledTaskId1()
 * @method string getScheduledTaskId4()
 * @method string getScheduledTaskId18()
 * @method string getScheduledTaskId3()
 * @method string getScheduledTaskId19()
 * @method string getScheduledTaskId6()
 * @method string getScheduledTaskId5()
 * @method string getScheduledTaskId8()
 * @method string getScheduledTaskName9()
 * @method string getScheduledAction20()
 * @method string getScheduledTaskId7()
 * @method string getPageSize()
 * @method string getScheduledTaskId12()
 * @method string getScheduledTaskName7()
 * @method string getScheduledTaskId9()
 * @method string getScheduledTaskId13()
 * @method string getScheduledTaskName8()
 * @method string getScheduledTaskId10()
 * @method string getScheduledTaskName5()
 * @method string getScheduledTaskId11()
 * @method string getScheduledTaskName6()
 * @method string getScheduledTaskId16()
 * @method string getScheduledTaskName3()
 * @method string getScheduledTaskId17()
 * @method string getScheduledTaskName4()
 * @method string getScheduledTaskId14()
 * @method string getScheduledTaskName1()
 * @method string getScheduledTaskId15()
 * @method string getScheduledTaskName2()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getScheduledAction18()
 * @method string getScheduledAction19()
 * @method string getScheduledAction16()
 * @method string getScheduledAction17()
 * @method string getScheduledAction14()
 * @method string getScheduledAction15()
 * @method string getScheduledAction12()
 * @method string getScheduledAction13()
 * @method string getScheduledAction10()
 * @method string getScheduledAction11()
 */
class DescribeScheduledTasksRequest extends \RpcAcsRequest
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
            'Ess',
            '2014-08-28',
            'DescribeScheduledTasks',
            'ess'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $scheduledAction2
     *
     * @return $this
     */
    public function setScheduledAction2($scheduledAction2)
    {
        $this->requestParameters['ScheduledAction2'] = $scheduledAction2;
        $this->queryParameters['ScheduledAction.2'] = $scheduledAction2;

        return $this;
    }

    /**
     * @param string $scheduledAction1
     *
     * @return $this
     */
    public function setScheduledAction1($scheduledAction1)
    {
        $this->requestParameters['ScheduledAction1'] = $scheduledAction1;
        $this->queryParameters['ScheduledAction.1'] = $scheduledAction1;

        return $this;
    }

    /**
     * @param string $scheduledAction6
     *
     * @return $this
     */
    public function setScheduledAction6($scheduledAction6)
    {
        $this->requestParameters['ScheduledAction6'] = $scheduledAction6;
        $this->queryParameters['ScheduledAction.6'] = $scheduledAction6;

        return $this;
    }

    /**
     * @param string $scheduledAction5
     *
     * @return $this
     */
    public function setScheduledAction5($scheduledAction5)
    {
        $this->requestParameters['ScheduledAction5'] = $scheduledAction5;
        $this->queryParameters['ScheduledAction.5'] = $scheduledAction5;

        return $this;
    }

    /**
     * @param string $scheduledAction4
     *
     * @return $this
     */
    public function setScheduledAction4($scheduledAction4)
    {
        $this->requestParameters['ScheduledAction4'] = $scheduledAction4;
        $this->queryParameters['ScheduledAction.4'] = $scheduledAction4;

        return $this;
    }

    /**
     * @param string $scheduledAction3
     *
     * @return $this
     */
    public function setScheduledAction3($scheduledAction3)
    {
        $this->requestParameters['ScheduledAction3'] = $scheduledAction3;
        $this->queryParameters['ScheduledAction.3'] = $scheduledAction3;

        return $this;
    }

    /**
     * @param string $scheduledAction9
     *
     * @return $this
     */
    public function setScheduledAction9($scheduledAction9)
    {
        $this->requestParameters['ScheduledAction9'] = $scheduledAction9;
        $this->queryParameters['ScheduledAction.9'] = $scheduledAction9;

        return $this;
    }

    /**
     * @param string $scheduledAction8
     *
     * @return $this
     */
    public function setScheduledAction8($scheduledAction8)
    {
        $this->requestParameters['ScheduledAction8'] = $scheduledAction8;
        $this->queryParameters['ScheduledAction.8'] = $scheduledAction8;

        return $this;
    }

    /**
     * @param string $scheduledAction7
     *
     * @return $this
     */
    public function setScheduledAction7($scheduledAction7)
    {
        $this->requestParameters['ScheduledAction7'] = $scheduledAction7;
        $this->queryParameters['ScheduledAction.7'] = $scheduledAction7;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $scheduledTaskName20
     *
     * @return $this
     */
    public function setScheduledTaskName20($scheduledTaskName20)
    {
        $this->requestParameters['ScheduledTaskName20'] = $scheduledTaskName20;
        $this->queryParameters['ScheduledTaskName.20'] = $scheduledTaskName20;

        return $this;
    }

    /**
     * @param string $scheduledTaskName19
     *
     * @return $this
     */
    public function setScheduledTaskName19($scheduledTaskName19)
    {
        $this->requestParameters['ScheduledTaskName19'] = $scheduledTaskName19;
        $this->queryParameters['ScheduledTaskName.19'] = $scheduledTaskName19;

        return $this;
    }

    /**
     * @param string $scheduledTaskName18
     *
     * @return $this
     */
    public function setScheduledTaskName18($scheduledTaskName18)
    {
        $this->requestParameters['ScheduledTaskName18'] = $scheduledTaskName18;
        $this->queryParameters['ScheduledTaskName.18'] = $scheduledTaskName18;

        return $this;
    }

    /**
     * @param string $scheduledTaskId20
     *
     * @return $this
     */
    public function setScheduledTaskId20($scheduledTaskId20)
    {
        $this->requestParameters['ScheduledTaskId20'] = $scheduledTaskId20;
        $this->queryParameters['ScheduledTaskId.20'] = $scheduledTaskId20;

        return $this;
    }

    /**
     * @param string $scheduledTaskName13
     *
     * @return $this
     */
    public function setScheduledTaskName13($scheduledTaskName13)
    {
        $this->requestParameters['ScheduledTaskName13'] = $scheduledTaskName13;
        $this->queryParameters['ScheduledTaskName.13'] = $scheduledTaskName13;

        return $this;
    }

    /**
     * @param string $scheduledTaskName12
     *
     * @return $this
     */
    public function setScheduledTaskName12($scheduledTaskName12)
    {
        $this->requestParameters['ScheduledTaskName12'] = $scheduledTaskName12;
        $this->queryParameters['ScheduledTaskName.12'] = $scheduledTaskName12;

        return $this;
    }

    /**
     * @param string $scheduledTaskName11
     *
     * @return $this
     */
    public function setScheduledTaskName11($scheduledTaskName11)
    {
        $this->requestParameters['ScheduledTaskName11'] = $scheduledTaskName11;
        $this->queryParameters['ScheduledTaskName.11'] = $scheduledTaskName11;

        return $this;
    }

    /**
     * @param string $scheduledTaskName10
     *
     * @return $this
     */
    public function setScheduledTaskName10($scheduledTaskName10)
    {
        $this->requestParameters['ScheduledTaskName10'] = $scheduledTaskName10;
        $this->queryParameters['ScheduledTaskName.10'] = $scheduledTaskName10;

        return $this;
    }

    /**
     * @param string $scheduledTaskName17
     *
     * @return $this
     */
    public function setScheduledTaskName17($scheduledTaskName17)
    {
        $this->requestParameters['ScheduledTaskName17'] = $scheduledTaskName17;
        $this->queryParameters['ScheduledTaskName.17'] = $scheduledTaskName17;

        return $this;
    }

    /**
     * @param string $scheduledTaskName16
     *
     * @return $this
     */
    public function setScheduledTaskName16($scheduledTaskName16)
    {
        $this->requestParameters['ScheduledTaskName16'] = $scheduledTaskName16;
        $this->queryParameters['ScheduledTaskName.16'] = $scheduledTaskName16;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $scheduledTaskName15
     *
     * @return $this
     */
    public function setScheduledTaskName15($scheduledTaskName15)
    {
        $this->requestParameters['ScheduledTaskName15'] = $scheduledTaskName15;
        $this->queryParameters['ScheduledTaskName.15'] = $scheduledTaskName15;

        return $this;
    }

    /**
     * @param string $scheduledTaskName14
     *
     * @return $this
     */
    public function setScheduledTaskName14($scheduledTaskName14)
    {
        $this->requestParameters['ScheduledTaskName14'] = $scheduledTaskName14;
        $this->queryParameters['ScheduledTaskName.14'] = $scheduledTaskName14;

        return $this;
    }

    /**
     * @param string $scheduledTaskId2
     *
     * @return $this
     */
    public function setScheduledTaskId2($scheduledTaskId2)
    {
        $this->requestParameters['ScheduledTaskId2'] = $scheduledTaskId2;
        $this->queryParameters['ScheduledTaskId.2'] = $scheduledTaskId2;

        return $this;
    }

    /**
     * @param string $scheduledTaskId1
     *
     * @return $this
     */
    public function setScheduledTaskId1($scheduledTaskId1)
    {
        $this->requestParameters['ScheduledTaskId1'] = $scheduledTaskId1;
        $this->queryParameters['ScheduledTaskId.1'] = $scheduledTaskId1;

        return $this;
    }

    /**
     * @param string $scheduledTaskId4
     *
     * @return $this
     */
    public function setScheduledTaskId4($scheduledTaskId4)
    {
        $this->requestParameters['ScheduledTaskId4'] = $scheduledTaskId4;
        $this->queryParameters['ScheduledTaskId.4'] = $scheduledTaskId4;

        return $this;
    }

    /**
     * @param string $scheduledTaskId18
     *
     * @return $this
     */
    public function setScheduledTaskId18($scheduledTaskId18)
    {
        $this->requestParameters['ScheduledTaskId18'] = $scheduledTaskId18;
        $this->queryParameters['ScheduledTaskId.18'] = $scheduledTaskId18;

        return $this;
    }

    /**
     * @param string $scheduledTaskId3
     *
     * @return $this
     */
    public function setScheduledTaskId3($scheduledTaskId3)
    {
        $this->requestParameters['ScheduledTaskId3'] = $scheduledTaskId3;
        $this->queryParameters['ScheduledTaskId.3'] = $scheduledTaskId3;

        return $this;
    }

    /**
     * @param string $scheduledTaskId19
     *
     * @return $this
     */
    public function setScheduledTaskId19($scheduledTaskId19)
    {
        $this->requestParameters['ScheduledTaskId19'] = $scheduledTaskId19;
        $this->queryParameters['ScheduledTaskId.19'] = $scheduledTaskId19;

        return $this;
    }

    /**
     * @param string $scheduledTaskId6
     *
     * @return $this
     */
    public function setScheduledTaskId6($scheduledTaskId6)
    {
        $this->requestParameters['ScheduledTaskId6'] = $scheduledTaskId6;
        $this->queryParameters['ScheduledTaskId.6'] = $scheduledTaskId6;

        return $this;
    }

    /**
     * @param string $scheduledTaskId5
     *
     * @return $this
     */
    public function setScheduledTaskId5($scheduledTaskId5)
    {
        $this->requestParameters['ScheduledTaskId5'] = $scheduledTaskId5;
        $this->queryParameters['ScheduledTaskId.5'] = $scheduledTaskId5;

        return $this;
    }

    /**
     * @param string $scheduledTaskId8
     *
     * @return $this
     */
    public function setScheduledTaskId8($scheduledTaskId8)
    {
        $this->requestParameters['ScheduledTaskId8'] = $scheduledTaskId8;
        $this->queryParameters['ScheduledTaskId.8'] = $scheduledTaskId8;

        return $this;
    }

    /**
     * @param string $scheduledTaskName9
     *
     * @return $this
     */
    public function setScheduledTaskName9($scheduledTaskName9)
    {
        $this->requestParameters['ScheduledTaskName9'] = $scheduledTaskName9;
        $this->queryParameters['ScheduledTaskName.9'] = $scheduledTaskName9;

        return $this;
    }

    /**
     * @param string $scheduledAction20
     *
     * @return $this
     */
    public function setScheduledAction20($scheduledAction20)
    {
        $this->requestParameters['ScheduledAction20'] = $scheduledAction20;
        $this->queryParameters['ScheduledAction.20'] = $scheduledAction20;

        return $this;
    }

    /**
     * @param string $scheduledTaskId7
     *
     * @return $this
     */
    public function setScheduledTaskId7($scheduledTaskId7)
    {
        $this->requestParameters['ScheduledTaskId7'] = $scheduledTaskId7;
        $this->queryParameters['ScheduledTaskId.7'] = $scheduledTaskId7;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $scheduledTaskId12
     *
     * @return $this
     */
    public function setScheduledTaskId12($scheduledTaskId12)
    {
        $this->requestParameters['ScheduledTaskId12'] = $scheduledTaskId12;
        $this->queryParameters['ScheduledTaskId.12'] = $scheduledTaskId12;

        return $this;
    }

    /**
     * @param string $scheduledTaskName7
     *
     * @return $this
     */
    public function setScheduledTaskName7($scheduledTaskName7)
    {
        $this->requestParameters['ScheduledTaskName7'] = $scheduledTaskName7;
        $this->queryParameters['ScheduledTaskName.7'] = $scheduledTaskName7;

        return $this;
    }

    /**
     * @param string $scheduledTaskId9
     *
     * @return $this
     */
    public function setScheduledTaskId9($scheduledTaskId9)
    {
        $this->requestParameters['ScheduledTaskId9'] = $scheduledTaskId9;
        $this->queryParameters['ScheduledTaskId.9'] = $scheduledTaskId9;

        return $this;
    }

    /**
     * @param string $scheduledTaskId13
     *
     * @return $this
     */
    public function setScheduledTaskId13($scheduledTaskId13)
    {
        $this->requestParameters['ScheduledTaskId13'] = $scheduledTaskId13;
        $this->queryParameters['ScheduledTaskId.13'] = $scheduledTaskId13;

        return $this;
    }

    /**
     * @param string $scheduledTaskName8
     *
     * @return $this
     */
    public function setScheduledTaskName8($scheduledTaskName8)
    {
        $this->requestParameters['ScheduledTaskName8'] = $scheduledTaskName8;
        $this->queryParameters['ScheduledTaskName.8'] = $scheduledTaskName8;

        return $this;
    }

    /**
     * @param string $scheduledTaskId10
     *
     * @return $this
     */
    public function setScheduledTaskId10($scheduledTaskId10)
    {
        $this->requestParameters['ScheduledTaskId10'] = $scheduledTaskId10;
        $this->queryParameters['ScheduledTaskId.10'] = $scheduledTaskId10;

        return $this;
    }

    /**
     * @param string $scheduledTaskName5
     *
     * @return $this
     */
    public function setScheduledTaskName5($scheduledTaskName5)
    {
        $this->requestParameters['ScheduledTaskName5'] = $scheduledTaskName5;
        $this->queryParameters['ScheduledTaskName.5'] = $scheduledTaskName5;

        return $this;
    }

    /**
     * @param string $scheduledTaskId11
     *
     * @return $this
     */
    public function setScheduledTaskId11($scheduledTaskId11)
    {
        $this->requestParameters['ScheduledTaskId11'] = $scheduledTaskId11;
        $this->queryParameters['ScheduledTaskId.11'] = $scheduledTaskId11;

        return $this;
    }

    /**
     * @param string $scheduledTaskName6
     *
     * @return $this
     */
    public function setScheduledTaskName6($scheduledTaskName6)
    {
        $this->requestParameters['ScheduledTaskName6'] = $scheduledTaskName6;
        $this->queryParameters['ScheduledTaskName.6'] = $scheduledTaskName6;

        return $this;
    }

    /**
     * @param string $scheduledTaskId16
     *
     * @return $this
     */
    public function setScheduledTaskId16($scheduledTaskId16)
    {
        $this->requestParameters['ScheduledTaskId16'] = $scheduledTaskId16;
        $this->queryParameters['ScheduledTaskId.16'] = $scheduledTaskId16;

        return $this;
    }

    /**
     * @param string $scheduledTaskName3
     *
     * @return $this
     */
    public function setScheduledTaskName3($scheduledTaskName3)
    {
        $this->requestParameters['ScheduledTaskName3'] = $scheduledTaskName3;
        $this->queryParameters['ScheduledTaskName.3'] = $scheduledTaskName3;

        return $this;
    }

    /**
     * @param string $scheduledTaskId17
     *
     * @return $this
     */
    public function setScheduledTaskId17($scheduledTaskId17)
    {
        $this->requestParameters['ScheduledTaskId17'] = $scheduledTaskId17;
        $this->queryParameters['ScheduledTaskId.17'] = $scheduledTaskId17;

        return $this;
    }

    /**
     * @param string $scheduledTaskName4
     *
     * @return $this
     */
    public function setScheduledTaskName4($scheduledTaskName4)
    {
        $this->requestParameters['ScheduledTaskName4'] = $scheduledTaskName4;
        $this->queryParameters['ScheduledTaskName.4'] = $scheduledTaskName4;

        return $this;
    }

    /**
     * @param string $scheduledTaskId14
     *
     * @return $this
     */
    public function setScheduledTaskId14($scheduledTaskId14)
    {
        $this->requestParameters['ScheduledTaskId14'] = $scheduledTaskId14;
        $this->queryParameters['ScheduledTaskId.14'] = $scheduledTaskId14;

        return $this;
    }

    /**
     * @param string $scheduledTaskName1
     *
     * @return $this
     */
    public function setScheduledTaskName1($scheduledTaskName1)
    {
        $this->requestParameters['ScheduledTaskName1'] = $scheduledTaskName1;
        $this->queryParameters['ScheduledTaskName.1'] = $scheduledTaskName1;

        return $this;
    }

    /**
     * @param string $scheduledTaskId15
     *
     * @return $this
     */
    public function setScheduledTaskId15($scheduledTaskId15)
    {
        $this->requestParameters['ScheduledTaskId15'] = $scheduledTaskId15;
        $this->queryParameters['ScheduledTaskId.15'] = $scheduledTaskId15;

        return $this;
    }

    /**
     * @param string $scheduledTaskName2
     *
     * @return $this
     */
    public function setScheduledTaskName2($scheduledTaskName2)
    {
        $this->requestParameters['ScheduledTaskName2'] = $scheduledTaskName2;
        $this->queryParameters['ScheduledTaskName.2'] = $scheduledTaskName2;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $scheduledAction18
     *
     * @return $this
     */
    public function setScheduledAction18($scheduledAction18)
    {
        $this->requestParameters['ScheduledAction18'] = $scheduledAction18;
        $this->queryParameters['ScheduledAction.18'] = $scheduledAction18;

        return $this;
    }

    /**
     * @param string $scheduledAction19
     *
     * @return $this
     */
    public function setScheduledAction19($scheduledAction19)
    {
        $this->requestParameters['ScheduledAction19'] = $scheduledAction19;
        $this->queryParameters['ScheduledAction.19'] = $scheduledAction19;

        return $this;
    }

    /**
     * @param string $scheduledAction16
     *
     * @return $this
     */
    public function setScheduledAction16($scheduledAction16)
    {
        $this->requestParameters['ScheduledAction16'] = $scheduledAction16;
        $this->queryParameters['ScheduledAction.16'] = $scheduledAction16;

        return $this;
    }

    /**
     * @param string $scheduledAction17
     *
     * @return $this
     */
    public function setScheduledAction17($scheduledAction17)
    {
        $this->requestParameters['ScheduledAction17'] = $scheduledAction17;
        $this->queryParameters['ScheduledAction.17'] = $scheduledAction17;

        return $this;
    }

    /**
     * @param string $scheduledAction14
     *
     * @return $this
     */
    public function setScheduledAction14($scheduledAction14)
    {
        $this->requestParameters['ScheduledAction14'] = $scheduledAction14;
        $this->queryParameters['ScheduledAction.14'] = $scheduledAction14;

        return $this;
    }

    /**
     * @param string $scheduledAction15
     *
     * @return $this
     */
    public function setScheduledAction15($scheduledAction15)
    {
        $this->requestParameters['ScheduledAction15'] = $scheduledAction15;
        $this->queryParameters['ScheduledAction.15'] = $scheduledAction15;

        return $this;
    }

    /**
     * @param string $scheduledAction12
     *
     * @return $this
     */
    public function setScheduledAction12($scheduledAction12)
    {
        $this->requestParameters['ScheduledAction12'] = $scheduledAction12;
        $this->queryParameters['ScheduledAction.12'] = $scheduledAction12;

        return $this;
    }

    /**
     * @param string $scheduledAction13
     *
     * @return $this
     */
    public function setScheduledAction13($scheduledAction13)
    {
        $this->requestParameters['ScheduledAction13'] = $scheduledAction13;
        $this->queryParameters['ScheduledAction.13'] = $scheduledAction13;

        return $this;
    }

    /**
     * @param string $scheduledAction10
     *
     * @return $this
     */
    public function setScheduledAction10($scheduledAction10)
    {
        $this->requestParameters['ScheduledAction10'] = $scheduledAction10;
        $this->queryParameters['ScheduledAction.10'] = $scheduledAction10;

        return $this;
    }

    /**
     * @param string $scheduledAction11
     *
     * @return $this
     */
    public function setScheduledAction11($scheduledAction11)
    {
        $this->requestParameters['ScheduledAction11'] = $scheduledAction11;
        $this->queryParameters['ScheduledAction.11'] = $scheduledAction11;

        return $this;
    }
}
