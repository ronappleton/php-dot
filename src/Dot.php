<?php


namespace RonAppleton\Dot;


final class Dot
{
    /**
     * Get array value by dot notated key.
     *
     * @param array  $subject
     * @param string $path
     * @param mixed  $default
     * @return array|mixed|null
     */
    public function get(array $subject, $path, $default = null)
    {
        $current = $subject;
        $p = strtok($path, '.');

        while ($p !== false) {
            if (!isset($current[$p])) {
                return $default;
            }
            $current = $current[$p];
            $p = strtok('.');
        }

        return $current;
    }

    /**
     * Set array value via dot notated key.
     *
     * @param array  $subject
     * @param string $path
     * @param mixed  $value
     * @return bool
     */
    public function set(array $subject, $path, $value)
    {
        $level = &$subject;

        foreach(explode('.', $path) as $step)
        {
            $level = &$level[$step];
        }

        return ($level = $value);
    }
}
