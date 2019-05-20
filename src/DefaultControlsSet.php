<?php

namespace Msonowal\HL7;

/**
 * Class specifying the HL7 control characters
 *
 *
 * @author     Manash Sonowal
 */
interface DefaultControlCharacters
{
    public const DEFAULT_SEGMENT_SEPARATOR = '\n';

    public const DEFAULT_FIELD_SEPARATOR = '|';

    public const DEFAULT_SEGMENT_ENDING_BAR = true;

    public const DEFAULT_NULL = '""';

    public const DEFAULT_COMPONENT_SEPARATOR = '^';

    public const DEFAULT_REPETITION_SEPARATOR = '~';

    public const DEFAULT_ESCAPE_CHARACTER = '\\';

    public const DEFAULT_SUBCOMPONENT_SEPARATOR = '&';
    
    public const DEFAULT_HL7_VERSION = '2.5.1';
}
