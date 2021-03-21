<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChannelAcceptRequest</code>
 */
class ChannelAcceptRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The pubkey of the node that wishes to open an inbound channel.
     *
     * Generated from protobuf field <code>bytes node_pubkey = 1;</code>
     */
    private $node_pubkey = '';
    /**
     * The hash of the genesis block that the proposed channel resides in.
     *
     * Generated from protobuf field <code>bytes chain_hash = 2;</code>
     */
    private $chain_hash = '';
    /**
     * The pending channel id.
     *
     * Generated from protobuf field <code>bytes pending_chan_id = 3;</code>
     */
    private $pending_chan_id = '';
    /**
     * The funding amount in satoshis that initiator wishes to use in the
     * channel.
     *
     * Generated from protobuf field <code>uint64 funding_amt = 4;</code>
     */
    private $funding_amt = 0;
    /**
     * The push amount of the proposed channel in millisatoshis.
     *
     * Generated from protobuf field <code>uint64 push_amt = 5;</code>
     */
    private $push_amt = 0;
    /**
     * The dust limit of the initiator's commitment tx.
     *
     * Generated from protobuf field <code>uint64 dust_limit = 6;</code>
     */
    private $dust_limit = 0;
    /**
     * The maximum amount of coins in millisatoshis that can be pending in this
     * channel.
     *
     * Generated from protobuf field <code>uint64 max_value_in_flight = 7;</code>
     */
    private $max_value_in_flight = 0;
    /**
     * The minimum amount of satoshis the initiator requires us to have at all
     * times.
     *
     * Generated from protobuf field <code>uint64 channel_reserve = 8;</code>
     */
    private $channel_reserve = 0;
    /**
     * The smallest HTLC in millisatoshis that the initiator will accept.
     *
     * Generated from protobuf field <code>uint64 min_htlc = 9;</code>
     */
    private $min_htlc = 0;
    /**
     * The initial fee rate that the initiator suggests for both commitment
     * transactions.
     *
     * Generated from protobuf field <code>uint64 fee_per_kw = 10;</code>
     */
    private $fee_per_kw = 0;
    /**
     *The number of blocks to use for the relative time lock in the pay-to-self
     *output of both commitment transactions.
     *
     * Generated from protobuf field <code>uint32 csv_delay = 11;</code>
     */
    private $csv_delay = 0;
    /**
     * The total number of incoming HTLC's that the initiator will accept.
     *
     * Generated from protobuf field <code>uint32 max_accepted_htlcs = 12;</code>
     */
    private $max_accepted_htlcs = 0;
    /**
     * A bit-field which the initiator uses to specify proposed channel
     * behavior.
     *
     * Generated from protobuf field <code>uint32 channel_flags = 13;</code>
     */
    private $channel_flags = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $node_pubkey
     *           The pubkey of the node that wishes to open an inbound channel.
     *     @type string $chain_hash
     *           The hash of the genesis block that the proposed channel resides in.
     *     @type string $pending_chan_id
     *           The pending channel id.
     *     @type int|string $funding_amt
     *           The funding amount in satoshis that initiator wishes to use in the
     *           channel.
     *     @type int|string $push_amt
     *           The push amount of the proposed channel in millisatoshis.
     *     @type int|string $dust_limit
     *           The dust limit of the initiator's commitment tx.
     *     @type int|string $max_value_in_flight
     *           The maximum amount of coins in millisatoshis that can be pending in this
     *           channel.
     *     @type int|string $channel_reserve
     *           The minimum amount of satoshis the initiator requires us to have at all
     *           times.
     *     @type int|string $min_htlc
     *           The smallest HTLC in millisatoshis that the initiator will accept.
     *     @type int|string $fee_per_kw
     *           The initial fee rate that the initiator suggests for both commitment
     *           transactions.
     *     @type int $csv_delay
     *          The number of blocks to use for the relative time lock in the pay-to-self
     *          output of both commitment transactions.
     *     @type int $max_accepted_htlcs
     *           The total number of incoming HTLC's that the initiator will accept.
     *     @type int $channel_flags
     *           A bit-field which the initiator uses to specify proposed channel
     *           behavior.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * The pubkey of the node that wishes to open an inbound channel.
     *
     * Generated from protobuf field <code>bytes node_pubkey = 1;</code>
     * @return string
     */
    public function getNodePubkey()
    {
        return $this->node_pubkey;
    }

    /**
     * The pubkey of the node that wishes to open an inbound channel.
     *
     * Generated from protobuf field <code>bytes node_pubkey = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNodePubkey($var)
    {
        GPBUtil::checkString($var, False);
        $this->node_pubkey = $var;

        return $this;
    }

    /**
     * The hash of the genesis block that the proposed channel resides in.
     *
     * Generated from protobuf field <code>bytes chain_hash = 2;</code>
     * @return string
     */
    public function getChainHash()
    {
        return $this->chain_hash;
    }

    /**
     * The hash of the genesis block that the proposed channel resides in.
     *
     * Generated from protobuf field <code>bytes chain_hash = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setChainHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->chain_hash = $var;

        return $this;
    }

    /**
     * The pending channel id.
     *
     * Generated from protobuf field <code>bytes pending_chan_id = 3;</code>
     * @return string
     */
    public function getPendingChanId()
    {
        return $this->pending_chan_id;
    }

    /**
     * The pending channel id.
     *
     * Generated from protobuf field <code>bytes pending_chan_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPendingChanId($var)
    {
        GPBUtil::checkString($var, False);
        $this->pending_chan_id = $var;

        return $this;
    }

    /**
     * The funding amount in satoshis that initiator wishes to use in the
     * channel.
     *
     * Generated from protobuf field <code>uint64 funding_amt = 4;</code>
     * @return int|string
     */
    public function getFundingAmt()
    {
        return $this->funding_amt;
    }

    /**
     * The funding amount in satoshis that initiator wishes to use in the
     * channel.
     *
     * Generated from protobuf field <code>uint64 funding_amt = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFundingAmt($var)
    {
        GPBUtil::checkUint64($var);
        $this->funding_amt = $var;

        return $this;
    }

    /**
     * The push amount of the proposed channel in millisatoshis.
     *
     * Generated from protobuf field <code>uint64 push_amt = 5;</code>
     * @return int|string
     */
    public function getPushAmt()
    {
        return $this->push_amt;
    }

    /**
     * The push amount of the proposed channel in millisatoshis.
     *
     * Generated from protobuf field <code>uint64 push_amt = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPushAmt($var)
    {
        GPBUtil::checkUint64($var);
        $this->push_amt = $var;

        return $this;
    }

    /**
     * The dust limit of the initiator's commitment tx.
     *
     * Generated from protobuf field <code>uint64 dust_limit = 6;</code>
     * @return int|string
     */
    public function getDustLimit()
    {
        return $this->dust_limit;
    }

    /**
     * The dust limit of the initiator's commitment tx.
     *
     * Generated from protobuf field <code>uint64 dust_limit = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDustLimit($var)
    {
        GPBUtil::checkUint64($var);
        $this->dust_limit = $var;

        return $this;
    }

    /**
     * The maximum amount of coins in millisatoshis that can be pending in this
     * channel.
     *
     * Generated from protobuf field <code>uint64 max_value_in_flight = 7;</code>
     * @return int|string
     */
    public function getMaxValueInFlight()
    {
        return $this->max_value_in_flight;
    }

    /**
     * The maximum amount of coins in millisatoshis that can be pending in this
     * channel.
     *
     * Generated from protobuf field <code>uint64 max_value_in_flight = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxValueInFlight($var)
    {
        GPBUtil::checkUint64($var);
        $this->max_value_in_flight = $var;

        return $this;
    }

    /**
     * The minimum amount of satoshis the initiator requires us to have at all
     * times.
     *
     * Generated from protobuf field <code>uint64 channel_reserve = 8;</code>
     * @return int|string
     */
    public function getChannelReserve()
    {
        return $this->channel_reserve;
    }

    /**
     * The minimum amount of satoshis the initiator requires us to have at all
     * times.
     *
     * Generated from protobuf field <code>uint64 channel_reserve = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setChannelReserve($var)
    {
        GPBUtil::checkUint64($var);
        $this->channel_reserve = $var;

        return $this;
    }

    /**
     * The smallest HTLC in millisatoshis that the initiator will accept.
     *
     * Generated from protobuf field <code>uint64 min_htlc = 9;</code>
     * @return int|string
     */
    public function getMinHtlc()
    {
        return $this->min_htlc;
    }

    /**
     * The smallest HTLC in millisatoshis that the initiator will accept.
     *
     * Generated from protobuf field <code>uint64 min_htlc = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinHtlc($var)
    {
        GPBUtil::checkUint64($var);
        $this->min_htlc = $var;

        return $this;
    }

    /**
     * The initial fee rate that the initiator suggests for both commitment
     * transactions.
     *
     * Generated from protobuf field <code>uint64 fee_per_kw = 10;</code>
     * @return int|string
     */
    public function getFeePerKw()
    {
        return $this->fee_per_kw;
    }

    /**
     * The initial fee rate that the initiator suggests for both commitment
     * transactions.
     *
     * Generated from protobuf field <code>uint64 fee_per_kw = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeePerKw($var)
    {
        GPBUtil::checkUint64($var);
        $this->fee_per_kw = $var;

        return $this;
    }

    /**
     *The number of blocks to use for the relative time lock in the pay-to-self
     *output of both commitment transactions.
     *
     * Generated from protobuf field <code>uint32 csv_delay = 11;</code>
     * @return int
     */
    public function getCsvDelay()
    {
        return $this->csv_delay;
    }

    /**
     *The number of blocks to use for the relative time lock in the pay-to-self
     *output of both commitment transactions.
     *
     * Generated from protobuf field <code>uint32 csv_delay = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setCsvDelay($var)
    {
        GPBUtil::checkUint32($var);
        $this->csv_delay = $var;

        return $this;
    }

    /**
     * The total number of incoming HTLC's that the initiator will accept.
     *
     * Generated from protobuf field <code>uint32 max_accepted_htlcs = 12;</code>
     * @return int
     */
    public function getMaxAcceptedHtlcs()
    {
        return $this->max_accepted_htlcs;
    }

    /**
     * The total number of incoming HTLC's that the initiator will accept.
     *
     * Generated from protobuf field <code>uint32 max_accepted_htlcs = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxAcceptedHtlcs($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_accepted_htlcs = $var;

        return $this;
    }

    /**
     * A bit-field which the initiator uses to specify proposed channel
     * behavior.
     *
     * Generated from protobuf field <code>uint32 channel_flags = 13;</code>
     * @return int
     */
    public function getChannelFlags()
    {
        return $this->channel_flags;
    }

    /**
     * A bit-field which the initiator uses to specify proposed channel
     * behavior.
     *
     * Generated from protobuf field <code>uint32 channel_flags = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setChannelFlags($var)
    {
        GPBUtil::checkUint32($var);
        $this->channel_flags = $var;

        return $this;
    }

}

