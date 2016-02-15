<?php
return array(
  //重新定义模板地址
  'TMPL_PARSE_STRING' => array(
		'__PUBLIC__'=>__ROOT__.'/'.Application.'/'.MODULE_NAME.'/View/Public',

		),
    'LAYOUT_ON'=>true,
    'LAYOUT_NAME'=>'Layout/layout',
);
