<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wtclient.proto

namespace Wtclientrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wtclientrpc.ListTowersRequest</code>
 */
class ListTowersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether we should include sessions with the watchtower in the response.
     *
     * Generated from protobuf field <code>bool include_sessions = 1;</code>
     */
    private $include_sessions = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $include_sessions
     *           Whether we should include sessions with the watchtower in the response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Wtclient::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether we should include sessions with the watchtower in the response.
     *
     * Generated from protobuf field <code>bool include_sessions = 1;</code>
     * @return bool
     */
    public function getIncludeSessions()
    {
        return $this->include_sessions;
    }

    /**
     * Whether we should include sessions with the watchtower in the response.
     *
     * Generated from protobuf field <code>bool include_sessions = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeSessions($var)
    {
        GPBUtil::checkBool($var);
        $this->include_sessions = $var;

        return $this;
    }

}

