<?php
/**
 * Ausbildungszug
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
 * Ausbildungszug Class Doc Comment
 *
 * @category Class
 * @description Ein Ausbildungszug mit den relevanten Daten.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Ausbildungszug implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ausbildungszug';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'oid' => 'string',
        'ausbildungsgang_id' => 'string',
        'ausbildungszugabschnitte' => '\Swagger\Client\Model\Ausbildungszugabschnitt[]',
        'links' => '\Swagger\Client\Model\Link[]',
        'name' => 'string',
        'planungsstatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'oid' => null,
        'ausbildungsgang_id' => null,
        'ausbildungszugabschnitte' => null,
        'links' => null,
        'name' => null,
        'planungsstatus' => null
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
        'oid' => 'oid',
        'ausbildungsgang_id' => 'ausbildungsgangId',
        'ausbildungszugabschnitte' => 'ausbildungszugabschnitte',
        'links' => 'links',
        'name' => 'name',
        'planungsstatus' => 'planungsstatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'oid' => 'setOid',
        'ausbildungsgang_id' => 'setAusbildungsgangId',
        'ausbildungszugabschnitte' => 'setAusbildungszugabschnitte',
        'links' => 'setLinks',
        'name' => 'setName',
        'planungsstatus' => 'setPlanungsstatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'oid' => 'getOid',
        'ausbildungsgang_id' => 'getAusbildungsgangId',
        'ausbildungszugabschnitte' => 'getAusbildungszugabschnitte',
        'links' => 'getLinks',
        'name' => 'getName',
        'planungsstatus' => 'getPlanungsstatus'
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

    const PLANUNGSSTATUS_IN_PLANUNG = 'IN_PLANUNG';
    const PLANUNGSSTATUS_FREIGEGEBEN = 'FREIGEGEBEN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlanungsstatusAllowableValues()
    {
        return [
            self::PLANUNGSSTATUS_IN_PLANUNG,
            self::PLANUNGSSTATUS_FREIGEGEBEN,
        ];
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
        $this->container['oid'] = isset($data['oid']) ? $data['oid'] : null;
        $this->container['ausbildungsgang_id'] = isset($data['ausbildungsgang_id']) ? $data['ausbildungsgang_id'] : null;
        $this->container['ausbildungszugabschnitte'] = isset($data['ausbildungszugabschnitte']) ? $data['ausbildungszugabschnitte'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['planungsstatus'] = isset($data['planungsstatus']) ? $data['planungsstatus'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['oid'] === null) {
            $invalidProperties[] = "'oid' can't be null";
        }
        if ($this->container['ausbildungsgang_id'] === null) {
            $invalidProperties[] = "'ausbildungsgang_id' can't be null";
        }
        if ($this->container['ausbildungszugabschnitte'] === null) {
            $invalidProperties[] = "'ausbildungszugabschnitte' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['planungsstatus'] === null) {
            $invalidProperties[] = "'planungsstatus' can't be null";
        }
        $allowedValues = $this->getPlanungsstatusAllowableValues();
        if (!is_null($this->container['planungsstatus']) && !in_array($this->container['planungsstatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'planungsstatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets oid
     *
     * @return string
     */
    public function getOid()
    {
        return $this->container['oid'];
    }

    /**
     * Sets oid
     *
     * @param string $oid UUID des Datensatzes
     *
     * @return $this
     */
    public function setOid($oid)
    {
        $this->container['oid'] = $oid;

        return $this;
    }

    /**
     * Gets ausbildungsgang_id
     *
     * @return string
     */
    public function getAusbildungsgangId()
    {
        return $this->container['ausbildungsgang_id'];
    }

    /**
     * Sets ausbildungsgang_id
     *
     * @param string $ausbildungsgang_id ID des Ausbildungsgang
     *
     * @return $this
     */
    public function setAusbildungsgangId($ausbildungsgang_id)
    {
        $this->container['ausbildungsgang_id'] = $ausbildungsgang_id;

        return $this;
    }

    /**
     * Gets ausbildungszugabschnitte
     *
     * @return \Swagger\Client\Model\Ausbildungszugabschnitt[]
     */
    public function getAusbildungszugabschnitte()
    {
        return $this->container['ausbildungszugabschnitte'];
    }

    /**
     * Sets ausbildungszugabschnitte
     *
     * @param \Swagger\Client\Model\Ausbildungszugabschnitt[] $ausbildungszugabschnitte Abschnitte des Ausbildungszugs
     *
     * @return $this
     */
    public function setAusbildungszugabschnitte($ausbildungszugabschnitte)
    {
        $this->container['ausbildungszugabschnitte'] = $ausbildungszugabschnitte;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Swagger\Client\Model\Link[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Swagger\Client\Model\Link[] $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name des Ausbildungszugs
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets planungsstatus
     *
     * @return string
     */
    public function getPlanungsstatus()
    {
        return $this->container['planungsstatus'];
    }

    /**
     * Sets planungsstatus
     *
     * @param string $planungsstatus Der Planungsstatus
     *
     * @return $this
     */
    public function setPlanungsstatus($planungsstatus)
    {
        $allowedValues = $this->getPlanungsstatusAllowableValues();
        if (!in_array($planungsstatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'planungsstatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['planungsstatus'] = $planungsstatus;

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


