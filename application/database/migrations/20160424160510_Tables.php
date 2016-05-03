<?php

class Migration_Tables extends CI_Migration {

    public function up() {

        //Create Database
        // $sql = "CREATE DATABASE IF NOT EXISTS monitoring";
        // $this->db->query($sql);

        //Role
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'unique' => TRUE
            ),
            'description' => array(
                'type' => 'TEXT'
            ),
            'status' => array(
                'type' => 'BOOLEAN',
                'default' => true
            ),
			'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
			'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('roles', TRUE);

        //Class
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 40
            ),
            'short_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            ),
            'note' => array(
                'type' => 'TEXT'
            ),
            'status' => array(
                'type' => 'BOOLEAN',
                'default' => true
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('classes', TRUE);

        //Course
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'unique' => TRUE
            ),
            'status' => array(
                'type' => 'BOOLEAN',
                'default' => true
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('courses', TRUE);

        //User
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'avatar' => array(
                'type' => 'VARCHAR',
                'constraint' => 40
            ),
            'full_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 40
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'unique' => true
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'unique' => true
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'status' => array(
                'type' => 'BOOLEAN',
                'default' => true
            ),
            'last_login_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'new_login_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('role_id');
        $this->dbforge->create_table('users', TRUE);

        //Teacher
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'avatar' => array(
                'type' => 'VARCHAR',
                'constraint' => 40
            ),
            'full_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 40
            ),
            'born_date' => array(
                'type' => 'DATE',
                'default' => '0000-00-00'
            ),
            'born_place' => array(
                'type' => 'VARCHAR',
                'constraint' => 40
            ),
            'gender' => array(
                'type' => 'VARCHAR',
                'constraint' => 1
            ),
            'telephone' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            ),
            'address' => array(
                'type' => 'TEXT'
            ),
            'nip' => array(
                'type' => 'VARCHAR',
                'constraint' => 40,
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'unique' => true
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'unique' => true
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'status' => array(
                'type' => 'BOOLEAN',
                'default' => true
            ),
            'last_login_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'new_login_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('full_name');
        $this->dbforge->add_key('role_id');
        $this->dbforge->add_key('telephone');
        $this->dbforge->create_table('teachers', TRUE);

        //Teacher's Courses
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'course_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'teacher_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('course_id');
        $this->dbforge->add_key('teacher_id');
        $this->dbforge->create_table('teachers_courses', TRUE);

        //Academic Years
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'year' => array(
                'type' => 'YEAR',
                'default' => '0000'
            ),
            'status' => array(
                'type' => 'BOOLEAN',
                'default' => true
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('academic_years', TRUE);

        //Semesters
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'academic_year_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'code' => array(
                'type' => 'VARCHAR',
                'constraint' => 5
            ),
            'status' => array(
                'type' => 'BOOLEAN',
                'default' => true
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('semesters', TRUE);

        //Teacher's Classes
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'class_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'teacher_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'academic_year_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('class_id');
        $this->dbforge->add_key('teacher_id');
        $this->dbforge->add_key('academic_year_id');
        $this->dbforge->create_table('teachers_classes', TRUE);

        //Student
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'avatar' => array(
                'type' => 'VARCHAR',
                'constraint' => 40
            ),
            'full_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 40
            ),
            'born_date' => array(
                'type' => 'DATE',
                'default' => '0000-00-00'
            ),
            'born_place' => array(
                'type' => 'VARCHAR',
                'constraint' => 40
            ),
            'gender' => array(
                'type' => 'VARCHAR',
                'constraint' => 1
            ),
            'telephone' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            ),
            'address' => array(
                'type' => 'TEXT'
            ),
            'nis' => array(
                'type' => 'VARCHAR',
                'constraint' => 40,
            ),
            'nisn' => array(
                'type' => 'VARCHAR',
                'constraint' => 40,
            ),
            'generation' => array(
                'type' => 'YEAR',
                'default' => '0000'
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'unique' => true
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'unique' => true
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'status' => array(
                'type' => 'BOOLEAN',
                'default' => true
            ),
            'last_login_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'new_login_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('full_name');
        $this->dbforge->add_key('role_id');
        $this->dbforge->add_key('nis');
        $this->dbforge->add_key('nisn');
        $this->dbforge->create_table('students', TRUE);

        //Student's Classes
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'student_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'class_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'year' => array(
                'type' => 'YEAR',
                'default' => '0000'
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('student_id');
        $this->dbforge->add_key('class_id');
        $this->dbforge->create_table('students_classes', TRUE);

        //Parent
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'avatar' => array(
                'type' => 'VARCHAR',
                'constraint' => 40
            ),
            'full_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 40
            ),
            'born_date' => array(
                'type' => 'DATE',
                'default' => '0000-00-00'
            ),
            'born_place' => array(
                'type' => 'VARCHAR',
                'constraint' => 40
            ),
            'gender' => array(
                'type' => 'VARCHAR',
                'constraint' => 1
            ),
            'telephone' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            ),
            'address' => array(
                'type' => 'TEXT'
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'unique' => true
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'unique' => true
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'status' => array(
                'type' => 'BOOLEAN',
                'default' => true
            ),
            'last_login_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'new_login_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('full_name');
        $this->dbforge->create_table('parents', TRUE);

        //Student's Parents
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'student_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'parent_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('student_id');
        $this->dbforge->add_key('parent_id');
        $this->dbforge->add_key('role_id');
        $this->dbforge->create_table('students_parents', TRUE);

        //Fault Categories
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'short_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            ),
            'description' => array(
                'type' => 'TEXT'
            ),
            'status' => array(
                'type' => 'BOOLEAN',
                'default' => true
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('categories', TRUE);

        //Fault Type
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'short_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            ),
            'description' => array(
                'type' => 'TEXT'
            ),
            'category_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'status' => array(
                'type' => 'BOOLEAN',
                'default' => true
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('name');
        $this->dbforge->add_key('category_id');
        $this->dbforge->create_table('types', TRUE);

        //Fault
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            ),
            'short_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            ),
            'description' => array(
                'type' => 'TEXT'
            ),
            'point' => array(
                'type' => 'INT',
                'constraint' => 3
            ),
            'status' => array(
                'type' => 'BOOLEAN',
                'default' => true
            ),
            'type_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('name');
        $this->dbforge->add_key('type_id');
        $this->dbforge->create_table('faults', TRUE);

        //Student's Faults
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'student_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'fault_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => '0000-00-00 00:00:00'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('student_id');
        $this->dbforge->add_key('fault_id');
        $this->dbforge->create_table('students_faults', TRUE);

        // $sql = "ALTER TABLE teachers ADD INDEX role_id (role_id), ADD INDEX nip (nip), ADD INDEX class_id (class_id)";
        // $this->db->query($sql);
    }

    public function down() {
        $this->dbforge->drop_table('roles', TRUE);
        $this->dbforge->drop_table('classes', TRUE);
        $this->dbforge->drop_table('courses', TRUE);
        $this->dbforge->drop_table('users', TRUE);
        $this->dbforge->drop_table('teachers', TRUE);
        $this->dbforge->drop_table('teachers_courses', TRUE);
        $this->dbforge->drop_table('students', TRUE);
        $this->dbforge->drop_table('students_classes', TRUE);
        $this->dbforge->drop_table('parents', TRUE);
        $this->dbforge->drop_table('students_parents', TRUE);
        $this->dbforge->drop_table('categories', TRUE);
        $this->dbforge->drop_table('types', TRUE);
        $this->dbforge->drop_table('faults', TRUE);
        $this->dbforge->drop_table('students_faults', TRUE);

        // $sql = "CREATE DATABASE IF EXISTS monitoring";
        // $this->db->query($sql);
    }

}