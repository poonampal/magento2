<?php
namespace Poonam\Weeko\Block;
use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Magento\Framework\View\Asset\Repository;

class Head extends Template{
    public $_assetRepository;
    public function __construct(Context $context, array $data = [], Repository $assetRepository){
        $this->_assetRepository = $assetRepository;
        return parent::__construct($context, $data);
    }
    
}
?>
