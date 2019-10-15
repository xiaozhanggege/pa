<?php
namespace plugins\GraphQL;

use GraphQL\Type\Definition\EnumType;
use GraphQL\Type\Definition\ObjectType;

class Types{
    static private $op = null;
    static private $condition = null;
    static private $filter = null;
    static private $tables = [];
    public static function op(): EnumType{
        return self::$op ?? (self::$op = new EnumType(
            [
                'name'=>'Operation',
                'values' => [
                    'EQ'   => '=',
                    'NEQ'  => '!=',
                    'GT'   => '>',
                    'EGT'  => '>=',
                    'LT'   => '<',
                    'ELT'  => '<=',
                    'IN'   => 'in',
                    'AND'  => 'and',
                    'OR'   => 'or',
                    'LIKE' => 'like %?%', // 包含
                    'PL'   => 'like ?%'   // 前缀包含
                ]
            ]
        ));
    }
    public static function condition():ConditionInputType{
        return self::$condition ?: (self::$condition = new ConditionInputType());
    }
    public static function filter():FiltersInputType{
        return self::$filter ?: (self::$filter = new FiltersInputType());
    }
    public static function table($name):ObjectType{
        return self::$tables[$name] ?? (self::$tables[$name] = new ModelType($name));
    }
}