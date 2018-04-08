<?php
namespace Australia\Demo\Model\Payment;

class First extends \Magento\Payment\Model\Method\Cc{
    protected $_isGateway =true;
    protected $_canCapture = true;
    protected $_canCapturePartial = true;
    protected $_canRefund = true;
    protected $_canRefundInvoicePartial = true;
    protected $_stripeApi = false;
    protected $_countryFactory;
    protected $_minAmount = null;
    protected $_maxAmount = null;
    protected $_supportedCurrencyCodes = array('USD');
    protected $_debugReplacePrivateDataKeys = ['number','exp_month','exp_year','cvc'];
    public function __construct(\Magento\Framework\Model\Context $context,
    \Magento\Framework\Registry $registry,
    \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory,
    \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory,
    \Magento\Payment\Helper\Data $paymentData,
    \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfigInterface,
    \Magento\Payment\Model\Method\Logger $logger,
    \Magento\Framework\Module\ModuleListInterface $moduleList,
    \Magento\Framework\Stdlib\Datetime\TimezoneInterface $localeDate,
    \Magento\Directory\Model\CountryFactory $countryFactory,
    array $data = array()){
        parent::__construct($context,$registry,$extensionFactory,$customAttributeFactory,$paymentData,
        $scopeConfigInterface,$logger,$moduleList,$localeDate,null,null,$data);
        $this->_countryFactory = $countryFactory;
        $this->_minAmount = $this->getConfigData('min_order_total');
        $this->_maxAmount = $this->getConfigData('max_order_total');
    }
    public function authorize(\Magento\Payment\Model\InfoInterface $payment, $amount){
        if(!$this->canAuthorize()){
            throw new \Magento\Framework\Exception\LocalizedException(__('authorize action not available.'));
        }
        return $this;
    }
    public function capture(\Magento\Payment\Model\InfoInterface $payment, $amount){
        if(!$this->canCapture()){
            throw new \Magento\Framework\Exception\LocalizedException(__('capture action not available.'));
        }
        return $this;
    }
    public function refund(\Magento\Payment\Model\InfoInterface $payment, $amount){
        if(!$this->canRefund()){
            throw new \Magento\Framework\Exception\LocalizedException(__('Refund not available'));
        }
        return $this;
    }
}
?>
