<?php

declare(strict_types=1);

namespace Drupal\server_general\ThemeTrait;

/**
 * Helper methods for rendering People Card elements.
 */
trait PeopleCardThemeTrait {

  /**
   * Build a Person card with contact information.
   *
   * @param string $image_url
   *   The image URL.
   * @param string $name
   *   The person's name.
   * @param string|null $role
   *   Optional; The person's role.
   * @param string|null $title
   *   Optional; The person's title.
   * @param string|null $email
   *   Optional; The person's email.
   * @param string|null $phone
   *   Optional; The person's phone.
   *
   * @return array
   *   The render array.
   */
  protected function buildElementPersonCard(string $image_url, string $name, ?string $role = NULL, ?string $title = NULL, ?string $email = NULL, ?string $phone = NULL): array {
    return [
      '#theme' => 'server_theme_person_card',
      '#src' => $image_url,
      '#name' => $name,
      '#role' => $role,
      '#title' => $title,
      '#email' => $email,
      '#phone' => $phone,
    ];
  }

  /**
   * Build multiple Person cards in a grid layout.
   *
   * @param array $cards
   *   Array of person card render arrays.
   *
   * @return array
   *   The render array.
   */
  protected function buildElementPersonCards(array $cards): array {
    return [
      '#theme' => 'server_theme_person_cards',
      '#cards' => $cards,
    ];
  }

}