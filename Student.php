<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Holds first name, surname, emails and grades of student; can calculate
 * grade average of student; can output description of student using toString()
 *
 * @author Derek
 */
class Student {
    // Default constructor
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    // Add email to Student's email array
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    // Add grade to Student's grades array
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    // Calculates the Student's average grade
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    // Displays Student object (includes formatting)
    function toString() {
        $result = '<strong>' . $this->first_name . ' ' . $this->surname . '</strong>';
        $result .= ' (' . $this->average() . ")\n";
        foreach($this->emails as $which=>$what) {
            $result .= '<strong>' . $which . ":</strong>\t " . $what . "\n";
        }
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}
