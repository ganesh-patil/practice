<?php
class AddFieldUsernameAndPasswordInUserTable extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			
			'create_field' => array(
                'users' => array(
                    'username' => array(
                        'type' => 'text','length'=>255,'default'=>null),
                    'password' => array(
                        'type' => 'text','length'=>255,'default'=>null),
                    'group_id' => array(
                    	'type'=>'integer','length'=>10),

                ),
              
                ),
			'create_table' => array(
    'groups' => array(
        'id' => array(
            'type'    =>'integer',
            'null'    => false,
            'default' => NULL,
            'length'  => 11,
            'key'     => 'primary'),
        'name' => array(
            'type'    =>'string',
            'null'    => false,
            'default' => NULL),
        
        'indexes' => array(
            'PRIMARY' => array(
                'column' => 'id',
                'unique' => 1)
        )
    ),
    'notes' => array(
        'id' => array(
            'type'    =>'integer',
            'null'    => false,
            'default' => NULL,
            'length'  => 11,
            'key'     => 'primary'),
        'title' => array(
            'type'    =>'string',
            'null'    => false,
            'default' => NULL),
        'body' => array(
            'type'    =>'text',
            'null'    => false,
            'default' => NULL),
        
        'indexes' => array(
            'PRIMARY' => array(
                'column' => 'id',
                'unique' => 1)
        )
    ),

		)


            
		),
		'down' => array(
			'drop_field'=>array(
				'users'=>array(
					'username','password','group_id'),
				),
			'drop_table' => array(
   	 'groups','notes'
)
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
