<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_questions_table extends CI_Migration {

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'question' => array(
                'type' => 'TEXT'
            ),
            'correct_answer_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            )
        ];
        $this->dbforge->create_table('questions',TRUE);
    }

    public function down()
    {

    }
}