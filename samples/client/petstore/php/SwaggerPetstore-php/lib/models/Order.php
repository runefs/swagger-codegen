<?php
/**
 *  Copyright 2015 Reverb Technologies, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

namespace SwaggerPetstore\models;

use \ArrayAccess;

class Order implements ArrayAccess {
  static $swaggerTypes = array(
      'id' => 'int',
      'pet_id' => 'int',
      'quantity' => 'int',
      'ship_date' => 'DateTime',
      'status' => 'string',
      'complete' => 'boolean'
  );

  static $attributeMap = array(
      'id' => 'id',
      'pet_id' => 'petId',
      'quantity' => 'quantity',
      'ship_date' => 'shipDate',
      'status' => 'status',
      'complete' => 'complete'
  );

  
  public $id; /* int */
  public $pet_id; /* int */
  public $quantity; /* int */
  public $ship_date; /* DateTime */
  /**
  * Order Status
  */
  public $status; /* string */
  public $complete; /* boolean */

  public function __construct(array $data = null) {
    $this->id = $data["id"];
    $this->pet_id = $data["pet_id"];
    $this->quantity = $data["quantity"];
    $this->ship_date = $data["ship_date"];
    $this->status = $data["status"];
    $this->complete = $data["complete"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}
