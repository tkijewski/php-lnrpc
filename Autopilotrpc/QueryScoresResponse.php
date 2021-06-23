<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: autopilot.proto

namespace Autopilotrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>autopilotrpc.QueryScoresResponse</code>
 */
class QueryScoresResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .autopilotrpc.QueryScoresResponse.HeuristicResult results = 1;</code>
     */
    private $results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Autopilotrpc\QueryScoresResponse\HeuristicResult[]|\Google\Protobuf\Internal\RepeatedField $results
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Autopilot::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .autopilotrpc.QueryScoresResponse.HeuristicResult results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Generated from protobuf field <code>repeated .autopilotrpc.QueryScoresResponse.HeuristicResult results = 1;</code>
     * @param \Autopilotrpc\QueryScoresResponse\HeuristicResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Autopilotrpc\QueryScoresResponse\HeuristicResult::class);
        $this->results = $arr;

        return $this;
    }

}
