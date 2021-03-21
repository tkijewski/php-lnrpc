<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.NodeInfoRequest</code>
 */
class NodeInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The 33-byte hex-encoded compressed public of the target node
     *
     * Generated from protobuf field <code>string pub_key = 1;</code>
     */
    private $pub_key = '';
    /**
     * If true, will include all known channels associated with the node.
     *
     * Generated from protobuf field <code>bool include_channels = 2;</code>
     */
    private $include_channels = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pub_key
     *           The 33-byte hex-encoded compressed public of the target node
     *     @type bool $include_channels
     *           If true, will include all known channels associated with the node.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * The 33-byte hex-encoded compressed public of the target node
     *
     * Generated from protobuf field <code>string pub_key = 1;</code>
     * @return string
     */
    public function getPubKey()
    {
        return $this->pub_key;
    }

    /**
     * The 33-byte hex-encoded compressed public of the target node
     *
     * Generated from protobuf field <code>string pub_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPubKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->pub_key = $var;

        return $this;
    }

    /**
     * If true, will include all known channels associated with the node.
     *
     * Generated from protobuf field <code>bool include_channels = 2;</code>
     * @return bool
     */
    public function getIncludeChannels()
    {
        return $this->include_channels;
    }

    /**
     * If true, will include all known channels associated with the node.
     *
     * Generated from protobuf field <code>bool include_channels = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeChannels($var)
    {
        GPBUtil::checkBool($var);
        $this->include_channels = $var;

        return $this;
    }

}

