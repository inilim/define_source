<?php

namespace Inilim\Source\Enum\Source;

use Inilim\Source\Enum\SourceInterface;

enum VideoHostingEnum: string implements SourceInterface
{
    case YOUTUBE = 'youtube';
    case RUTUBE  = 'rutube';
}
