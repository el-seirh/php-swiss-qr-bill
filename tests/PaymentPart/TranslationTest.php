<?php

namespace Sprain\Tests\SwissQrBill\PaymentPart;

use PHPUnit\Framework\TestCase;
use Sprain\SwissQrBill\DataGroup\Element\AdditionalInformation;
use Sprain\SwissQrBill\PaymentPart\Translation\Translation;

class TranslationTest extends TestCase
{
    /**
     * @dataProvider allTranslationsProvider
     */
    public function testAllByLanguage($locale, $subset)
    {
        $this->assertArraySubset($subset, Translation::getAllByLanguage($locale));
    }

    public function allTranslationsProvider()
    {
        return [
            ['de', ['paymentPart' => 'Zahlteil']],
            ['fr', ['paymentPart' => 'Section de paiement']],
            ['it', ['paymentPart' => 'Sezione di pagamento']],
            ['en', ['paymentPart' => 'Payment part']]
        ];
    }

    /**
     * @dataProvider singleTranslationProvider
     */
    public function testGet($locale, $key, $translation)
    {
        $this->assertSame($translation, Translation::get($key, $locale));
    }

    public function singleTranslationProvider()
    {
        return [
            ['de', 'paymentPart', 'Zahlteil'],
            ['fr', 'paymentPart', 'Section de paiement'],
            ['it', 'paymentPart', 'Sezione di pagamento'],
            ['en', 'paymentPart', 'Payment part']
        ];
    }
}