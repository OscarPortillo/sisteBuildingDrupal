<?php

namespace Drupal\Tests\language_access\Functional;

/**
 * Test the content translation overview in combination with language_access.
 *
 * @group language_access
 */
class LanguageAccessContentTranslationOverview extends LanguageAccessTestBase {

  /**
   * Test the node content translation overview page.
   */
  public function testNodeContentTranslationOverviewPage() {
    $this->drupalLogin($this->userEn);
    $this->drupalGet('en/node/1/translations');
    $this->assertSession()->pageTextContains('English');
    $this->assertSession()->pageTextNotContains('Dutch');

    $this->drupalGet('nl/node/1/edit');
    $this->drupalLogin($this->userNl);
    $this->drupalGet('nl/node/1/translations');
    $this->assertSession()->pageTextContains('Dutch');
    $this->assertSession()->pageTextNotContains('English');
  }

  /**
   * Test the taxonomy term content translation overview page.
   */
  public function testTaxonomyTermContentTranslationOverviewPage() {
    $this->drupalLogin($this->userEn);
    $this->drupalGet('en/taxonomy/term/1/translations');
    $this->assertSession()->pageTextContains('English');
    $this->assertSession()->pageTextNotContains('Dutch');

    $this->drupalGet('nl/taxonomy/term/1/edit');
    $this->drupalLogin($this->userNl);
    $this->drupalGet('nl/taxonomy/term/1/translations');
    $this->assertSession()->pageTextContains('Dutch');
    $this->assertSession()->pageTextNotContains('English');
  }

}
