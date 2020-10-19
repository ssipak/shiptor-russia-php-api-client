<?php
namespace ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Request;

use ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Request\GenericRequest as GenericShippingRequest,
    ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Model\Service as AddServiceResult;

class AddService extends GenericShippingRequest{
    protected $name = "addService";
    protected function initFields() {
        $this->getFieldsCollection()
                ->String("name")->setRequired()->add()
                ->String("shopArticle")->setRequired()->add()
                ->Number("price")->setRequired()->add();
    }
    public function setName($name){
        return $this->setField('name', $name);
    }
    public function setShopArticle($article){
        return $this->setField('shopArticle', $article);
    }
    public function setPrice($price){
        return $this->setField('price', $price);
    }
    public function getResponseClassName() {
        return AddServiceResult::class;
    }
}