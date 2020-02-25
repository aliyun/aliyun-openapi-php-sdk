<?php

namespace dms_enterprise\Request\V20181101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateInstance
 *
 * @method string getSafeRuleId()
 * @method string getEcsRegion()
 * @method string getDdlOnline()
 * @method string getUseDsql()
 * @method string getTid()
 * @method string getSid()
 * @method string getDbaId()
 * @method string getDataLinkName()
 * @method string getInstanceSource()
 * @method string getEnvType()
 * @method string getHost()
 * @method string getInstanceType()
 * @method string getQueryTimeout()
 * @method string getEcsInstanceId()
 * @method string getExportTimeout()
 * @method string getDatabasePassword()
 * @method string getInstanceAlias()
 * @method string getDatabaseUser()
 * @method string getInstanceId()
 * @method string getPort()
 * @method string getVpcId()
 */
class UpdateInstanceRequest extends \RpcAcsRequest
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
            'dms-enterprise',
            '2018-11-01',
            'UpdateInstance'
        );
    }

    /**
     * @param string $safeRuleId
     *
     * @return $this
     */
    public function setSafeRuleId($safeRuleId)
    {
        $this->requestParameters['SafeRuleId'] = $safeRuleId;
        $this->queryParameters['SafeRuleId'] = $safeRuleId;

        return $this;
    }

    /**
     * @param string $ecsRegion
     *
     * @return $this
     */
    public function setEcsRegion($ecsRegion)
    {
        $this->requestParameters['EcsRegion'] = $ecsRegion;
        $this->queryParameters['EcsRegion'] = $ecsRegion;

        return $this;
    }

    /**
     * @param string $ddlOnline
     *
     * @return $this
     */
    public function setDdlOnline($ddlOnline)
    {
        $this->requestParameters['DdlOnline'] = $ddlOnline;
        $this->queryParameters['DdlOnline'] = $ddlOnline;

        return $this;
    }

    /**
     * @param string $useDsql
     *
     * @return $this
     */
    public function setUseDsql($useDsql)
    {
        $this->requestParameters['UseDsql'] = $useDsql;
        $this->queryParameters['UseDsql'] = $useDsql;

        return $this;
    }

    /**
     * @param string $tid
     *
     * @return $this
     */
    public function setTid($tid)
    {
        $this->requestParameters['Tid'] = $tid;
        $this->queryParameters['Tid'] = $tid;

        return $this;
    }

    /**
     * @param string $sid
     *
     * @return $this
     */
    public function setSid($sid)
    {
        $this->requestParameters['Sid'] = $sid;
        $this->queryParameters['Sid'] = $sid;

        return $this;
    }

    /**
     * @param string $dbaId
     *
     * @return $this
     */
    public function setDbaId($dbaId)
    {
        $this->requestParameters['DbaId'] = $dbaId;
        $this->queryParameters['DbaId'] = $dbaId;

        return $this;
    }

    /**
     * @param string $dataLinkName
     *
     * @return $this
     */
    public function setDataLinkName($dataLinkName)
    {
        $this->requestParameters['DataLinkName'] = $dataLinkName;
        $this->queryParameters['DataLinkName'] = $dataLinkName;

        return $this;
    }

    /**
     * @param string $instanceSource
     *
     * @return $this
     */
    public function setInstanceSource($instanceSource)
    {
        $this->requestParameters['InstanceSource'] = $instanceSource;
        $this->queryParameters['InstanceSource'] = $instanceSource;

        return $this;
    }

    /**
     * @param string $envType
     *
     * @return $this
     */
    public function setEnvType($envType)
    {
        $this->requestParameters['EnvType'] = $envType;
        $this->queryParameters['EnvType'] = $envType;

        return $this;
    }

    /**
     * @param string $host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->requestParameters['Host'] = $host;
        $this->queryParameters['Host'] = $host;

        return $this;
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        $this->requestParameters['InstanceType'] = $instanceType;
        $this->queryParameters['InstanceType'] = $instanceType;

        return $this;
    }

    /**
     * @param string $queryTimeout
     *
     * @return $this
     */
    public function setQueryTimeout($queryTimeout)
    {
        $this->requestParameters['QueryTimeout'] = $queryTimeout;
        $this->queryParameters['QueryTimeout'] = $queryTimeout;

        return $this;
    }

    /**
     * @param string $ecsInstanceId
     *
     * @return $this
     */
    public function setEcsInstanceId($ecsInstanceId)
    {
        $this->requestParameters['EcsInstanceId'] = $ecsInstanceId;
        $this->queryParameters['EcsInstanceId'] = $ecsInstanceId;

        return $this;
    }

    /**
     * @param string $exportTimeout
     *
     * @return $this
     */
    public function setExportTimeout($exportTimeout)
    {
        $this->requestParameters['ExportTimeout'] = $exportTimeout;
        $this->queryParameters['ExportTimeout'] = $exportTimeout;

        return $this;
    }

    /**
     * @param string $databasePassword
     *
     * @return $this
     */
    public function setDatabasePassword($databasePassword)
    {
        $this->requestParameters['DatabasePassword'] = $databasePassword;
        $this->queryParameters['DatabasePassword'] = $databasePassword;

        return $this;
    }

    /**
     * @param string $instanceAlias
     *
     * @return $this
     */
    public function setInstanceAlias($instanceAlias)
    {
        $this->requestParameters['InstanceAlias'] = $instanceAlias;
        $this->queryParameters['InstanceAlias'] = $instanceAlias;

        return $this;
    }

    /**
     * @param string $databaseUser
     *
     * @return $this
     */
    public function setDatabaseUser($databaseUser)
    {
        $this->requestParameters['DatabaseUser'] = $databaseUser;
        $this->queryParameters['DatabaseUser'] = $databaseUser;

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

    /**
     * @param string $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->requestParameters['Port'] = $port;
        $this->queryParameters['Port'] = $port;

        return $this;
    }

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        $this->requestParameters['VpcId'] = $vpcId;
        $this->queryParameters['VpcId'] = $vpcId;

        return $this;
    }
}
