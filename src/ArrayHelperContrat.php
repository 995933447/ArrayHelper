<?php
namespace Bobby\ArraySpecialHelper;

interface ArrayHelperContrat
{
    /** 使用字符串表示维度设置数组值
     * @param $array
     * @param string $query
     * @param $value
     */
    public function queryMultidimensionalSet(&$array, string $query, $value);

    /** 将数组转为一维表示
     * @param $node
     * @param string $prefix
     * @param $result
     */
    public function convertKeyToOneDepth($node, string $prefix, &$result);

    /** 使用字符串表示维度查找数组元素
     * @param $array
     * @param string $query
     * @param $value
     */
    public function queryMultidimensional($array, string $query);
}