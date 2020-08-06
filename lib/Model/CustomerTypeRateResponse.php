<?php
/**
 * CustomerTypeRateResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * fareharbor API
 *
 * This is a simple API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: you@your-company.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CustomerTypeRateResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerTypeRateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerTypeRateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pk' => 'int',
'total' => 'int',
'capacity' => 'int',
'is_exclusive' => 'bool',
'customer_type' => '\Swagger\Client\Model\CustomerType',
'customer_prototype' => '\Swagger\Client\Model\CustomerBookingPrototype'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pk' => null,
'total' => null,
'capacity' => null,
'is_exclusive' => null,
'customer_type' => null,
'customer_prototype' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pk' => 'pk',
'total' => 'total',
'capacity' => 'capacity',
'is_exclusive' => 'is_exclusive',
'customer_type' => 'customer_type',
'customer_prototype' => 'customer_prototype'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pk' => 'setPk',
'total' => 'setTotal',
'capacity' => 'setCapacity',
'is_exclusive' => 'setIsExclusive',
'customer_type' => 'setCustomerType',
'customer_prototype' => 'setCustomerPrototype'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pk' => 'getPk',
'total' => 'getTotal',
'capacity' => 'getCapacity',
'is_exclusive' => 'getIsExclusive',
'customer_type' => 'getCustomerType',
'customer_prototype' => 'getCustomerPrototype'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['pk'] = isset($data['pk']) ? $data['pk'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['is_exclusive'] = isset($data['is_exclusive']) ? $data['is_exclusive'] : null;
        $this->container['customer_type'] = isset($data['customer_type']) ? $data['customer_type'] : null;
        $this->container['customer_prototype'] = isset($data['customer_prototype']) ? $data['customer_prototype'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets pk
     *
     * @return int
     */
    public function getPk()
    {
        return $this->container['pk'];
    }

    /**
     * Sets pk
     *
     * @param int $pk pk
     *
     * @return $this
     */
    public function setPk($pk)
    {
        $this->container['pk'] = $pk;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param int $capacity capacity
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }

    /**
     * Gets is_exclusive
     *
     * @return bool
     */
    public function getIsExclusive()
    {
        return $this->container['is_exclusive'];
    }

    /**
     * Sets is_exclusive
     *
     * @param bool $is_exclusive is_exclusive
     *
     * @return $this
     */
    public function setIsExclusive($is_exclusive)
    {
        $this->container['is_exclusive'] = $is_exclusive;

        return $this;
    }

    /**
     * Gets customer_type
     *
     * @return \Swagger\Client\Model\CustomerType
     */
    public function getCustomerType()
    {
        return $this->container['customer_type'];
    }

    /**
     * Sets customer_type
     *
     * @param \Swagger\Client\Model\CustomerType $customer_type customer_type
     *
     * @return $this
     */
    public function setCustomerType($customer_type)
    {
        $this->container['customer_type'] = $customer_type;

        return $this;
    }

    /**
     * Gets customer_prototype
     *
     * @return \Swagger\Client\Model\CustomerBookingPrototype
     */
    public function getCustomerPrototype()
    {
        return $this->container['customer_prototype'];
    }

    /**
     * Sets customer_prototype
     *
     * @param \Swagger\Client\Model\CustomerBookingPrototype $customer_prototype customer_prototype
     *
     * @return $this
     */
    public function setCustomerPrototype($customer_prototype)
    {
        $this->container['customer_prototype'] = $customer_prototype;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
