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
namespace Aliyun\Alidns\Request\V20150109;
use Aliyun\Core\RpcAcsRequest;

class AddDomainGroupRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Alidns", "2015-01-09", "AddDomainGroup");
	}

	private  $lang;

	private  $userClientIp;

	private  $groupName;

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getGroupName() {
		return $this->groupName;
	}

	public function setGroupName($groupName) {
		$this->groupName = $groupName;
		$this->queryParameters["GroupName"]=$groupName;
	}
	
}