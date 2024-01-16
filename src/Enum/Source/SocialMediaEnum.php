<?php

namespace Inilim\Source\Enum\Source;

use Inilim\Source\Enum\SourceInterface;

enum SocialMediaEnum: string implements SourceInterface
{
    case FACEBOOK = 'facebook';
    case VK       = 'vk';
    case TELEGRAM = 'telegram';
}
