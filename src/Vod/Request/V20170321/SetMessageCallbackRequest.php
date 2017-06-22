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
namespace Aliyun\Vod\Request\V20170321;
use Aliyun\Core\RpcAcsRequest;

class SetMessageCallbackRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("vod", "2017-03-21", "SetMessageCallback");
	}

	private  $ownerId;

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $callbackSwitch;

	private  $callbackType;

	private  $callbackURL;

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getCallbackSwitch() {
		return $this->callbackSwitch;
	}

	public function setCallbackSwitch($callbackSwitch) {
		$this->callbackSwitch = $callbackSwitch;
		$this->queryParameters["CallbackSwitch"]=$callbackSwitch;
	}

	public function getCallbackType() {
		return $this->callbackType;
	}

	public function setCallbackType($callbackType) {
		$this->callbackType = $callbackType;
		$this->queryParameters["CallbackType"]=$callbackType;
	}

	public function getCallbackURL() {
		return $this->callbackURL;
	}

	public function setCallbackURL($callbackURL) {
		$this->callbackURL = $callbackURL;
		$this->queryParameters["CallbackURL"]=$callbackURL;
	}
	
}