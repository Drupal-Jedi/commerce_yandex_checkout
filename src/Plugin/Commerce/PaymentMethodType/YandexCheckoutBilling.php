<?php

namespace Drupal\yandex_checkout\Plugin\Commerce\PaymentMethodType;

use Drupal\commerce_payment\Entity\PaymentMethodInterface;

/**
 * Provides the yandex_checkout_billing payment method type.
 *
 * @CommercePaymentMethodType(
 *   id = "yandex_checkout_billing",
 *   label = @Translation("YC account"),
 *   create_label = @Translation("YC account"),
 * )
 */
class YandexCheckoutBilling extends YandexCheckoutPaymentMethod {

  /**
   * {@inheritdoc}
   */
  public function getLabel() {
    return $this->t('Yandex.Billing (bank card, e-wallets)');
  }

  /**
   * {@inheritdoc}
   */
  public function buildLabel(PaymentMethodInterface $payment_method) {
    // TODO: Implement buildLabel() method.
  }

}
