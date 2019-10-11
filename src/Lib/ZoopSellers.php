<?php

namespace ACSToigo\Lib;

class ZoopSellers {

    /**
     * API Resource
     *
     * @var object
     */
    protected $APIResource;

    /**
     * ZoopSellers constructor.
     * @param APIResource $APIResource
     */
    public function __construct(APIResource $APIResource) {
        $this->APIResource = $APIResource;
    }

    /**
     * @param array $post
     * @return mixed
     */
    public function createIndividuals($post = []) {
        $api = 'sellers/individuals';
        return $this->APIResource->createAPI($api, $post);
    }

    /**
     * @param integer $id
     * @param array $post
     * @return mixed
     */
    public function updateIndividuals($id, $post = []) {
        $api = 'sellers/individuals/' . $id;
        return $this->APIResource->updateAPI($api, $post);
    }
    
    /**
     * @param array $post
     * @return mixed
     */
    public function createBusiness($post = []) {
        $api = 'sellers/businesses';
        return $this->APIResource->createAPI($api, $post);
    }

    /**
     * @param integer $id
     * @param array $post
     * @return mixed
     */
    public function updateBusiness($id, $post = []) {
        $api = 'sellers/businesses/' . $id;
        return $this->APIResource->updateAPI($api, $post);
    }
    
    /**
     * @param string $sellerID
     * @return mixed
     */
    public function delete($sellerID) {
        $api = 'sellers/' . $sellerID;
        return $this->APIResource->deleteAPI($api);
    }

    /**
     * @param string $sellerID
     * @return mixed
     */
    public function get($sellerID) {
        $api = 'sellers/' . $sellerID;
        return $this->APIResource->searchAPI($api);
    }

    /**
     * @return mixed
     */
    public function getAll() {
        $api = 'sellers';
        return $this->APIResource->searchAPI($api);
    }

    /**
     * @return mixed
     */
    public function getSearch($post = []) {
        $api = 'sellers/search';
        return $this->APIResource->searchAPI($api, $post);
    }

    /**
     * @param $sellerID string
     * @param $files array
     *
     * @return mixed
     */
    public function sendDocs($sellerID, $files) {
        $api = 'sellers/' . $sellerID . '/documents';
        return $this->APIResource->fileAPI($api, $files);
    }

    /**
     * @param $sellerID string
     * @param $files array
     *
     * @return mixed
     */
    public function getDocs($sellerID) {
        $api = 'sellers/' . $sellerID . '/documents';
        return $this->APIResource->searchAPI($api);
    }
    
    /**
     * @param $id integer
     * @param $files array
     *
     * @return mixed
     */
    public function updateDocs($id, $files) {
        $api = 'sellers/documents/' . $id;
        return $this->APIResource->fileUpdateAPI($api, $files);
    }

    /**
     * @return mixed
     */
    public function getCategoryCodes() {
        $api = 'merchant_category_codes';
        return $this->APIResource->searchAPI($api);
    }
    
}
