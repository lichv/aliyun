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
namespace Aliyun\BatchCompute\Request\V20130111;
use Aliyun\Core\RoaAcsRequest;

class ReleaseJobRequest extends RoaAcsRequest
{
	function  __construct()
	{
		parent::__construct("BatchCompute", "2013-01-11", "ReleaseJob");
		$this->setUriPattern("/2013-01-11/jobs/[ResourceName]");
		$this->setMethod("DELETE");
	}

	private  $accessId;

	private  $resourceName;

	public function getAccessId() {
		return $this->accessId;
	}

	public function setAccessId($accessId) {
		$this->accessId = $accessId;
		$this->queryParameters["AccessId"]=$accessId;
	}

	public function getResourceName() {
		return $this->resourceName;
	}

	public function setResourceName($resourceName) {
		$this->resourceName = $resourceName;
		$this->pathParameters["ResourceName"]=$resourceName;
	}
	
}