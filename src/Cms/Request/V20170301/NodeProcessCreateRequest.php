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
namespace Aliyun\Cms\Request\V20170301;
use Aliyun\Core\RpcAcsRequest;

class NodeProcessCreateRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2017-03-01", "NodeProcessCreate");
	}

	private  $instanceId;

	private  $name;

	private  $processName;

	private  $processUser;

	private  $command;

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
		$this->queryParameters["Name"]=$name;
	}

	public function getProcessName() {
		return $this->processName;
	}

	public function setProcessName($processName) {
		$this->processName = $processName;
		$this->queryParameters["ProcessName"]=$processName;
	}

	public function getProcessUser() {
		return $this->processUser;
	}

	public function setProcessUser($processUser) {
		$this->processUser = $processUser;
		$this->queryParameters["ProcessUser"]=$processUser;
	}

	public function getCommand() {
		return $this->command;
	}

	public function setCommand($command) {
		$this->command = $command;
		$this->queryParameters["Command"]=$command;
	}
	
}