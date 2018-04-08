<?php
namespace Australia\Demo\Model\Carrier;

use \Magento\Quote\Model\Quote\Address\RateRequest;
use \Magento\Shipping\Model\Rate\Result;
class First extends \Magento\Shipping\Model\Carrier\AbstractCarrier implements \Magento\Shipping\Model\Carrier\CarrierInterface{
    const CODE = 'firstshipping';
    protected $_code = self::CODE;
    protected $_rateResultFactory;
    protected $_rateMethodFactory;
    public function __construct(
    \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
    \Magento\Quote\Model\Quote\Address\RateResult\ErrorFactory $rateErrorFactory,
    \Psr\Log\LoggerInterface $logger,
    \Magento\Shipping\Model\Rate\ResultFactory $rateResultFactory,
    \Magento\Quote\Model\Quote\Address\RateResult\MethodFactory $rateMethodFactory,
    array $data[]){
        $this->_rateResultFactory = $rateResultFactory;
        $this->_rateMethodFactory = $rateMethodFactory;
        parent::__construct($scopeConfig,$rateErrorFactory,$logger,$data);
    }
    public function getAllowedMethods(){
        return [$this->_code =>$this->getConfigData('name')];
    }
    public function collectRates(RateRequest $request){
        if(!$this->getConfigFlag('enable')){
            return false;
        }
        
        $result = $this->_rateResultFactory->create();
        $method = $this->_rateMethodFactory->create();

        $method->setCarrier($this->_code);
        $method->setCarrierTitle($this->getConfigData('title'));

        $method->setMethod($this->_code);
        $method->setMethodTitle($this->getConfigData('name'));

        $method->setPrice($this->getConfigData('price'));
        $method->setCost($this->getConfigData('price'));
        
        $result->append($method);
        return $result;
    }
}
?>
