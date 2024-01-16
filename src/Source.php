<?php

namespace Inilim\Source;

// ------------------------------------------------------------------
// Trait
// ------------------------------------------------------------------

// ------------------------------------------------------------------
// Interface
// ------------------------------------------------------------------
use Inilim\Source\Enum\SourceInterface;

// ------------------------------------------------------------------
// Service
// ------------------------------------------------------------------

// ------------------------------------------------------------------
// Enum
// ------------------------------------------------------------------
use Inilim\Source\Enum\Source\OtherEnum;
// ------------------------------------------------------------------
// Model
// ------------------------------------------------------------------

// ------------------------------------------------------------------
// Exception
// ------------------------------------------------------------------

class Source
{
    protected string $source_string;
    protected SourceInterface $source_enum;

    public function __construct(
        protected ?string $referer
    ) {
        $this->referer = trim($this->referer ?? '');
        $this->define();
    }

    public function getSourceAsEnum(): SourceInterface
    {
        return $this->source_enum;
    }

    public function getSourceAsString(): string
    {
        return $this->source_string;
    }

    // ------------------------------------------------------------------
    // protected
    // ------------------------------------------------------------------

    protected function define(): void
    {
        if ($this->referer === '') {
            $this->source_enum   = OtherEnum::DIRECT_VISIT;
            $this->source_string = OtherEnum::DIRECT_VISIT->value;
            return;
        }
        // ------------------------------------------------------------------

    }
}
