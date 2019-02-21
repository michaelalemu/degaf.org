<?php
$menu = $modules->get("MarkupSimpleNavigation");
$options = array(
	'parent_class' => '',
	'current_class' => 'active',
	'show_root' => true,
	'outer_tpl' => '',
	'inner_tpl' => '<ul>||</ul>',
	'list_tpl' => '<li%s>||</li>',
	'list_field_class' => '',
	'item_tpl' => '<a href="{url}">{title}</a>',
	'item_current_tpl' => '<a href="{url}">{title}</a>',
	'xtemplates' => '',
	'xitem_tpl' => '<span>{title}</span>',
	'xitem_current_tpl' => '<span>{title}</span>',
);
echo $menu->render($options);
?>