<?php
/**
 * KorrigierterPraktikumsberichtApiDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * VEDA Bildungsmanager API
 *
 * Dokumentation der REST-Schnittstellen des VEDA Bildungsmanagers für die Version 2. Die Dokumentation zu speziellen Versionen kann über die Angabe des zusätzlichen Parameters \"group\" angezeigt werden. Beispiel: .../api/docs?group=v1 für die Dokumentation der Version 1, die aktuelle Version ist unter .../api/docs erreichbar.
 *
 * OpenAPI spec version: 2
 * Contact: info@veda.net
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
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
 * KorrigierterPraktikumsberichtApiDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KorrigierterPraktikumsberichtApiDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KorrigierterPraktikumsberichtApiDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'praktikumsbericht_korrigiert' => 'bool',
        'praktikumsbericht_korrigiert_am' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'praktikumsbericht_korrigiert' => null,
        'praktikumsbericht_korrigiert_am' => 'date'
    ];

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
        'praktikumsbericht_korrigiert' => 'praktikumsberichtKorrigiert',
        'praktikumsbericht_korrigiert_am' => 'praktikumsberichtKorrigiertAm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'praktikumsbericht_korrigiert' => 'setPraktikumsberichtKorrigiert',
        'praktikumsbericht_korrigiert_am' => 'setPraktikumsberichtKorrigiertAm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'praktikumsbericht_korrigiert' => 'getPraktikumsberichtKorrigiert',
        'praktikumsbericht_korrigiert_am' => 'getPraktikumsberichtKorrigiertAm'
    ];

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
        $this->container['praktikumsbericht_korrigiert'] = isset($data['praktikumsbericht_korrigiert']) ? $data['praktikumsbericht_korrigiert'] : null;
        $this->container['praktikumsbericht_korrigiert_am'] = isset($data['praktikumsbericht_korrigiert_am']) ? $data['praktikumsbericht_korrigiert_am'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['praktikumsbericht_korrigiert'] === null) {
            $invalidProperties[] = "'praktikumsbericht_korrigiert' can't be null";
        }
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
     * Gets praktikumsbericht_korrigiert
     *
     * @return bool
     */
    public function getPraktikumsberichtKorrigiert()
    {
        return $this->container['praktikumsbericht_korrigiert'];
    }

    /**
     * Sets praktikumsbericht_korrigiert
     *
     * @param bool $praktikumsbericht_korrigiert Gibt an, ob der Praktikumsbericht geprüft ist oder nicht
     *
     * @return $this
     */
    public function setPraktikumsberichtKorrigiert($praktikumsbericht_korrigiert)
    {
        $this->container['praktikumsbericht_korrigiert'] = $praktikumsbericht_korrigiert;

        return $this;
    }

    /**
     * Gets praktikumsbericht_korrigiert_am
     *
     * @return \DateTime
     */
    public function getPraktikumsberichtKorrigiertAm()
    {
        return $this->container['praktikumsbericht_korrigiert_am'];
    }

    /**
     * Sets praktikumsbericht_korrigiert_am
     *
     * @param \DateTime $praktikumsbericht_korrigiert_am Optionales Datum, wann der Praktikumsbericht geprüft worden ist.
     *
     * @return $this
     */
    public function setPraktikumsberichtKorrigiertAm($praktikumsbericht_korrigiert_am)
    {
        $this->container['praktikumsbericht_korrigiert_am'] = $praktikumsbericht_korrigiert_am;

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


