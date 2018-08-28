<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace EHPC\Request\V20180412;

class CreateHybridClusterRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("EHPC", "2018-04-12", "CreateHybridCluster", "ehs", "openAPI");
	}

	private  $ehpcVersion;

	private  $securityGroupId;

	private  $description;

	private  $keyPairName;

	private  $securityGroupName;

	private  $ecsOrderComputeInstanceType;

	private  $onPremiseVolumeRemotePath;

	private  $volumeType;

	private  $password;

	private  $onPremiseVolumeMountPoint;

	private  $onPremiseVolumeProtocol;

	private  $volumeProtocol;

	private  $onPremiseVolumeLocalPath;

	private  $clientVersion;

	private  $osTag;

	private  $remoteDirectory;

	private  $vSwitchId;

	private  $nodes;

	private  $Applications;

	private  $domain;

	private  $vpcId;

	private  $name;

	private  $volumeId;

	private  $volumeMountpoint;

	private  $zoneId;

	private  $location;

	public function getEhpcVersion() {
		return $this->ehpcVersion;
	}

	public function setEhpcVersion($ehpcVersion) {
		$this->ehpcVersion = $ehpcVersion;
		$this->queryParameters["EhpcVersion"]=$ehpcVersion;
	}

	public function getSecurityGroupId() {
		return $this->securityGroupId;
	}

	public function setSecurityGroupId($securityGroupId) {
		$this->securityGroupId = $securityGroupId;
		$this->queryParameters["SecurityGroupId"]=$securityGroupId;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getKeyPairName() {
		return $this->keyPairName;
	}

	public function setKeyPairName($keyPairName) {
		$this->keyPairName = $keyPairName;
		$this->queryParameters["KeyPairName"]=$keyPairName;
	}

	public function getSecurityGroupName() {
		return $this->securityGroupName;
	}

	public function setSecurityGroupName($securityGroupName) {
		$this->securityGroupName = $securityGroupName;
		$this->queryParameters["SecurityGroupName"]=$securityGroupName;
	}

	public function getEcsOrderComputeInstanceType() {
		return $this->ecsOrderComputeInstanceType;
	}

	public function setEcsOrderComputeInstanceType($ecsOrderComputeInstanceType) {
		$this->ecsOrderComputeInstanceType = $ecsOrderComputeInstanceType;
		$this->queryParameters["EcsOrder.Compute.InstanceType"]=$ecsOrderComputeInstanceType;
	}

	public function getOnPremiseVolumeRemotePath() {
		return $this->onPremiseVolumeRemotePath;
	}

	public function setOnPremiseVolumeRemotePath($onPremiseVolumeRemotePath) {
		$this->onPremiseVolumeRemotePath = $onPremiseVolumeRemotePath;
		$this->queryParameters["OnPremiseVolumeRemotePath"]=$onPremiseVolumeRemotePath;
	}

	public function getVolumeType() {
		return $this->volumeType;
	}

	public function setVolumeType($volumeType) {
		$this->volumeType = $volumeType;
		$this->queryParameters["VolumeType"]=$volumeType;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword($password) {
		$this->password = $password;
		$this->queryParameters["Password"]=$password;
	}

	public function getOnPremiseVolumeMountPoint() {
		return $this->onPremiseVolumeMountPoint;
	}

	public function setOnPremiseVolumeMountPoint($onPremiseVolumeMountPoint) {
		$this->onPremiseVolumeMountPoint = $onPremiseVolumeMountPoint;
		$this->queryParameters["OnPremiseVolumeMountPoint"]=$onPremiseVolumeMountPoint;
	}

	public function getOnPremiseVolumeProtocol() {
		return $this->onPremiseVolumeProtocol;
	}

	public function setOnPremiseVolumeProtocol($onPremiseVolumeProtocol) {
		$this->onPremiseVolumeProtocol = $onPremiseVolumeProtocol;
		$this->queryParameters["OnPremiseVolumeProtocol"]=$onPremiseVolumeProtocol;
	}

	public function getVolumeProtocol() {
		return $this->volumeProtocol;
	}

	public function setVolumeProtocol($volumeProtocol) {
		$this->volumeProtocol = $volumeProtocol;
		$this->queryParameters["VolumeProtocol"]=$volumeProtocol;
	}

	public function getOnPremiseVolumeLocalPath() {
		return $this->onPremiseVolumeLocalPath;
	}

	public function setOnPremiseVolumeLocalPath($onPremiseVolumeLocalPath) {
		$this->onPremiseVolumeLocalPath = $onPremiseVolumeLocalPath;
		$this->queryParameters["OnPremiseVolumeLocalPath"]=$onPremiseVolumeLocalPath;
	}

	public function getClientVersion() {
		return $this->clientVersion;
	}

	public function setClientVersion($clientVersion) {
		$this->clientVersion = $clientVersion;
		$this->queryParameters["ClientVersion"]=$clientVersion;
	}

	public function getOsTag() {
		return $this->osTag;
	}

	public function setOsTag($osTag) {
		$this->osTag = $osTag;
		$this->queryParameters["OsTag"]=$osTag;
	}

	public function getRemoteDirectory() {
		return $this->remoteDirectory;
	}

	public function setRemoteDirectory($remoteDirectory) {
		$this->remoteDirectory = $remoteDirectory;
		$this->queryParameters["RemoteDirectory"]=$remoteDirectory;
	}

	public function getVSwitchId() {
		return $this->vSwitchId;
	}

	public function setVSwitchId($vSwitchId) {
		$this->vSwitchId = $vSwitchId;
		$this->queryParameters["VSwitchId"]=$vSwitchId;
	}

	public function getNodes() {
		return $this->nodes;
	}

	public function setNodes($nodes) {
		$this->nodes = $nodes;
		$this->queryParameters["Nodes"]=$nodes;
	}

	public function getApplications() {
		return $this->Applications;
	}

	public function setApplications($Applications) {
		$this->Applications = $Applications;
		for ($i = 0; $i < count($Applications); $i ++) {	
			$this->queryParameters['Application.' . ($i + 1) . '.Tag'] = $Applications[$i]['Tag'];

		}
	}

	public function getDomain() {
		return $this->domain;
	}

	public function setDomain($domain) {
		$this->domain = $domain;
		$this->queryParameters["Domain"]=$domain;
	}

	public function getVpcId() {
		return $this->vpcId;
	}

	public function setVpcId($vpcId) {
		$this->vpcId = $vpcId;
		$this->queryParameters["VpcId"]=$vpcId;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getVolumeId() {
		return $this->volumeId;
	}

	public function setVolumeId($volumeId) {
		$this->volumeId = $volumeId;
		$this->queryParameters["VolumeId"]=$volumeId;
	}

	public function getVolumeMountpoint() {
		return $this->volumeMountpoint;
	}

	public function setVolumeMountpoint($volumeMountpoint) {
		$this->volumeMountpoint = $volumeMountpoint;
		$this->queryParameters["VolumeMountpoint"]=$volumeMountpoint;
	}

	public function getZoneId() {
		return $this->zoneId;
	}

	public function setZoneId($zoneId) {
		$this->zoneId = $zoneId;
		$this->queryParameters["ZoneId"]=$zoneId;
	}

	public function getLocation() {
		return $this->location;
	}

	public function setLocation($location) {
		$this->location = $location;
		$this->queryParameters["Location"]=$location;
	}
	
}