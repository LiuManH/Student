<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author 86189
 */
class Student {
    function __construct() {
$this->surname = 'Liu';
$this->first_name = 'ManHua';
$this->emails = array('2639089532@qq.com');
$this->grades = array('set2');
}

function add_email($which,$address) {
$this->emails[$which] = $address;
}
function add_grade($grade) {
$this->grades[] = $grade;
}
