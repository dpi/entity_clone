<?php

namespace Drupal\entity_clone\EntityClone\Content\File;

use Drupal\Core\Entity\EntityInterface;
use Drupal\entity_clone\EntityClone\Content\ContentEntityCloneBase;

/**
 * Class ContentEntityCloneBase.
 */
class FileEntityClone extends ContentEntityCloneBase {

  /**
   * {@inheritdoc}
   */
  public function cloneEntity(EntityInterface $entity, EntityInterface $cloned_entity, $properties = []) {
    /** @var \Drupal\file\FileInterface $cloned_entity */
    $cloned_file = file_copy($cloned_entity, $cloned_entity->getFileUri(), FILE_EXISTS_RENAME);
    return parent::cloneEntity($entity, $cloned_file, $properties);
  }

}
