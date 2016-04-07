<?php

namespace Drupal\entity_clone;

use Drupal\Core\Entity\EntityInterface;

/**
 * Defines a common interface for all entity clone objects.
 */
interface EntityCloneInterface {

  /**
   * Clone an entity.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity
   *
   * @param array $properties
   *   All new properties to replace old.
   *
   * @return \Drupal\Core\Entity\EntityInterface
   */
  public function cloneEntity(EntityInterface $entity, $properties = []);

}
