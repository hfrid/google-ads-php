<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeywordIdeaService.GenerateKeywordIdeas][].
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.GenerateKeywordIdeasRequest</code>
 */
class GenerateKeywordIdeasRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the customer with the recommendation.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     */
    protected $customer_id = '';
    /**
     * The resource name of the language to target.
     * Required
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language = 7;</code>
     */
    protected $language = null;
    /**
     * The resource names of the location to target.
     * Max 10
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue geo_target_constants = 8;</code>
     */
    private $geo_target_constants;
    /**
     * Targeting network.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.KeywordPlanNetworkEnum.KeywordPlanNetwork keyword_plan_network = 9;</code>
     */
    protected $keyword_plan_network = 0;
    protected $seed;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           The ID of the customer with the recommendation.
     *     @type \Google\Protobuf\StringValue $language
     *           The resource name of the language to target.
     *           Required
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $geo_target_constants
     *           The resource names of the location to target.
     *           Max 10
     *     @type int $keyword_plan_network
     *           Targeting network.
     *     @type \Google\Ads\GoogleAds\V1\Services\KeywordAndUrlSeed $keyword_and_url_seed
     *           A Keyword and a specific Url to generate ideas from
     *           e.g. cars, www.example.com/cars.
     *     @type \Google\Ads\GoogleAds\V1\Services\KeywordSeed $keyword_seed
     *           A Keyword or phrase to generate ideas from, e.g. cars.
     *     @type \Google\Ads\GoogleAds\V1\Services\UrlSeed $url_seed
     *           A specific url to generate ideas from, e.g. www.example.com/cars.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the customer with the recommendation.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * The ID of the customer with the recommendation.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * The resource name of the language to target.
     * Required
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Returns the unboxed value from <code>getLanguage()</code>

     * The resource name of the language to target.
     * Required
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language = 7;</code>
     * @return string|null
     */
    public function getLanguageUnwrapped()
    {
        return $this->readWrapperValue("language");
    }

    /**
     * The resource name of the language to target.
     * Required
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->language = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The resource name of the language to target.
     * Required
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language = 7;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLanguageUnwrapped($var)
    {
        $this->writeWrapperValue("language", $var);
        return $this;}

    /**
     * The resource names of the location to target.
     * Max 10
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue geo_target_constants = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGeoTargetConstants()
    {
        return $this->geo_target_constants;
    }

    /**
     * The resource names of the location to target.
     * Max 10
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue geo_target_constants = 8;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGeoTargetConstants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->geo_target_constants = $arr;

        return $this;
    }

    /**
     * Targeting network.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.KeywordPlanNetworkEnum.KeywordPlanNetwork keyword_plan_network = 9;</code>
     * @return int
     */
    public function getKeywordPlanNetwork()
    {
        return $this->keyword_plan_network;
    }

    /**
     * Targeting network.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.KeywordPlanNetworkEnum.KeywordPlanNetwork keyword_plan_network = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setKeywordPlanNetwork($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\KeywordPlanNetworkEnum_KeywordPlanNetwork::class);
        $this->keyword_plan_network = $var;

        return $this;
    }

    /**
     * A Keyword and a specific Url to generate ideas from
     * e.g. cars, www.example.com/cars.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.services.KeywordAndUrlSeed keyword_and_url_seed = 2;</code>
     * @return \Google\Ads\GoogleAds\V1\Services\KeywordAndUrlSeed
     */
    public function getKeywordAndUrlSeed()
    {
        return $this->readOneof(2);
    }

    /**
     * A Keyword and a specific Url to generate ideas from
     * e.g. cars, www.example.com/cars.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.services.KeywordAndUrlSeed keyword_and_url_seed = 2;</code>
     * @param \Google\Ads\GoogleAds\V1\Services\KeywordAndUrlSeed $var
     * @return $this
     */
    public function setKeywordAndUrlSeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Services\KeywordAndUrlSeed::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A Keyword or phrase to generate ideas from, e.g. cars.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.services.KeywordSeed keyword_seed = 3;</code>
     * @return \Google\Ads\GoogleAds\V1\Services\KeywordSeed
     */
    public function getKeywordSeed()
    {
        return $this->readOneof(3);
    }

    /**
     * A Keyword or phrase to generate ideas from, e.g. cars.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.services.KeywordSeed keyword_seed = 3;</code>
     * @param \Google\Ads\GoogleAds\V1\Services\KeywordSeed $var
     * @return $this
     */
    public function setKeywordSeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Services\KeywordSeed::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A specific url to generate ideas from, e.g. www.example.com/cars.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.services.UrlSeed url_seed = 5;</code>
     * @return \Google\Ads\GoogleAds\V1\Services\UrlSeed
     */
    public function getUrlSeed()
    {
        return $this->readOneof(5);
    }

    /**
     * A specific url to generate ideas from, e.g. www.example.com/cars.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.services.UrlSeed url_seed = 5;</code>
     * @param \Google\Ads\GoogleAds\V1\Services\UrlSeed $var
     * @return $this
     */
    public function setUrlSeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Services\UrlSeed::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSeed()
    {
        return $this->whichOneof("seed");
    }

}

