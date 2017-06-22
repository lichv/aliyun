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
namespace Aliyun\Iot\Request\V20160530;
use Aliyun\Core\RpcAcsRequest;

class UpdateProductRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Iot", "2016-05-30", "UpdateProduct");
	}

	private  $productName;

	private  $productDesc;

	private  $extProps;

	private  $catId;

	private  $productKey;

	public function getProductName() {
		return $this->productName;
	}

	public function setProductName($productName) {
		$this->productName = $productName;
		$this->queryParameters["ProductName"]=$productName;
	}

	public function getProductDesc() {
		return $this->productDesc;
	}

	public function setProductDesc($productDesc) {
		$this->productDesc = $productDesc;
		$this->queryParameters["ProductDesc"]=$productDesc;
	}

	public function getExtProps() {
		return $this->extProps;
	}

	public function setExtProps($extProps) {
		$this->extProps = $extProps;
		$this->queryParameters["ExtProps"]=$extProps;
	}

	public function getCatId() {
		return $this->catId;
	}

	public function setCatId($catId) {
		$this->catId = $catId;
		$this->queryParameters["CatId"]=$catId;
	}

	public function getProductKey() {
		return $this->productKey;
	}

	public function setProductKey($productKey) {
		$this->productKey = $productKey;
		$this->queryParameters["ProductKey"]=$productKey;
	}
	
}