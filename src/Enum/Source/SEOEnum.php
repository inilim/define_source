<?php

namespace Inilim\Source\Enum\Source;

use Inilim\Source\Enum\SourceInterface;

enum SEOEnum: string implements SourceInterface
{
    case MAIL_RU    = 'mail.ru';
    case GOOGLE     = 'google';
    case YANDEX     = 'yandex';
    case RAMBLER    = 'rambler';
    case YAHOO      = 'yahoo';
    case BING       = 'bing';
    case DUCKDUCKGO = 'duckduckgo';
}
