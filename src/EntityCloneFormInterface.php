<?php

namespace Drupal\entity_clone;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines a common interface for all entity clone form objects.
 */
interface EntityCloneFormInterface {

  /**
   * Get all specific form element.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity.
   *
   * @return array
   */
  public function formElement(EntityInterface $entity);

  /**
   * Get all new values provided by the specific form element.
   *
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The form state.
   *
   * @return mixed
   */
  public function getNewValues(FormStateInterface $form_state);

}
