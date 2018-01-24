<?php
namespace ShiptorRussiaApiClient\Client\Api;

use ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Request as ShippingRequest;

class ShippingEndpoint{
    private $addCourierPackages;
    private $addDeliveryPointPackages;
    private $addPackage;
    private $addPickup;
    private $addProduct;
    private $addProvider;
    private $addService;
    private $addShipment;
    private $addWarehouse;
    private $calculateShipping;
    private $calculateShippingInternational;
    private $cancelPickup;
    private $deletePackage;
    private $deleteProduct;
    private $deleteProvider;
    private $deleteService;
    private $deleteShipment;
    private $deleteWarehouse;
    private $getPackage;
    private $getPackages;
    private $getPackagesCount;
    private $getPickup;
    private $getPickupTime;
    private $getServices;
    private $getSettlements;
    private $getShipment;
    private $getShipments;
    private $getShippingMethods;
    private $getCountries;
    private $getDeliveryPoints;
    private $getDeliveryTime;
    private $getWarehouse;
    private $getWarehouses;
    private $searchPackages;
    private $suggestSettlement;
    public function addPackage(){
        return $this->addPackage = new ShippingRequest\AddPackage();
    }
    public function addCourierPackages(){
        return $this->addCourierPackages = new ShippingRequest\AddCourierPackages();
    }
    public function addDeliveryPointPackages(){
        return $this->addDeliveryPointPackages = new ShippingRequest\AddDeliveryPointPackages();
    }
    public function addPickup(){
        return $this->addPickup = new ShippingRequest\AddPickup();
    }
    public function addProduct(){
        return $this->addProduct = new ShippingRequest\AddProduct();
    }
    public function addProvider(){
        return $this->addProvider = new ShippingRequest\AddProvider();
    }
    public function addService(){
        return $this->addService = new ShippingRequest\AddService();
    }
    public function addShipment(){
        return $this->addShipment = new ShippingRequest\AddShipment();
    }
    public function addWarehouse(){
        return $this->addWarehouse = new ShippingRequest\AddWarehouse();
    }
    public function calculateShipping() {
        return $this->calculateShipping = new ShippingRequest\CalculateShipping();
    }
    public function calculateShippingInternational(){
        return $this->calculateShippingInternational = new ShippingRequest\CalculateShippingInternational();
    }
    public function cancelPickup($id = null){
        $this->cancelPickup = new ShippingRequest\CancelPickup();
        if(!empty($id)){
            $this->cancelPickup->setId($id);
        }
        return $this->cancelPickup;
    }
    public function deletePackage($externalId = null){
        $this->deletePackage = new ShippingRequest\DeletePackage();
        if(!empty($externalId)){
            $this->deletePackage->setExternalId($externalId);
        }
        return $this->deletePackage;
    }
    public function deleteProduct($shopArticle = null){
        $this->deleteProduct = new ShippingRequest\DeleteProduct();
        if(!empty($shopArticle)){
            $this->deleteProduct->setShopArticle($shopArticle);
        }
        return $this->deleteProduct;
    }
    public function deleteProvider($id = null){
        $this->deleteProvider = new ShippingRequest\DeleteProvider();
        if(!empty($id)){
            $this->deleteProvider->setId($id);
        }
        return $this->deleteProvider;
    }
    public function deleteService($shopArticle = null){
        $this->deleteService = new ShippingRequest\DeleteProvider();
        if(!empty($shopArticle)){
            $this->deleteService->setShopArticle($shopArticle);
        }
        return $this->deleteService;
    }
    public function deleteShipment($id = null){
        $this->deleteShipment = new ShippingRequest\DeleteShipment();
        if(!empty($id)){
            $this->deleteShipment->setId($id);
        }
        return $this->deleteShipment;
    }
    public function deleteWarehouse($id = null){
        $this->deleteWarehouse = new ShippingRequest\DeleteWarehouse();
        if(!empty($id)){
            $this->deleteWarehouse->setId($id);
        }
        return $this->deleteWarehouse;
    }
    public function getCountries(){
        return $this->getCountries = new ShippingRequest\GetCountries();
    }
    public function getDeliveryPoints(){
        return $this->getDeliveryPoints = new ShippingRequest\GetDeliveryPoints();
    }
    public function getDeliveryTime(){
        return $this->getDeliveryTime = new ShippingRequest\GetDeliveryTime();
    }
    public function getPackage($externalId = null){
        $this->getPackage = new ShippingRequest\GetPackage();
        if(!empty($externalId)){
            $this->getPackage->setExternalId($externalId);
        }
        return $this->getPackage;
    }
    public function getPackages(){
        return $this->getPackages = new ShippingRequest\GetPackages();
    }
    public function getPackagesCount(){
        return $this->getPackagesCount = new ShippingRequest\GetPackagesCount();
    }
    public function getPickUp($id = null){
        $this->getPickup = new ShippingRequest\GetPickup();
        if(!empty($id)){
            $this->getPickup->setId($id);
        }
        return $this->getPickup;
    }
    public function getPickupTime(){
        return $this->getPickupTime = new ShippingRequest\GetPickupTime();
    }
    public function getSettlements(){
        return $this->getSettlements = new ShippingRequest\GetSettlements();
    }
    public function getServices(){
        return $this->getServices = new ShippingRequest\GetServices();
    }
    public function getShipments(){
        return $this->getShipments = new ShippingRequest\GetShipments();
    }
    public function getShipment($shipmentId = null){
        $this->getShipment = new ShippingRequest\GetShipment();
        if(!empty($shipmentId)){
            $this->getShipment->setId($shipmentId);
        }
        return $this->getShipment;
    }
    public function getShippingMethods(){
        return $this->getShippingMethods = new ShippingRequest\GetShippingMethods();
    }
    public function getWarehouse($warehouseId = null){
        $this->getWarehouse = new ShippingRequest\GetWarehouse();
        if(!empty($warehouseId)){
            $this->getWarehouse->setId($warehouseId);
        }
        return $this->getWarehouse;
    }
    public function getWarehouses(){
        return $this->getWarehouses = new ShippingRequest\GetWarehouses();
    }
    public function searchPackages(){
        return $this->searchPackages = new ShippingRequest\SearchPackages();
    }
    public function suggestSettlement(){
        return $this->suggestSettlement = new ShippingRequest\SuggestSettlement();
    }
}