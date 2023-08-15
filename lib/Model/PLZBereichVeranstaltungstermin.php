<?php
/**
 * PLZBereichVeranstaltungstermin
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * VEDA Bildungsmanager API
 *
 * Dokumentation der REST-Schnittstellen des VEDA Bildungsmanagers für die Version 2. Die Dokumentation zu speziellen Versionen kann über die Angabe des zusätzlichen Parameters \"group\" angezeigt werden. Beispiel: .../api/docs?group=v1 für die Dokumentation der Version 1, die aktuelle Version ist unter .../api/docs erreichbar.
 *
 * The version of the OpenAPI document: 2
 * Contact: info@veda.net
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PLZBereichVeranstaltungstermin Class Doc Comment
 *
 * @category Class
 * @description Ein PLZ-Bereich, der dem Veranstaltungstermin zugeordnet ist.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PLZBereichVeranstaltungstermin implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PLZ-Bereich_Veranstaltungstermin';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'oid' => 'string',
        'links' => '\OpenAPI\Client\Model\Link[]',
        'plz_bis' => 'string',
        'plz_von' => 'string',
        'veranstaltungstermin_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'oid' => null,
        'links' => null,
        'plz_bis' => null,
        'plz_von' => null,
        'veranstaltungstermin_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'oid' => false,
		'links' => false,
		'plz_bis' => false,
		'plz_von' => false,
		'veranstaltungstermin_id' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'oid' => 'oid',
        'links' => 'links',
        'plz_bis' => 'plzBis',
        'plz_von' => 'plzVon',
        'veranstaltungstermin_id' => 'veranstaltungsterminID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'oid' => 'setOid',
        'links' => 'setLinks',
        'plz_bis' => 'setPlzBis',
        'plz_von' => 'setPlzVon',
        'veranstaltungstermin_id' => 'setVeranstaltungsterminId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'oid' => 'getOid',
        'links' => 'getLinks',
        'plz_bis' => 'getPlzBis',
        'plz_von' => 'getPlzVon',
        'veranstaltungstermin_id' => 'getVeranstaltungsterminId'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('oid', $data ?? [], null);
        $this->setIfExists('links', $data ?? [], null);
        $this->setIfExists('plz_bis', $data ?? [], null);
        $this->setIfExists('plz_von', $data ?? [], null);
        $this->setIfExists('veranstaltungstermin_id', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
        if ($this->container['plz_bis'] === null) {
            $invalidProperties[] = "'plz_bis' can't be null";
        }
        if ($this->container['plz_von'] === null) {
            $invalidProperties[] = "'plz_von' can't be null";
        }
        if ($this->container['veranstaltungstermin_id'] === null) {
            $invalidProperties[] = "'veranstaltungstermin_id' can't be null";
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
     * @return self
     */
    public function setOid($oid)
    {
        if (is_null($oid)) {
            throw new \InvalidArgumentException('non-nullable oid cannot be null');
        }
        $this->container['oid'] = $oid;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \OpenAPI\Client\Model\Link[]|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \OpenAPI\Client\Model\Link[]|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
        }
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets plz_bis
     *
     * @return string
     */
    public function getPlzBis()
    {
        return $this->container['plz_bis'];
    }

    /**
     * Sets plz_bis
     *
     * @param string $plz_bis PLZ bis
     *
     * @return self
     */
    public function setPlzBis($plz_bis)
    {
        if (is_null($plz_bis)) {
            throw new \InvalidArgumentException('non-nullable plz_bis cannot be null');
        }
        $this->container['plz_bis'] = $plz_bis;

        return $this;
    }

    /**
     * Gets plz_von
     *
     * @return string
     */
    public function getPlzVon()
    {
        return $this->container['plz_von'];
    }

    /**
     * Sets plz_von
     *
     * @param string $plz_von PLZ von
     *
     * @return self
     */
    public function setPlzVon($plz_von)
    {
        if (is_null($plz_von)) {
            throw new \InvalidArgumentException('non-nullable plz_von cannot be null');
        }
        $this->container['plz_von'] = $plz_von;

        return $this;
    }

    /**
     * Gets veranstaltungstermin_id
     *
     * @return string
     */
    public function getVeranstaltungsterminId()
    {
        return $this->container['veranstaltungstermin_id'];
    }

    /**
     * Sets veranstaltungstermin_id
     *
     * @param string $veranstaltungstermin_id Die ID des Veranstaltungstermins des Postleitzahl-Bereichs.
     *
     * @return self
     */
    public function setVeranstaltungsterminId($veranstaltungstermin_id)
    {
        if (is_null($veranstaltungstermin_id)) {
            throw new \InvalidArgumentException('non-nullable veranstaltungstermin_id cannot be null');
        }
        $this->container['veranstaltungstermin_id'] = $veranstaltungstermin_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


