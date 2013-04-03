<?php
App::uses('AppModel', 'Model');
/**
 * Group Model
 *
 */
class Group extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	 var $name = 'Group';
    var $hasMany = array('User');
    var $actsAs = array('Acl' => array('requester'));
 
    function parentNode() {
        return null;
    }

}
