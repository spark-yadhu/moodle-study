<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version information
 *
 * @package   report_testreport
 * @copyright 2015 onwards Yadhu krishnan  {@link http://moodle.com}
 * @license   sparksupport.org 
 */

require_once(dirname(_FILE_).'/../../config.php');
require_once('./lib.php');
require_once(dirname(__FILE__) .'/../../lib/gradelib.php');

$id    = required_param('id',PARAM_INT);
$course = $DB->get_record('course', array('id' => $id), '*', MUST_EXIST);
//$grade = grade_get_grades($id, 'mod', 'assign', 1, $userid_or_ids=0);
//print_r($grade);
require_login($course);
$context = context_course::instance($id);                                             
require_capability('report/testreport:view', $context);                               
$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/report/testreport/index.php'),array('id' => $id));                              
$PAGE->set_title(get_string('title', 'report_testreport'));                           
$PAGE->set_pagelayout('report');
echo $OUTPUT->header();                                                                
echo $OUTPUT->box($course->fullname);                               
echo $OUTPUT->footer();
