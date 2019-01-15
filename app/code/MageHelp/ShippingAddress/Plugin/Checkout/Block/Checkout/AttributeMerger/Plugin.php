<?php
namespace MageHelp\ShippingAddress\Plugin\Checkout\Block\Checkout\AttributeMerger;

class Plugin
{
  public function afterMerge(\Magento\Checkout\Block\Checkout\AttributeMerger $subject, $result)
  {
    if (array_key_exists('street', $result)) {
      $result['street']['children'][0]['label'] = __('Rua, Avenida, Logradouro');
      $result['street']['children'][1]['label'] = __('Número *');
      $result['street']['children'][2]['label'] = __('Bairro *');
      $result['street']['children'][3]['label'] = __('Complemento');
    }

    return $result;
  }
}
