<?php

if (!function_exists('markdownProcess')) {
    function markdownProcess($markdown)
    {
        return \Markdown::parse(e($markdown));
    }
}
