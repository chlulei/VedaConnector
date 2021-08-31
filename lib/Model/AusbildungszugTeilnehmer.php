<?php
/**
 * AusbildungszugTeilnehmer
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
 * Swagger Codegen version: 2.4.21
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
 * AusbildungszugTeilnehmer Class Doc Comment
 *
 * @category Class
 * @description Teilnehmer eines Ausbildungszugs mit Informationen über die Mitgliedschaft.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AusbildungszugTeilnehmer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AusbildungszugTeilnehmer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'beginn' => '\DateTime',
        'ende' => '\DateTime',
        'kurs_zugriff_ab' => '\DateTime',
        'kurs_zugriff_bis' => '\DateTime',
        'links' => '\Swagger\Client\Model\Link[]',
        'mitgliedschaftsart' => 'string',
        'teilnehmer_id' => 'string',
        'wechsel' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'beginn' => 'date',
        'ende' => 'date',
        'kurs_zugriff_ab' => 'date',
        'kurs_zugriff_bis' => 'date',
        'links' => null,
        'mitgliedschaftsart' => null,
        'teilnehmer_id' => null,
        'wechsel' => null
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
        'beginn' => 'beginn',
        'ende' => 'ende',
        'kurs_zugriff_ab' => 'kursZugriffAb',
        'kurs_zugriff_bis' => 'kursZugriffBis',
        'links' => 'links',
        'mitgliedschaftsart' => 'mitgliedschaftsart',
        'teilnehmer_id' => 'teilnehmerID',
        'wechsel' => 'wechsel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'beginn' => 'setBeginn',
        'ende' => 'setEnde',
        'kurs_zugriff_ab' => 'setKursZugriffAb',
        'kurs_zugriff_bis' => 'setKursZugriffBis',
        'links' => 'setLinks',
        'mitgliedschaftsart' => 'setMitgliedschaftsart',
        'teilnehmer_id' => 'setTeilnehmerId',
        'wechsel' => 'setWechsel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'beginn' => 'getBeginn',
        'ende' => 'getEnde',
        'kurs_zugriff_ab' => 'getKursZugriffAb',
        'kurs_zugriff_bis' => 'getKursZugriffBis',
        'links' => 'getLinks',
        'mitgliedschaftsart' => 'getMitgliedschaftsart',
        'teilnehmer_id' => 'getTeilnehmerId',
        'wechsel' => 'getWechsel'
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

    const MITGLIEDSCHAFTSART_REGULAER = 'REGULAER';
    const MITGLIEDSCHAFTSART_TEMPORAER = 'TEMPORAER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMitgliedschaftsartAllowableValues()
    {
        return [
            self::MITGLIEDSCHAFTSART_REGULAER,
            self::MITGLIEDSCHAFTSART_TEMPORAER,
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
        $this->container['beginn'] = isset($data['beginn']) ? $data['beginn'] : null;
        $this->container['ende'] = isset($data['ende']) ? $data['ende'] : null;
        $this->container['kurs_zugriff_ab'] = isset($data['kurs_zugriff_ab']) ? $data['kurs_zugriff_ab'] : null;
        $this->container['kurs_zugriff_bis'] = isset($data['kurs_zugriff_bis']) ? $data['kurs_zugriff_bis'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['mitgliedschaftsart'] = isset($data['mitgliedschaftsart']) ? $data['mitgliedschaftsart'] : null;
        $this->container['teilnehmer_id'] = isset($data['teilnehmer_id']) ? $data['teilnehmer_id'] : null;
        $this->container['wechsel'] = isset($data['wechsel']) ? $data['wechsel'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['kurs_zugriff_ab'] === null) {
            $invalidProperties[] = "'kurs_zugriff_ab' can't be null";
        }
        if ($this->container['kurs_zugriff_bis'] === null) {
            $invalidProperties[] = "'kurs_zugriff_bis' can't be null";
        }
        $allowedValues = $this->getMitgliedschaftsartAllowableValues();
        if (!is_null($this->container['mitgliedschaftsart']) && !in_array($this->container['mitgliedschaftsart'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mitgliedschaftsart', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['teilnehmer_id'] === null) {
            $invalidProperties[] = "'teilnehmer_id' can't be null";
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
     * Gets beginn
     *
     * @return \DateTime
     */
    public function getBeginn()
    {
        return $this->container['beginn'];
    }

    /**
     * Sets beginn
     *
     * @param \DateTime $beginn Das Tagesdatum, an dem die Mitgliedschaft beginnt.
     *
     * @return $this
     */
    public function setBeginn($beginn)
    {
        $this->container['beginn'] = $beginn;

        return $this;
    }

    /**
     * Gets ende
     *
     * @return \DateTime
     */
    public function getEnde()
    {
        return $this->container['ende'];
    }

    /**
     * Sets ende
     *
     * @param \DateTime $ende Das Tagesdatum (einschließlich), an dem die Mitgliedschaft endet.
     *
     * @return $this
     */
    public function setEnde($ende)
    {
        $this->container['ende'] = $ende;

        return $this;
    }

    /**
     * Gets kurs_zugriff_ab
     *
     * @return \DateTime
     */
    public function getKursZugriffAb()
    {
        return $this->container['kurs_zugriff_ab'];
    }

    /**
     * Sets kurs_zugriff_ab
     *
     * @param \DateTime $kurs_zugriff_ab Das Tagesdatum, an dem der Kurszugriff beginnt.
     *
     * @return $this
     */
    public function setKursZugriffAb($kurs_zugriff_ab)
    {
        $this->container['kurs_zugriff_ab'] = $kurs_zugriff_ab;

        return $this;
    }

    /**
     * Gets kurs_zugriff_bis
     *
     * @return \DateTime
     */
    public function getKursZugriffBis()
    {
        return $this->container['kurs_zugriff_bis'];
    }

    /**
     * Sets kurs_zugriff_bis
     *
     * @param \DateTime $kurs_zugriff_bis Das Tagesdatum (einschließlich), an dem der Kurszugriff endet.
     *
     * @return $this
     */
    public function setKursZugriffBis($kurs_zugriff_bis)
    {
        $this->container['kurs_zugriff_bis'] = $kurs_zugriff_bis;

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
     * Gets mitgliedschaftsart
     *
     * @return string
     */
    public function getMitgliedschaftsart()
    {
        return $this->container['mitgliedschaftsart'];
    }

    /**
     * Sets mitgliedschaftsart
     *
     * @param string $mitgliedschaftsart Die Art der Mitgliedschaft des Teilnehmers zum Ausbildungszug.
     *
     * @return $this
     */
    public function setMitgliedschaftsart($mitgliedschaftsart)
    {
        $allowedValues = $this->getMitgliedschaftsartAllowableValues();
        if (!is_null($mitgliedschaftsart) && !in_array($mitgliedschaftsart, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mitgliedschaftsart', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mitgliedschaftsart'] = $mitgliedschaftsart;

        return $this;
    }

    /**
     * Gets teilnehmer_id
     *
     * @return string
     */
    public function getTeilnehmerId()
    {
        return $this->container['teilnehmer_id'];
    }

    /**
     * Sets teilnehmer_id
     *
     * @param string $teilnehmer_id Der Teilnehmer, der Mitglied im Ausbildungszug ist.
     *
     * @return $this
     */
    public function setTeilnehmerId($teilnehmer_id)
    {
        $this->container['teilnehmer_id'] = $teilnehmer_id;

        return $this;
    }

    /**
     * Gets wechsel
     *
     * @return bool
     */
    public function getWechsel()
    {
        return $this->container['wechsel'];
    }

    /**
     * Sets wechsel
     *
     * @param bool $wechsel Gibt an, ob diese Mitgliedschaft durch einen Wechsel in diesen Ausbildungszug entstanden ist
     *
     * @return $this
     */
    public function setWechsel($wechsel)
    {
        $this->container['wechsel'] = $wechsel;

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


