<?php

namespace ACSToigo\Lib;

class ZoopTransactions {

    /**
     * API Resource
     *
     * @var object
     */
    protected $APIResource;

    /**
     * ZoopTransactions constructor.
     *
     * @param APIResource $APIResource
     */
    public function __construct(APIResource $APIResource) {
        $this->APIResource = ($APIResource);
    }

    /**
     * @param string $transactionsID
     * @return mixed
     */
    public function get($transactionsID) {
        $api = 'transactions/' . $transactionsID;
        return $this->APIResource->searchAPI($api);
    }
    
    /**
     * @param array $post
     * @return mixed
     */
    public function create($post) {
        $api = 'transactions/';
        return $this->APIResource->createAPI($api, $post);
    }

}
