<?php declare(strict_types=1);
/**
 * Appointment.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\Services;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Appointment implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const APPOINTMENT_STATUS_ACTIVE = 'ACTIVE';

    public const APPOINTMENT_STATUS_CANCELLED = 'CANCELLED';

    public const APPOINTMENT_STATUS_COMPLETED = 'COMPLETED';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Appointment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'appointment_id' => 'string',
        'appointment_status' => 'string',
        'appointment_time' => '\AmazonPHP\SellingPartner\Model\Services\AppointmentTime',
        'assigned_technicians' => '\AmazonPHP\SellingPartner\Model\Services\Technician[]',
        'rescheduled_appointment_id' => 'string',
        'poa' => '\AmazonPHP\SellingPartner\Model\Services\Poa',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'appointment_id' => null,
        'appointment_status' => null,
        'appointment_time' => null,
        'assigned_technicians' => null,
        'rescheduled_appointment_id' => null,
        'poa' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'appointment_id' => 'appointmentId',
        'appointment_status' => 'appointmentStatus',
        'appointment_time' => 'appointmentTime',
        'assigned_technicians' => 'assignedTechnicians',
        'rescheduled_appointment_id' => 'rescheduledAppointmentId',
        'poa' => 'poa',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'appointment_id' => 'setAppointmentId',
        'appointment_status' => 'setAppointmentStatus',
        'appointment_time' => 'setAppointmentTime',
        'assigned_technicians' => 'setAssignedTechnicians',
        'rescheduled_appointment_id' => 'setRescheduledAppointmentId',
        'poa' => 'setPoa',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'appointment_id' => 'getAppointmentId',
        'appointment_status' => 'getAppointmentStatus',
        'appointment_time' => 'getAppointmentTime',
        'assigned_technicians' => 'getAssignedTechnicians',
        'rescheduled_appointment_id' => 'getRescheduledAppointmentId',
        'poa' => 'getPoa',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['appointment_id'] = $data['appointment_id'] ?? null;
        $this->container['appointment_status'] = $data['appointment_status'] ?? null;
        $this->container['appointment_time'] = $data['appointment_time'] ?? null;
        $this->container['assigned_technicians'] = $data['assigned_technicians'] ?? null;
        $this->container['rescheduled_appointment_id'] = $data['rescheduled_appointment_id'] ?? null;
        $this->container['poa'] = $data['poa'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getAppointmentStatusAllowableValues() : array
    {
        return [
            self::APPOINTMENT_STATUS_ACTIVE,
            self::APPOINTMENT_STATUS_CANCELLED,
            self::APPOINTMENT_STATUS_COMPLETED,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if (null !== $this->container['appointment_id'] && (\mb_strlen($this->container['appointment_id']) > 100)) {
            throw new AssertionException("invalid value for 'appointment_id', the character length must be smaller than or equal to 100.");
        }

        if (null !== $this->container['appointment_id'] && (\mb_strlen($this->container['appointment_id']) < 5)) {
            throw new AssertionException("invalid value for 'appointment_id', the character length must be bigger than or equal to 5.");
        }

        $allowedValues = $this->getAppointmentStatusAllowableValues();

        if (null !== $this->container['appointment_status'] && !\in_array($this->container['appointment_status'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'appointment_status', must be one of '%s'",
                    $this->container['appointment_status'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['appointment_time'] !== null) {
            $this->container['appointment_time']->validate();
        }

        if (null !== $this->container['assigned_technicians'] && (\count($this->container['assigned_technicians']) < 1)) {
            throw new AssertionException("invalid value for 'assigned_technicians', number of items must be greater than or equal to 1.");
        }

        if (null !== $this->container['rescheduled_appointment_id'] && (\mb_strlen($this->container['rescheduled_appointment_id']) > 100)) {
            throw new AssertionException("invalid value for 'rescheduled_appointment_id', the character length must be smaller than or equal to 100.");
        }

        if (null !== $this->container['rescheduled_appointment_id'] && (\mb_strlen($this->container['rescheduled_appointment_id']) < 5)) {
            throw new AssertionException("invalid value for 'rescheduled_appointment_id', the character length must be bigger than or equal to 5.");
        }

        if ($this->container['poa'] !== null) {
            $this->container['poa']->validate();
        }
    }

    /**
     * Gets appointment_id.
     */
    public function getAppointmentId() : ?string
    {
        return $this->container['appointment_id'];
    }

    /**
     * Sets appointment_id.
     *
     * @param null|string $appointment_id the appointment identifier
     */
    public function setAppointmentId(?string $appointment_id) : self
    {
        $this->container['appointment_id'] = $appointment_id;

        return $this;
    }

    /**
     * Gets appointment_status.
     */
    public function getAppointmentStatus() : ?string
    {
        return $this->container['appointment_status'];
    }

    /**
     * Sets appointment_status.
     *
     * @param null|string $appointment_status the status of the appointment
     */
    public function setAppointmentStatus(?string $appointment_status) : self
    {
        $this->container['appointment_status'] = $appointment_status;

        return $this;
    }

    /**
     * Gets appointment_time.
     */
    public function getAppointmentTime() : ?AppointmentTime
    {
        return $this->container['appointment_time'];
    }

    /**
     * Sets appointment_time.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\AppointmentTime $appointment_time appointment_time
     */
    public function setAppointmentTime(?AppointmentTime $appointment_time) : self
    {
        $this->container['appointment_time'] = $appointment_time;

        return $this;
    }

    /**
     * Gets assigned_technicians.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Services\Technician[]
     */
    public function getAssignedTechnicians() : ?array
    {
        return $this->container['assigned_technicians'];
    }

    /**
     * Sets assigned_technicians.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\Technician[] $assigned_technicians a list of technicians assigned to the service job
     */
    public function setAssignedTechnicians(?array $assigned_technicians) : self
    {
        $this->container['assigned_technicians'] = $assigned_technicians;

        return $this;
    }

    /**
     * Gets rescheduled_appointment_id.
     */
    public function getRescheduledAppointmentId() : ?string
    {
        return $this->container['rescheduled_appointment_id'];
    }

    /**
     * Sets rescheduled_appointment_id.
     *
     * @param null|string $rescheduled_appointment_id the appointment identifier
     */
    public function setRescheduledAppointmentId(?string $rescheduled_appointment_id) : self
    {
        $this->container['rescheduled_appointment_id'] = $rescheduled_appointment_id;

        return $this;
    }

    /**
     * Gets poa.
     */
    public function getPoa() : ?Poa
    {
        return $this->container['poa'];
    }

    /**
     * Sets poa.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\Poa $poa poa
     */
    public function setPoa(?Poa $poa) : self
    {
        $this->container['poa'] = $poa;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
