<?php

class Migration_Seeder extends CI_Migration {

    public function up() {

        $sql1 = "INSERT INTO roles (id,name,description,status,created_at,updated_at) 
                    VALUES
                    (1,'administrator','Administrator','1',date('Y-m-d H:i:s'),date('Y-m-d H:i:s')),
                    (2,'kepala_sekolah','Kepala Sekolah','1',date('Y-m-d H:i:s'),date('Y-m-d H:i:s')),
                    (3,'guru_bk','Guru BK','1',date('Y-m-d H:i:s'),date('Y-m-d H:i:s')),
                    (4,'guru_mapel','Guru Mapel','1',date('Y-m-d H:i:s'),date('Y-m-d H:i:s')),
                    (5,'ortu_bapak','Bapak','1',date('Y-m-d H:i:s'),date('Y-m-d H:i:s')),
                    (6,'ortu_ibu','Ibu','1',date('Y-m-d H:i:s'),date('Y-m-d H:i:s')),
                    (7,'siswa','Siswa','1',date('Y-m-d H:i:s'),date('Y-m-d H:i:s'))
                    ";
        $this->db->query($sql1);

        $sql2 = "INSERT INTO users (id,username,password,email,full_name,status,role_id,created_at,updated_at) 
                    VALUES
                    (1,'admin',md5('admin'),'administrator@example.com','Administrator','1','1',date('Y-m-d H:i:s'),date('Y-m-d H:i:s')),
                    (2,'hafid',md5('hafid'),'hafid@example.com','Hafid Afridian','1','1',date('Y-m-d H:i:s'),date('Y-m-d H:i:s')),
                    (3,'budi',md5('budi'),'budi@example.com','Budi Anduk','1','1',date('Y-m-d H:i:s'),date('Y-m-d H:i:s'))
                    ";
        $this->db->query($sql2);
    }

    public function down() {
        $sql1 = "DELETE FROM roles WHERE (id) IN ((1),(2),(3),(4),(5),(6),(7))";
        $this->db->query($sql1);

        $sql2 = "DELETE FROM users WHERE (id) IN ((1),(2),(3))";
        $this->db->query($sql2);
    }

}