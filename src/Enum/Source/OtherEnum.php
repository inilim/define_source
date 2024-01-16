<?php

namespace Inilim\Source\Enum\Source;

use Inilim\Source\Enum\SourceInterface;

enum OtherEnum: string implements SourceInterface
{
    case DIRECT_VISIT     = 'direct_visit';
    case VISIT_FROM_SITE  = 'visit_from_site';
}
