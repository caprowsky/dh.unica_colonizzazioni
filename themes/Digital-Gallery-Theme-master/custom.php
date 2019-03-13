<?php
/**
 * These hacks are lame...
 */

/**
 * Gets the value for the given $_GET variable.
 *
 * @param  string $name The name of the $_GET variable.
 * @return string       The value or an empty string
 */
function input_get_value($name)
{
	return isset($_GET[$name]) ? $_GET[$name] : "";
}