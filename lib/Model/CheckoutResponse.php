<?php
/**
 * CheckoutResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Femsa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Femsa API
 *
 * Femsa sdk
 *
 * The version of the OpenAPI document: 2.1.0
 * Contact: engineering@femsa.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Femsa\Model;

use \ArrayAccess;
use \Femsa\ObjectSerializer;

/**
 * CheckoutResponse Class Doc Comment
 *
 * @category Class
 * @description checkout response
 * @package  Femsa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CheckoutResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'checkout_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allowed_payment_methods' => 'string[]',
        'can_not_expire' => 'bool',
        'emails_sent' => 'int',
        'expires_at' => 'int',
        'failure_url' => 'string',
        'id' => 'string',
        'livemode' => 'bool',
        'metadata' => 'array<string,mixed>',
        'name' => 'string',
        'needs_shipping_contact' => 'bool',
        'object' => 'string',
        'paid_payments_count' => 'int',
        'payments_limit_count' => 'int',
        'recurrent' => 'bool',
        'slug' => 'string',
        'sms_sent' => 'int',
        'starts_at' => 'int',
        'status' => 'string',
        'success_url' => 'string',
        'type' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allowed_payment_methods' => null,
        'can_not_expire' => null,
        'emails_sent' => null,
        'expires_at' => 'int64',
        'failure_url' => null,
        'id' => null,
        'livemode' => null,
        'metadata' => null,
        'name' => null,
        'needs_shipping_contact' => null,
        'object' => null,
        'paid_payments_count' => null,
        'payments_limit_count' => 'int8',
        'recurrent' => null,
        'slug' => null,
        'sms_sent' => null,
        'starts_at' => null,
        'status' => null,
        'success_url' => null,
        'type' => null,
        'url' => 'uri'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'allowed_payment_methods' => false,
        'can_not_expire' => false,
        'emails_sent' => false,
        'expires_at' => false,
        'failure_url' => false,
        'id' => false,
        'livemode' => false,
        'metadata' => false,
        'name' => false,
        'needs_shipping_contact' => false,
        'object' => false,
        'paid_payments_count' => false,
        'payments_limit_count' => true,
        'recurrent' => false,
        'slug' => false,
        'sms_sent' => false,
        'starts_at' => false,
        'status' => false,
        'success_url' => false,
        'type' => false,
        'url' => false
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
        'allowed_payment_methods' => 'allowed_payment_methods',
        'can_not_expire' => 'can_not_expire',
        'emails_sent' => 'emails_sent',
        'expires_at' => 'expires_at',
        'failure_url' => 'failure_url',
        'id' => 'id',
        'livemode' => 'livemode',
        'metadata' => 'metadata',
        'name' => 'name',
        'needs_shipping_contact' => 'needs_shipping_contact',
        'object' => 'object',
        'paid_payments_count' => 'paid_payments_count',
        'payments_limit_count' => 'payments_limit_count',
        'recurrent' => 'recurrent',
        'slug' => 'slug',
        'sms_sent' => 'sms_sent',
        'starts_at' => 'starts_at',
        'status' => 'status',
        'success_url' => 'success_url',
        'type' => 'type',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed_payment_methods' => 'setAllowedPaymentMethods',
        'can_not_expire' => 'setCanNotExpire',
        'emails_sent' => 'setEmailsSent',
        'expires_at' => 'setExpiresAt',
        'failure_url' => 'setFailureUrl',
        'id' => 'setId',
        'livemode' => 'setLivemode',
        'metadata' => 'setMetadata',
        'name' => 'setName',
        'needs_shipping_contact' => 'setNeedsShippingContact',
        'object' => 'setObject',
        'paid_payments_count' => 'setPaidPaymentsCount',
        'payments_limit_count' => 'setPaymentsLimitCount',
        'recurrent' => 'setRecurrent',
        'slug' => 'setSlug',
        'sms_sent' => 'setSmsSent',
        'starts_at' => 'setStartsAt',
        'status' => 'setStatus',
        'success_url' => 'setSuccessUrl',
        'type' => 'setType',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed_payment_methods' => 'getAllowedPaymentMethods',
        'can_not_expire' => 'getCanNotExpire',
        'emails_sent' => 'getEmailsSent',
        'expires_at' => 'getExpiresAt',
        'failure_url' => 'getFailureUrl',
        'id' => 'getId',
        'livemode' => 'getLivemode',
        'metadata' => 'getMetadata',
        'name' => 'getName',
        'needs_shipping_contact' => 'getNeedsShippingContact',
        'object' => 'getObject',
        'paid_payments_count' => 'getPaidPaymentsCount',
        'payments_limit_count' => 'getPaymentsLimitCount',
        'recurrent' => 'getRecurrent',
        'slug' => 'getSlug',
        'sms_sent' => 'getSmsSent',
        'starts_at' => 'getStartsAt',
        'status' => 'getStatus',
        'success_url' => 'getSuccessUrl',
        'type' => 'getType',
        'url' => 'getUrl'
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
        $this->setIfExists('allowed_payment_methods', $data ?? [], null);
        $this->setIfExists('can_not_expire', $data ?? [], null);
        $this->setIfExists('emails_sent', $data ?? [], null);
        $this->setIfExists('expires_at', $data ?? [], null);
        $this->setIfExists('failure_url', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('livemode', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('needs_shipping_contact', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], null);
        $this->setIfExists('paid_payments_count', $data ?? [], null);
        $this->setIfExists('payments_limit_count', $data ?? [], null);
        $this->setIfExists('recurrent', $data ?? [], null);
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('sms_sent', $data ?? [], null);
        $this->setIfExists('starts_at', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('success_url', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['livemode'] === null) {
            $invalidProperties[] = "'livemode' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
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
     * Gets allowed_payment_methods
     *
     * @return string[]|null
     */
    public function getAllowedPaymentMethods()
    {
        return $this->container['allowed_payment_methods'];
    }

    /**
     * Sets allowed_payment_methods
     *
     * @param string[]|null $allowed_payment_methods allowed_payment_methods
     *
     * @return self
     */
    public function setAllowedPaymentMethods($allowed_payment_methods)
    {
        if (is_null($allowed_payment_methods)) {
            throw new \InvalidArgumentException('non-nullable allowed_payment_methods cannot be null');
        }
        $this->container['allowed_payment_methods'] = $allowed_payment_methods;

        return $this;
    }

    /**
     * Gets can_not_expire
     *
     * @return bool|null
     */
    public function getCanNotExpire()
    {
        return $this->container['can_not_expire'];
    }

    /**
     * Sets can_not_expire
     *
     * @param bool|null $can_not_expire can_not_expire
     *
     * @return self
     */
    public function setCanNotExpire($can_not_expire)
    {
        if (is_null($can_not_expire)) {
            throw new \InvalidArgumentException('non-nullable can_not_expire cannot be null');
        }
        $this->container['can_not_expire'] = $can_not_expire;

        return $this;
    }

    /**
     * Gets emails_sent
     *
     * @return int|null
     */
    public function getEmailsSent()
    {
        return $this->container['emails_sent'];
    }

    /**
     * Sets emails_sent
     *
     * @param int|null $emails_sent emails_sent
     *
     * @return self
     */
    public function setEmailsSent($emails_sent)
    {
        if (is_null($emails_sent)) {
            throw new \InvalidArgumentException('non-nullable emails_sent cannot be null');
        }
        $this->container['emails_sent'] = $emails_sent;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return int|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param int|null $expires_at expires_at
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        if (is_null($expires_at)) {
            throw new \InvalidArgumentException('non-nullable expires_at cannot be null');
        }
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets failure_url
     *
     * @return string|null
     */
    public function getFailureUrl()
    {
        return $this->container['failure_url'];
    }

    /**
     * Sets failure_url
     *
     * @param string|null $failure_url failure_url
     *
     * @return self
     */
    public function setFailureUrl($failure_url)
    {
        if (is_null($failure_url)) {
            throw new \InvalidArgumentException('non-nullable failure_url cannot be null');
        }
        $this->container['failure_url'] = $failure_url;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets livemode
     *
     * @return bool
     */
    public function getLivemode()
    {
        return $this->container['livemode'];
    }

    /**
     * Sets livemode
     *
     * @param bool $livemode livemode
     *
     * @return self
     */
    public function setLivemode($livemode)
    {
        if (is_null($livemode)) {
            throw new \InvalidArgumentException('non-nullable livemode cannot be null');
        }
        $this->container['livemode'] = $livemode;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,mixed>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,mixed>|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

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
     * @param string $name Reason for charge
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets needs_shipping_contact
     *
     * @return bool|null
     */
    public function getNeedsShippingContact()
    {
        return $this->container['needs_shipping_contact'];
    }

    /**
     * Sets needs_shipping_contact
     *
     * @param bool|null $needs_shipping_contact needs_shipping_contact
     *
     * @return self
     */
    public function setNeedsShippingContact($needs_shipping_contact)
    {
        if (is_null($needs_shipping_contact)) {
            throw new \InvalidArgumentException('non-nullable needs_shipping_contact cannot be null');
        }
        $this->container['needs_shipping_contact'] = $needs_shipping_contact;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string $object object
     *
     * @return self
     */
    public function setObject($object)
    {
        if (is_null($object)) {
            throw new \InvalidArgumentException('non-nullable object cannot be null');
        }
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets paid_payments_count
     *
     * @return int|null
     */
    public function getPaidPaymentsCount()
    {
        return $this->container['paid_payments_count'];
    }

    /**
     * Sets paid_payments_count
     *
     * @param int|null $paid_payments_count paid_payments_count
     *
     * @return self
     */
    public function setPaidPaymentsCount($paid_payments_count)
    {
        if (is_null($paid_payments_count)) {
            throw new \InvalidArgumentException('non-nullable paid_payments_count cannot be null');
        }
        $this->container['paid_payments_count'] = $paid_payments_count;

        return $this;
    }

    /**
     * Gets payments_limit_count
     *
     * @return int|null
     */
    public function getPaymentsLimitCount()
    {
        return $this->container['payments_limit_count'];
    }

    /**
     * Sets payments_limit_count
     *
     * @param int|null $payments_limit_count payments_limit_count
     *
     * @return self
     */
    public function setPaymentsLimitCount($payments_limit_count)
    {
        if (is_null($payments_limit_count)) {
            array_push($this->openAPINullablesSetToNull, 'payments_limit_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payments_limit_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payments_limit_count'] = $payments_limit_count;

        return $this;
    }

    /**
     * Gets recurrent
     *
     * @return bool|null
     */
    public function getRecurrent()
    {
        return $this->container['recurrent'];
    }

    /**
     * Sets recurrent
     *
     * @param bool|null $recurrent recurrent
     *
     * @return self
     */
    public function setRecurrent($recurrent)
    {
        if (is_null($recurrent)) {
            throw new \InvalidArgumentException('non-nullable recurrent cannot be null');
        }
        $this->container['recurrent'] = $recurrent;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string|null $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        if (is_null($slug)) {
            throw new \InvalidArgumentException('non-nullable slug cannot be null');
        }
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets sms_sent
     *
     * @return int|null
     */
    public function getSmsSent()
    {
        return $this->container['sms_sent'];
    }

    /**
     * Sets sms_sent
     *
     * @param int|null $sms_sent sms_sent
     *
     * @return self
     */
    public function setSmsSent($sms_sent)
    {
        if (is_null($sms_sent)) {
            throw new \InvalidArgumentException('non-nullable sms_sent cannot be null');
        }
        $this->container['sms_sent'] = $sms_sent;

        return $this;
    }

    /**
     * Gets starts_at
     *
     * @return int|null
     */
    public function getStartsAt()
    {
        return $this->container['starts_at'];
    }

    /**
     * Sets starts_at
     *
     * @param int|null $starts_at starts_at
     *
     * @return self
     */
    public function setStartsAt($starts_at)
    {
        if (is_null($starts_at)) {
            throw new \InvalidArgumentException('non-nullable starts_at cannot be null');
        }
        $this->container['starts_at'] = $starts_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets success_url
     *
     * @return string|null
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string|null $success_url success_url
     *
     * @return self
     */
    public function setSuccessUrl($success_url)
    {
        if (is_null($success_url)) {
            throw new \InvalidArgumentException('non-nullable success_url cannot be null');
        }
        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

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


