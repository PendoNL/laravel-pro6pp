<?php

return [
    /**
     * API Key for Pro6PP
     */
    'api_key' => env('PRO6PP_API_KEY', ''),

    /**
     * API Format: json or xml
     */
    'api_format' => env('PRO6PP_FORMAT', 'json'),

    /**
     * Formatted output if true, not formatted if false
     */
    'pretty_results' => env('PRO6PP_PRETTY', false),
];
