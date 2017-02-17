<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*EDITT(Source) database configuration*/
$config['source_hostname'] = 'localhost';
$config['source_port'] = 3306;
$config['source_username'] = 'root';
$config['source_password'] = 'root';
$config['source_database'] = 'testadt_casino';
$config['source_driver'] = 'mysqli';

/*ADT(target) database configuration*/
$config['target_hostname'] = 'localhost';
$config['target_port'] = 3306;
$config['target_username'] = 'root';
$config['target_password'] = 'root';
$config['target_database'] = 'adt_database1';
$config['target_driver'] = 'mysqli';

/*Migration flags*/
$config['migration_flag_column'] = 'is_migrated';
$config['migration_flag_type'] = 'boolean';
$config['migration_flag_default'] = 0;

/*Migration parameters*/
$config['migration_limit'] = 1000;
$config['migration_offset'] = 0;

/*Migration destination to source tables*/
$config['tables'] = array(
	'tbl_patient' => 'patient'
);

/*Migration query parameters*/
$config['query_delimiter'] = '//';
$config['query_filetype'] = array('sql');

/*Migration source queries*/
$config['patient_query'] = 'public/sql/testadt/patient.sql';



