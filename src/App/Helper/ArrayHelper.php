<?php
namespace App\Helper;

class ArrayHelper
{
    /**
     * Flatern a multi-dimentional array concatenating the keys paths
     *
     * @param  array  $array
     * @param  string $prefix
     * @return array
     */
    public static function flatten($array, $prefix = '')
    {

        $result = array();

        foreach ($array as $key => $value) {

            if (is_array($value) && !isset($value[0]) && !isset($value['1'])) {

                $result = $result + self::flatten($value, $prefix.$key.'|');
            } else {
                $result[$prefix.$key] = $value;
            }

        }
        return $result;
    }

    /**
     *
     * @param array $data
     * @return array
     */
    public static function unflatern(array $data)
    {
        $config = [];

        foreach ($data as $row) {

            if (($levels = explode('|', $row['key'])) === false) {
                return;
            }

            $pointer = &$config;
            $max = sizeof($levels);

            for ($i=0; $i < $max ; $i++) {

                if (!isset($pointer[$levels[$i]])) {
                    $pointer[$levels[$i]] = array();
                }

                $pointer = &$pointer[$levels[$i]];
            }

            if (unserialize($row['value'])) {
                $pointer = unserialize($row['value']);
            } else {

                if (strpos($row['value'], ' ') || strpos($row['value'], '-')) {
                    $pointer = $row['value'];
                } else {
                    if ((string) (int) ($row['value'])) {
                        $pointer = (int) $row['value'];
                    } else {
                        $pointer = $row['value'];
                    }
                }
            }

        }

        return $config;
    }

    /**
     *
     * @param type $array
     * @param type $valueToFind
     * @return type
     */
    public static function findPathByValue($array, $valueToFind)
    {
        if (array_key_exists($valueToFind, $array)) {
            return array($valueToFind);
        } else {
            foreach ($array as $key => $subarr) {
                if (is_array($subarr)) {
                    $ret = self::findPathByValue($subarr, $valueToFind);

                    if ($ret) {
                        $ret[] = $key;
                        return $ret;
                    }
                }
            }
        }

        return null;
    }

    /**
     * Show return errors from $form->getErrors() in a friendly way
     *
     * @param  type $form
     * @return String
     */

    public static function getErrorMessages(\Symfony\Component\Form\Form $form)
    {
        $errors = array();

        foreach ($form->getErrors() as $key => $error) {
            if ($form->isRoot()) {
                $errors['#'][] = $error->getMessage();
            } else {
                $errors[] = $error->getMessage();
            }
        }

        foreach ($form->all() as $child) {
            if (!$child->isValid()) {
                $errors[$child->getName()] = self::getErrorMessages($child);
            }
        }

        return  $errors;

    }
}
