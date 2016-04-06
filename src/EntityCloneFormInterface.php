<?php

namespace Drupal\entity_clone;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Form\FormStateInterface;

interface EntityCloneFormInterface {

  /**
   * Get all specific form element.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   * @return array
   */
  public function formElement(EntityInterface $entity);

  public function getNewValues(FormStateInterface $form_state);

}