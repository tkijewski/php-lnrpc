<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.FundPsbtResponse</code>
 */
class FundPsbtResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *The funded but not yet signed PSBT packet.
     *
     * Generated from protobuf field <code>bytes funded_psbt = 1;</code>
     */
    private $funded_psbt = '';
    /**
     *The index of the added change output or -1 if no change was left over.
     *
     * Generated from protobuf field <code>int32 change_output_index = 2;</code>
     */
    private $change_output_index = 0;
    /**
     *The list of lock leases that were acquired for the inputs in the funded PSBT
     *packet.
     *
     * Generated from protobuf field <code>repeated .walletrpc.UtxoLease locked_utxos = 3;</code>
     */
    private $locked_utxos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $funded_psbt
     *          The funded but not yet signed PSBT packet.
     *     @type int $change_output_index
     *          The index of the added change output or -1 if no change was left over.
     *     @type \Walletrpc\UtxoLease[]|\Google\Protobuf\Internal\RepeatedField $locked_utxos
     *          The list of lock leases that were acquired for the inputs in the funded PSBT
     *          packet.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     *The funded but not yet signed PSBT packet.
     *
     * Generated from protobuf field <code>bytes funded_psbt = 1;</code>
     * @return string
     */
    public function getFundedPsbt()
    {
        return $this->funded_psbt;
    }

    /**
     *The funded but not yet signed PSBT packet.
     *
     * Generated from protobuf field <code>bytes funded_psbt = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFundedPsbt($var)
    {
        GPBUtil::checkString($var, False);
        $this->funded_psbt = $var;

        return $this;
    }

    /**
     *The index of the added change output or -1 if no change was left over.
     *
     * Generated from protobuf field <code>int32 change_output_index = 2;</code>
     * @return int
     */
    public function getChangeOutputIndex()
    {
        return $this->change_output_index;
    }

    /**
     *The index of the added change output or -1 if no change was left over.
     *
     * Generated from protobuf field <code>int32 change_output_index = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setChangeOutputIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->change_output_index = $var;

        return $this;
    }

    /**
     *The list of lock leases that were acquired for the inputs in the funded PSBT
     *packet.
     *
     * Generated from protobuf field <code>repeated .walletrpc.UtxoLease locked_utxos = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLockedUtxos()
    {
        return $this->locked_utxos;
    }

    /**
     *The list of lock leases that were acquired for the inputs in the funded PSBT
     *packet.
     *
     * Generated from protobuf field <code>repeated .walletrpc.UtxoLease locked_utxos = 3;</code>
     * @param \Walletrpc\UtxoLease[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLockedUtxos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Walletrpc\UtxoLease::class);
        $this->locked_utxos = $arr;

        return $this;
    }

}
