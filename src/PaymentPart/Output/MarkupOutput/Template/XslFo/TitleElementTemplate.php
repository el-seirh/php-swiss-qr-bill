<?php

namespace Sprain\SwissQrBill\PaymentPart\Output\MarkupOutput\Template\XslFo;

class TitleElementTemplate
{
    public const TEMPLATE = <<<EOT
<h2>{{ {{ title }} }}</h2>
EOT;
}
