<?php
namespace Australia\Blog\Model\Config\Source;
class Gender implements \Magento\Framework\Option\ArrayInterface{
    public function toOptionArray(){
        return [['value'=>'male','label'=>__('Male')],['value'=>'female','label'=>'Female']];
    }
}
?>
