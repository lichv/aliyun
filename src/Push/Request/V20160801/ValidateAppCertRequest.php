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
namespace Aliyun\Push\Request\V20160801;
use Aliyun\Core\RpcAcsRequest;

class ValidateAppCertRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Push", "2016-08-01", "ValidateAppCert");
	}

	private  $appKey;

	private  $certPass;

	private  $isDevCert;

	public function getAppKey() {
		return $this->appKey;
	}

	public function setAppKey($appKey) {
		$this->appKey = $appKey;
		$this->queryParameters["AppKey"]=$appKey;
	}

	public function getCertPass() {
		return $this->certPass;
	}

	public function setCertPass($certPass) {
		$this->certPass = $certPass;
		$this->queryParameters["CertPass"]=$certPass;
	}

	public function getIsDevCert() {
		return $this->isDevCert;
	}

	public function setIsDevCert($isDevCert) {
		$this->isDevCert = $isDevCert;
		$this->queryParameters["IsDevCert"]=$isDevCert;
	}
	
}