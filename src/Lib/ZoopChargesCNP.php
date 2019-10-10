<?php

namespace ACSToigo\Lib;

class ZoopChargesCNP {

    /**
     * API Resource
     *
     * @var object
     */
    protected $APIResource;

    /**
     * ZoopChargesCNP constructor.
     * @param APIResource $APIResource
     */
    public function __construct(APIResource $APIResource) {
        $this->APIResource = $APIResource;
    }

    /**
     * @param array $post
     * @return mixed
     */
    public function create($post = []) {
        $api = 'transactions';
        return $this->APIResource->createAPI($api, $post);
    }

    /**
     * @param string $transactionID
     * @param array $post
     * @return mixed
     */
    public function cancel($transactionID, $post) {
        $api = 'transactions/' . $transactionID . '/void';
        return $this->APIResource->createAPI($api, $post);
    }

    /**
     * @param string $transactionID
     * @param array $post
     * @return mixed
     */
    public function capture($transactionID, $post) {
        $api = 'transactions/' . $transactionID . '/capture';
        return $this->APIResource->createAPI($api, $post);
    }

    /**
     * @param string $transactionID
     * @return mixed
     */
    public function get($transactionID) {
        $api = 'transactions/' . $transactionID;
        return $this->APIResource->searchAPI($api);
    }

    /**
     * @param $get array || null
     * @return mixed
     */
    public function getAll($get = null) {
        if (!is_null($get)) {
            $api = 'transactions?' . http_build_query($get);
        } else {
            $api = 'transactions';
        }
        return $this->APIResource->searchAPI($api);
    }

}
