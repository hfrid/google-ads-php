<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/media_file.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encapsulates a Video.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.MediaVideo</code>
 */
class MediaVideo extends \Google\Protobuf\Internal\Message
{
    /**
     * The duration of the Video in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_duration_millis = 1;</code>
     */
    private $ad_duration_millis = null;
    /**
     * The YouTube video ID (as seen in YouTube URLs).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue youtube_video_id = 2;</code>
     */
    private $youtube_video_id = null;
    /**
     * The Advertising Digital Identification code for this video, as defined by
     * the American Association of Advertising Agencies, used mainly for
     * television commercials.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue advertising_id_code = 3;</code>
     */
    private $advertising_id_code = null;
    /**
     * The Industry Standard Commercial Identifier code for this video, used
     * mainly for television commercials.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue isci_code = 4;</code>
     */
    private $isci_code = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $ad_duration_millis
     *           The duration of the Video in milliseconds.
     *     @type \Google\Protobuf\StringValue $youtube_video_id
     *           The YouTube video ID (as seen in YouTube URLs).
     *     @type \Google\Protobuf\StringValue $advertising_id_code
     *           The Advertising Digital Identification code for this video, as defined by
     *           the American Association of Advertising Agencies, used mainly for
     *           television commercials.
     *     @type \Google\Protobuf\StringValue $isci_code
     *           The Industry Standard Commercial Identifier code for this video, used
     *           mainly for television commercials.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\MediaFile::initOnce();
        parent::__construct($data);
    }

    /**
     * The duration of the Video in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_duration_millis = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getAdDurationMillis()
    {
        return $this->ad_duration_millis;
    }

    /**
     * The duration of the Video in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_duration_millis = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setAdDurationMillis($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->ad_duration_millis = $var;

        return $this;
    }

    /**
     * The YouTube video ID (as seen in YouTube URLs).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue youtube_video_id = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getYoutubeVideoId()
    {
        return $this->youtube_video_id;
    }

    /**
     * The YouTube video ID (as seen in YouTube URLs).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue youtube_video_id = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setYoutubeVideoId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->youtube_video_id = $var;

        return $this;
    }

    /**
     * The Advertising Digital Identification code for this video, as defined by
     * the American Association of Advertising Agencies, used mainly for
     * television commercials.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue advertising_id_code = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdvertisingIdCode()
    {
        return $this->advertising_id_code;
    }

    /**
     * The Advertising Digital Identification code for this video, as defined by
     * the American Association of Advertising Agencies, used mainly for
     * television commercials.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue advertising_id_code = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdvertisingIdCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->advertising_id_code = $var;

        return $this;
    }

    /**
     * The Industry Standard Commercial Identifier code for this video, used
     * mainly for television commercials.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue isci_code = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getIsciCode()
    {
        return $this->isci_code;
    }

    /**
     * The Industry Standard Commercial Identifier code for this video, used
     * mainly for television commercials.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue isci_code = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setIsciCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->isci_code = $var;

        return $this;
    }

}
