<?php

//view_include("news.tpl",['title'=>'test',...])
// ����������� �������.
// array('content'=>'���������� �����','title'=>'��� �����')
function view_include($fileName, $vars = array())
{
	// ��������� ���������� ��� �������.
	foreach ($vars as $k => $v)
	{
		$$k = $v;
	}

	// ��������� HTML � ������.
	ob_start();
	include $fileName;
	return ob_get_clean();
}

