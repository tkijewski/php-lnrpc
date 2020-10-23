<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>routerrpc.BuildRouteResponse</code>
 */
class BuildRouteResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Fully specified route that can be used to execute the payment.
     *
     * Generated from protobuf field <code>.lnrpc.Route route = 1;</code>
     */
    protected $route = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\Route $route
     *          Fully specified route that can be used to execute the payment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     *Fully specified route that can be used to execute the payment.
     *
     * Generated from protobuf field <code>.lnrpc.Route route = 1;</code>
     * @return \Lnrpc\Route
     */
    public function getRoute()
    {
        return isset($this->route) ? $this->route : null;
    }

    public function hasRoute()
    {
        return isset($this->route);
    }

    public function clearRoute()
    {
        unset($this->route);
    }

    /**
     *Fully specified route that can be used to execute the payment.
     *
     * Generated from protobuf field <code>.lnrpc.Route route = 1;</code>
     * @param \Lnrpc\Route $var
     * @return $this
     */
    public function setRoute($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\Route::class);
        $this->route = $var;

        return $this;
    }

}

