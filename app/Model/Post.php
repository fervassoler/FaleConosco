<?php
/**
 * Created by PhpStorm.
 * User: Fernanda
 * Date: 28/03/2015
 * Time: 16:22
 */

class Post extends AppModel {
    public $name = 'Post';

    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'email' => array(
            'rule' => 'notEmpty'
        ),
        'subject' => array(
            'rule' => 'notEmpty'
        ),
        'observation' => array(
            'rule' => 'notEmpty'
        )
    );
}