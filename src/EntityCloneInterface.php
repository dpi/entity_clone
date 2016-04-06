<?php

namespace Drupal\entity_clone;

use Drupal\Core\Entity\EntityInterface;

interface EntityCloneInterface {

  /**
   * Clone an entity.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   * @param array $properties
   * @return \Drupal\Core\Entity\EntityInterface
   */
  public function cloneEntity(EntityInterface $entity, $properties = []);

}