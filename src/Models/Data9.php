<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Data9 implements JsonSerializable
{
    /**
     * The ID of the user that was added as Follower
     * @maps user_id
     * @var integer|null $userId public property
     */
    public $userId;

    /**
     * The ID of the Follower
     * @var integer|null $id public property
     */
    public $id;

    /**
     * The ID of the Product
     * @maps product_id
     * @var integer|null $productId public property
     */
    public $productId;

    /**
     * The Follower creation time. Format: YYYY-MM-DD HH:MM:SS
     * @maps add_time
     * @var string|null $addTime public property
     */
    public $addTime;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $userId    Initialization value for $this->userId
     * @param integer $id        Initialization value for $this->id
     * @param integer $productId Initialization value for $this->productId
     * @param string  $addTime   Initialization value for $this->addTime
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->userId    = func_get_arg(0);
            $this->id        = func_get_arg(1);
            $this->productId = func_get_arg(2);
            $this->addTime   = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['user_id']    = $this->userId;
        $json['id']         = $this->id;
        $json['product_id'] = $this->productId;
        $json['add_time']   = $this->addTime;

        return $json;
    }
}