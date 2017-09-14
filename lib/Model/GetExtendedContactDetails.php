<?php
/**
 * GetExtendedContactDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SendinBlue\Client\Model;

use \ArrayAccess;

/**
 * GetExtendedContactDetails Class Doc Comment
 *
 * @category    Class
 * @package     SendinBlue\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetExtendedContactDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'getExtendedContactDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'id' => 'int',
        'emailBlacklisted' => 'bool',
        'smsBlacklisted' => 'bool',
        'modifiedAt' => 'string',
        'listIds' => 'int[]',
        'listUnsubscribed' => 'int[]',
        'attributes' => 'map[string,string]',
        'statistics' => '\SendinBlue\Client\Model\GetExtendedContactDetailsStatistics'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => 'email',
        'id' => 'int32',
        'emailBlacklisted' => null,
        'smsBlacklisted' => null,
        'modifiedAt' => null,
        'listIds' => 'int32',
        'listUnsubscribed' => 'int32',
        'attributes' => null,
        'statistics' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'email' => 'email',
        'id' => 'id',
        'emailBlacklisted' => 'emailBlacklisted',
        'smsBlacklisted' => 'smsBlacklisted',
        'modifiedAt' => 'modifiedAt',
        'listIds' => 'listIds',
        'listUnsubscribed' => 'listUnsubscribed',
        'attributes' => 'attributes',
        'statistics' => 'statistics'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'id' => 'setId',
        'emailBlacklisted' => 'setEmailBlacklisted',
        'smsBlacklisted' => 'setSmsBlacklisted',
        'modifiedAt' => 'setModifiedAt',
        'listIds' => 'setListIds',
        'listUnsubscribed' => 'setListUnsubscribed',
        'attributes' => 'setAttributes',
        'statistics' => 'setStatistics'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'id' => 'getId',
        'emailBlacklisted' => 'getEmailBlacklisted',
        'smsBlacklisted' => 'getSmsBlacklisted',
        'modifiedAt' => 'getModifiedAt',
        'listIds' => 'getListIds',
        'listUnsubscribed' => 'getListUnsubscribed',
        'attributes' => 'getAttributes',
        'statistics' => 'getStatistics'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['emailBlacklisted'] = isset($data['emailBlacklisted']) ? $data['emailBlacklisted'] : null;
        $this->container['smsBlacklisted'] = isset($data['smsBlacklisted']) ? $data['smsBlacklisted'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
        $this->container['listIds'] = isset($data['listIds']) ? $data['listIds'] : null;
        $this->container['listUnsubscribed'] = isset($data['listUnsubscribed']) ? $data['listUnsubscribed'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['emailBlacklisted'] === null) {
            $invalid_properties[] = "'emailBlacklisted' can't be null";
        }
        if ($this->container['smsBlacklisted'] === null) {
            $invalid_properties[] = "'smsBlacklisted' can't be null";
        }
        if ($this->container['modifiedAt'] === null) {
            $invalid_properties[] = "'modifiedAt' can't be null";
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $this->container['modifiedAt'])) {
            $invalid_properties[] = "invalid value for 'modifiedAt', must be conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/.";
        }

        if ($this->container['listIds'] === null) {
            $invalid_properties[] = "'listIds' can't be null";
        }
        if ($this->container['attributes'] === null) {
            $invalid_properties[] = "'attributes' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['emailBlacklisted'] === null) {
            return false;
        }
        if ($this->container['smsBlacklisted'] === null) {
            return false;
        }
        if ($this->container['modifiedAt'] === null) {
            return false;
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $this->container['modifiedAt'])) {
            return false;
        }
        if ($this->container['listIds'] === null) {
            return false;
        }
        if ($this->container['attributes'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Email address of the contact for which you requested the details
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id ID of the contact for which you requested the details
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets emailBlacklisted
     * @return bool
     */
    public function getEmailBlacklisted()
    {
        return $this->container['emailBlacklisted'];
    }

    /**
     * Sets emailBlacklisted
     * @param bool $emailBlacklisted Blacklist status for email campaigns (true=blacklisted, false=not blacklisted)
     * @return $this
     */
    public function setEmailBlacklisted($emailBlacklisted)
    {
        $this->container['emailBlacklisted'] = $emailBlacklisted;

        return $this;
    }

    /**
     * Gets smsBlacklisted
     * @return bool
     */
    public function getSmsBlacklisted()
    {
        return $this->container['smsBlacklisted'];
    }

    /**
     * Sets smsBlacklisted
     * @param bool $smsBlacklisted Blacklist status for SMS campaigns (true=blacklisted, false=not blacklisted)
     * @return $this
     */
    public function setSmsBlacklisted($smsBlacklisted)
    {
        $this->container['smsBlacklisted'] = $smsBlacklisted;

        return $this;
    }

    /**
     * Gets modifiedAt
     * @return string
     */
    public function getModifiedAt()
    {
        return $this->container['modifiedAt'];
    }

    /**
     * Sets modifiedAt
     * @param string $modifiedAt Last modification date of the contact (YYYY-MM-DD HH:mm:ss)
     * @return $this
     */
    public function setModifiedAt($modifiedAt)
    {

        if ((!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $modifiedAt))) {
            throw new \InvalidArgumentException("invalid value for $modifiedAt when calling GetExtendedContactDetails., must conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/.");
        }

        $this->container['modifiedAt'] = $modifiedAt;

        return $this;
    }

    /**
     * Gets listIds
     * @return int[]
     */
    public function getListIds()
    {
        return $this->container['listIds'];
    }

    /**
     * Sets listIds
     * @param int[] $listIds
     * @return $this
     */
    public function setListIds($listIds)
    {
        $this->container['listIds'] = $listIds;

        return $this;
    }

    /**
     * Gets listUnsubscribed
     * @return int[]
     */
    public function getListUnsubscribed()
    {
        return $this->container['listUnsubscribed'];
    }

    /**
     * Sets listUnsubscribed
     * @param int[] $listUnsubscribed
     * @return $this
     */
    public function setListUnsubscribed($listUnsubscribed)
    {
        $this->container['listUnsubscribed'] = $listUnsubscribed;

        return $this;
    }

    /**
     * Gets attributes
     * @return map[string,string]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     * @param map[string,string] $attributes
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets statistics
     * @return \SendinBlue\Client\Model\GetExtendedContactDetailsStatistics
     */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
     * Sets statistics
     * @param \SendinBlue\Client\Model\GetExtendedContactDetailsStatistics $statistics
     * @return $this
     */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\SendinBlue\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SendinBlue\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


