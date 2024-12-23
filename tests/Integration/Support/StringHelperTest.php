<?php

declare(strict_types=1);

namespace Tests\Tempest\Integration\Support;

use Tests\Tempest\Integration\FrameworkIntegrationTestCase;
use function Tempest\Support\str;

/**
 * @internal
 */
final class StringHelperTest extends FrameworkIntegrationTestCase
{
    public function test_plural_studly(): void
    {
        $this->assertTrue(str('RealHuman')->pluralizeLast()->equals('RealHumans'));
        $this->assertTrue(str('Model')->pluralizeLast()->equals('Models'));
        $this->assertTrue(str('VortexField')->pluralizeLast()->equals('VortexFields'));
        $this->assertTrue(str('MultipleWordsInOneString')->pluralizeLast()->equals('MultipleWordsInOneStrings'));
    }
}
