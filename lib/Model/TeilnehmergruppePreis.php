<?php
/**
 * TeilnehmergruppePreis
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
 * TeilnehmergruppePreis Class Doc Comment
 *
 * @category Class
 * @description Die Preisangabe eines Veranstaltungstermins/Terminreihe für eine Teilnehmergruppe.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TeilnehmergruppePreis implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TeilnehmergruppePreis';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'anzahl_raten' => 'int',
        'preis' => 'float',
        'teilnehmergruppe_id' => 'string',
        'zahlungsweise' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'anzahl_raten' => null,
        'preis' => null,
        'teilnehmergruppe_id' => null,
        'zahlungsweise' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'anzahl_raten' => false,
		'preis' => false,
		'teilnehmergruppe_id' => false,
		'zahlungsweise' => false
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
        'anzahl_raten' => 'anzahlRaten',
        'preis' => 'preis',
        'teilnehmergruppe_id' => 'teilnehmergruppeID',
        'zahlungsweise' => 'zahlungsweise'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'anzahl_raten' => 'setAnzahlRaten',
        'preis' => 'setPreis',
        'teilnehmergruppe_id' => 'setTeilnehmergruppeId',
        'zahlungsweise' => 'setZahlungsweise'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'anzahl_raten' => 'getAnzahlRaten',
        'preis' => 'getPreis',
        'teilnehmergruppe_id' => 'getTeilnehmergruppeId',
        'zahlungsweise' => 'getZahlungsweise'
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

    public const ZAHLUNGSWEISE_EINMALZAHLUNG = 'Einmalzahlung';
    public const ZAHLUNGSWEISE_RATENZAHLUNG = 'Ratenzahlung';
    public const ZAHLUNGSWEISE_TEILZAHLUNG = 'Teilzahlung';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getZahlungsweiseAllowableValues()
    {
        return [
            self::ZAHLUNGSWEISE_EINMALZAHLUNG,
            self::ZAHLUNGSWEISE_RATENZAHLUNG,
            self::ZAHLUNGSWEISE_TEILZAHLUNG,
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
        $this->setIfExists('anzahl_raten', $data ?? [], null);
        $this->setIfExists('preis', $data ?? [], null);
        $this->setIfExists('teilnehmergruppe_id', $data ?? [], null);
        $this->setIfExists('zahlungsweise', $data ?? [], null);
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

        $allowedValues = $this->getZahlungsweiseAllowableValues();
        if (!is_null($this->container['zahlungsweise']) && !in_array($this->container['zahlungsweise'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'zahlungsweise', must be one of '%s'",
                $this->container['zahlungsweise'],
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
     * Gets anzahl_raten
     *
     * @return int|null
     */
    public function getAnzahlRaten()
    {
        return $this->container['anzahl_raten'];
    }

    /**
     * Sets anzahl_raten
     *
     * @param int|null $anzahl_raten Ausser bei Zahlungsweise 'Einmalzahlung': die Anzahl der Raten.
     *
     * @return self
     */
    public function setAnzahlRaten($anzahl_raten)
    {
        if (is_null($anzahl_raten)) {
            throw new \InvalidArgumentException('non-nullable anzahl_raten cannot be null');
        }
        $this->container['anzahl_raten'] = $anzahl_raten;

        return $this;
    }

    /**
     * Gets preis
     *
     * @return float|null
     */
    public function getPreis()
    {
        return $this->container['preis'];
    }

    /**
     * Sets preis
     *
     * @param float|null $preis Der Preis für den Veranstaltungstermin/Terminreihe.
     *
     * @return self
     */
    public function setPreis($preis)
    {
        if (is_null($preis)) {
            throw new \InvalidArgumentException('non-nullable preis cannot be null');
        }
        $this->container['preis'] = $preis;

        return $this;
    }

    /**
     * Gets teilnehmergruppe_id
     *
     * @return string|null
     */
    public function getTeilnehmergruppeId()
    {
        return $this->container['teilnehmergruppe_id'];
    }

    /**
     * Sets teilnehmergruppe_id
     *
     * @param string|null $teilnehmergruppe_id Die ID der Teilnehmergruppe, für die der Preis angegeben ist.
     *
     * @return self
     */
    public function setTeilnehmergruppeId($teilnehmergruppe_id)
    {
        if (is_null($teilnehmergruppe_id)) {
            throw new \InvalidArgumentException('non-nullable teilnehmergruppe_id cannot be null');
        }
        $this->container['teilnehmergruppe_id'] = $teilnehmergruppe_id;

        return $this;
    }

    /**
     * Gets zahlungsweise
     *
     * @return string|null
     */
    public function getZahlungsweise()
    {
        return $this->container['zahlungsweise'];
    }

    /**
     * Sets zahlungsweise
     *
     * @param string|null $zahlungsweise Die Zahlungsweise, für die der Preis angegeben ist.
     *
     * @return self
     */
    public function setZahlungsweise($zahlungsweise)
    {
        if (is_null($zahlungsweise)) {
            throw new \InvalidArgumentException('non-nullable zahlungsweise cannot be null');
        }
        $allowedValues = $this->getZahlungsweiseAllowableValues();
        if (!in_array($zahlungsweise, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'zahlungsweise', must be one of '%s'",
                    $zahlungsweise,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['zahlungsweise'] = $zahlungsweise;

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


