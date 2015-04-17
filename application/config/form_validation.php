<?php

$config = array(
    'book' => array(
        array(
            'field' => 'title',
            'label' => '名称',
            'rules' => 'required',
        ),
        array(
            'field' => 'author',
            'label' => '作者',
            'rules' => 'required',
        ),
        array(
            'field' => 'press',
            'label' => '出版社',
            'rules' => 'required',
        ),
        array(
            'field' => 'date',
            'label' => '出版日期',
            'rules' => 'required',
        ),
        array(
            'field' => 'isbn',
            'label' => '书号',
            'rules' => 'required',
        ),

        array(
            'field' => 'type',
            'label' => '图书等级',
            'rules' => 'required|integer',
        ),
        array(
            'field' => 'cid',
            'label' => '分类',
            'rules' => 'required|integer',
        ),
        array(
            'field' => 'rent',
            'label' => '租金',
            'rules' => 'required|integer',
        ),
        array(
            'field' => 'stock',
            'label' => '库存',
            'rules' => 'required|integer',
        ),

    ),
    'cate' => array(
        array(
            'field' => 'cname',
            'label' => '栏目名称',
            'rules' => 'required|max_length[20]',
        ),

    ),

);
