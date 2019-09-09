<?php

namespace HtmlBuilder;

use HtmlBuilder\Forms\CheckBox;
use HtmlBuilder\Forms\Input;
use HtmlBuilder\Forms\Radio;

class Forms extends Element {

    public static function input($name, $label='', $subtype='text'):Input{
        return new Input($name, $subtype, $label);
    }
    
    public static function checkbox():CheckBox{
        return new CheckBox();
    }
    public static function radio():Radio{
        return new Radio();
    }
    public static function select():self{ return static::create('','');}
    public static function button():self{ return static::create('','');}
    public static function file():self{ return static::create('','');}
    public static function textarea():self{ return static::create('','');}
    public static function form(string $name):self{ return static::create('form','a')->template('form');}
}

//FormElement::form()->add(
//    FormElement::input('aa')
//)->id('aaa');
//
//$b->add(
////    (new BaseElement('name'))->label('aa')
//    // Former::input('aaa')->label('')
//    // Former::checkbox('aaa[]')->label('')
//    // Former::radio()
//    Element::create('input','')->label('aaa')
//);
//$b->add(
//    Element::create('input','')->label('111'),
//    Element::create('checkbox',''),
//    Element::create('radio','')->label()->value()->required()->enabled()->validate()->sdf()
//);
//$b->add(Element::create('radio',''), Element::input('l'));
//
//
////$b = new BaseElement();
////$b->substr = [];
////$b->type = 'a';
////$b->name = '';
////$b->label= '';
//

/*
$a = new Builder();
$a->add('input',[
    'type'        => 'text',
    'substr'      => 'email',
    'name'        => 'user_name',
    'value'       => '默认值',
    'label'       => '用户名',
    'placeHolder' => '请输入用户名',
    'tooltip'     => '英文名称',
    'description' => '用户名如果不存在，将会支持',
    'validators'  => [
        [
            'type'   => 'text',
            'maxlen' => 12,
            'minlen' => 3,
            'text'   => '用户名最少3位，最大12位',
        ]
    ]
]);
*/