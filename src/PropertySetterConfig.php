<?php
/**
 * Class Config
 * @package PropertyConfig
 * @copyright Alaa Al-Maliki
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
final class PropertySetterConfig
{
    /**
     * Sets object properties by a given array
     *
     * @param $object
     * @param array $config
     */
    static public function setObjectProperties($object, array $config = [])
    {
        foreach (static::createSetterMethods($config) as $method => $value) {
            if (method_exists($object, $method)) {
                $object->$method($value);
            }
        }
    }

    /**
     * @param  array $config
     * @return array
     */
    static private function createSetterMethods(array $config)
    {
        $methods = [];
        foreach ($config as $key => $value) {
            $parts = array_map(function ($word) {
                return ucfirst($word);
            }, explode('_', $key));

            $methods['set' . implode($parts)] = $value;
        }

        return $methods;
    }
}