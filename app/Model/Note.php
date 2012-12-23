<?php
App::uses('AppModel', 'Model');
/**
 * Note Model
 *
 */
class Note extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	
    var $name = 'User';
    var $belongsTo = array('Group');
    var $actsAs = array('Acl' => array('requester'));
 
    function parentNode(){
        if (!$this->id) {
            return null;
        }
        $data = $this->read();
        if (!$data['User']['group_id']){
            return null;
        } else {
            return array('model' => 'Group', 'foreign_key' => $data['User']['group_id']);
        }
    }public $displayField = 'title';

}
