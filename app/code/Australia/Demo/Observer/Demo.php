<?php
namespace Australia\Demo\Observer;

class Demo implements \Magento\Framework\Event\ObserverInterface{
    public function execute(\Magento\Framework\Event\Observer $observer){
        $text = $observer->getData('demo_text');
        //echo $text->getText();
        $text->setText('pal');
        return $this;
    }
}
