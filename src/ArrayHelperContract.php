<?php
namespace Bobby\ArraySpecialHelper;

interface ArrayHelperContract
{
    /** 使用字符串表示维度设置数组值.如:queryMultidimensionalSet($arr, "[name][][]", $value)
     * @param $array
     * @param string $query
     * @param $value
     */
    public static function queryMultidimensionalSet(&$array, string $query, $value);

    /** 将数组转为一维表示 转化后格式如:[$prefix . '[name][0][1]' => 'ludy', $prefix . '[name][0][1]' => 'php', $prefix . '[score][0]' => 100, $prefix . '[0]' => 'ok']
     * @param $node
     * @param string $prefix
     * @param $result
     */
    public static function convertKeyToOneDepth($node, string $prefix, &$result);

    /** 使用字符串表示维度查找数组元素 如:queryMultidimensionalSet($arr, "[name][0][0]")
     * @param $array
     * @param string $query
     * @param $value
     */
    public static function queryMultidimensional($array, string $query);
}