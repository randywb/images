<?php
App::uses('AuthComponent', 'Controller/Component');


class User extends AppModel {

public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}
    public $validate = array(
        'email' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),

        'firstname' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A firstname is required'
            )
        ),

        'lastname' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A lastname is required'
            )
        ),

        'image' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A image is required'
            )
        ),

        'password_confirm' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A confirmatin password is required'
            )
        )

    );
}

?>