<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.ListSweepsResponse</code>
 */
class ListSweepsResponse extends \Google\Protobuf\Internal\Message
{
    protected $sweeps;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\TransactionDetails $transaction_details
     *     @type \Walletrpc\ListSweepsResponse\TransactionIDs $transaction_ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.TransactionDetails transaction_details = 1;</code>
     * @return \Lnrpc\TransactionDetails
     */
    public function getTransactionDetails()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.TransactionDetails transaction_details = 1;</code>
     * @param \Lnrpc\TransactionDetails $var
     * @return $this
     */
    public function setTransactionDetails($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\TransactionDetails::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.walletrpc.ListSweepsResponse.TransactionIDs transaction_ids = 2;</code>
     * @return \Walletrpc\ListSweepsResponse\TransactionIDs
     */
    public function getTransactionIds()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.walletrpc.ListSweepsResponse.TransactionIDs transaction_ids = 2;</code>
     * @param \Walletrpc\ListSweepsResponse\TransactionIDs $var
     * @return $this
     */
    public function setTransactionIds($var)
    {
        GPBUtil::checkMessage($var, \Walletrpc\ListSweepsResponse_TransactionIDs::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSweeps()
    {
        return $this->whichOneof("sweeps");
    }

}

