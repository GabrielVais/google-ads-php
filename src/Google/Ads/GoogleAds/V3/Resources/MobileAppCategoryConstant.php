<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/mobile_app_category_constant.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mobile application category constant.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.MobileAppCategoryConstant</code>
 */
class MobileAppCategoryConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the mobile app category constant.
     * Mobile app category constant resource names have the form:
     * `mobileAppCategoryConstants/{mobile_app_category_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The ID of the mobile app category constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value id = 2;</code>
     */
    protected $id = null;
    /**
     * Mobile app category name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     */
    protected $name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the mobile app category constant.
     *           Mobile app category constant resource names have the form:
     *           `mobileAppCategoryConstants/{mobile_app_category_id}`
     *     @type \Google\Protobuf\Int32Value $id
     *           The ID of the mobile app category constant.
     *     @type \Google\Protobuf\StringValue $name
     *           Mobile app category name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\MobileAppCategoryConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the mobile app category constant.
     * Mobile app category constant resource names have the form:
     * `mobileAppCategoryConstants/{mobile_app_category_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the mobile app category constant.
     * Mobile app category constant resource names have the form:
     * `mobileAppCategoryConstants/{mobile_app_category_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The ID of the mobile app category constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value id = 2;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * The ID of the mobile app category constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value id = 2;</code>
     * @return int|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * The ID of the mobile app category constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value id = 2;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * The ID of the mobile app category constant.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value id = 2;</code>
     * @param int|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * Mobile app category name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * Mobile app category name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * Mobile app category name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Mobile app category name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

}

