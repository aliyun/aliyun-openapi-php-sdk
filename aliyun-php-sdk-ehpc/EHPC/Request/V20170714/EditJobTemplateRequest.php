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
namespace EHPC\Request\V20170714;

class EditJobTemplateRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("EHPC", "2017-07-14", "EditJobTemplate", "ehs", "openAPI");
	}

	private  $stderrRedirectPath;

	private  $variables;

	private  $runasUser;

	private  $templateId;

	private  $priority;

	private  $commandLine;

	private  $arrayRequest;

	private  $packagePath;

	private  $reRunnable;

	private  $name;

	private  $stdoutRedirectPath;

	public function getStderrRedirectPath() {
		return $this->stderrRedirectPath;
	}

	public function setStderrRedirectPath($stderrRedirectPath) {
		$this->stderrRedirectPath = $stderrRedirectPath;
		$this->queryParameters["StderrRedirectPath"]=$stderrRedirectPath;
	}

	public function getVariables() {
		return $this->variables;
	}

	public function setVariables($variables) {
		$this->variables = $variables;
		$this->queryParameters["Variables"]=$variables;
	}

	public function getRunasUser() {
		return $this->runasUser;
	}

	public function setRunasUser($runasUser) {
		$this->runasUser = $runasUser;
		$this->queryParameters["RunasUser"]=$runasUser;
	}

	public function getTemplateId() {
		return $this->templateId;
	}

	public function setTemplateId($templateId) {
		$this->templateId = $templateId;
		$this->queryParameters["TemplateId"]=$templateId;
	}

	public function getPriority() {
		return $this->priority;
	}

	public function setPriority($priority) {
		$this->priority = $priority;
		$this->queryParameters["Priority"]=$priority;
	}

	public function getCommandLine() {
		return $this->commandLine;
	}

	public function setCommandLine($commandLine) {
		$this->commandLine = $commandLine;
		$this->queryParameters["CommandLine"]=$commandLine;
	}

	public function getArrayRequest() {
		return $this->arrayRequest;
	}

	public function setArrayRequest($arrayRequest) {
		$this->arrayRequest = $arrayRequest;
		$this->queryParameters["ArrayRequest"]=$arrayRequest;
	}

	public function getPackagePath() {
		return $this->packagePath;
	}

	public function setPackagePath($packagePath) {
		$this->packagePath = $packagePath;
		$this->queryParameters["PackagePath"]=$packagePath;
	}

	public function getReRunnable() {
		return $this->reRunnable;
	}

	public function setReRunnable($reRunnable) {
		$this->reRunnable = $reRunnable;
		$this->queryParameters["ReRunnable"]=$reRunnable;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getStdoutRedirectPath() {
		return $this->stdoutRedirectPath;
	}

	public function setStdoutRedirectPath($stdoutRedirectPath) {
		$this->stdoutRedirectPath = $stdoutRedirectPath;
		$this->queryParameters["StdoutRedirectPath"]=$stdoutRedirectPath;
	}
	
}