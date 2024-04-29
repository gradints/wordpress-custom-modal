<?php
namespace Custom_Modal\Utility;

/**
 * Format backslash to slash
 * @param string $text text to be formatted
 * @return string formatted text
 */
function format_slash($text)
{
    return str_replace("\\", "/", $text);
}

/**
 * Get formatted WP absolute path
 * @return string WP absolute path (formatted)
 */
function get_absolute_path()
{
    return format_slash(rtrim(ABSPATH, "/"));
}

/**
 * Get formatted relative directory of feature
 * @param string $path path to file or folder
 * @return string relative directory of feature (formatted)
 */
function feature_dir($path = "")
{
    return str_replace(get_absolute_path(), "", feature_absolute_dir($path));
}

/**
 * Get formatted absolute directory of feature
 * @param string $path path to file or folder
 * @return string absolute directory of feature (formatted)
 */
function feature_absolute_dir($path = "")
{
    return format_slash(realpath(dirname(__FILE__) . "/" . $path));
}