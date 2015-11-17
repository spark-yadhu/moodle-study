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
require_login();
$context = context_course::instance();                       //get context
require_capability('report/testreport:view', $context);      //require capablity on context
$id    = required_param('id', 0, PARAM_INT);
$PAGE->set_url(new moodle_url('/report/testreport/index.php'),array('id' => $id));                              
$PAGE->set_title(get_string('title', 'report_testreport'));       // set title
$PAGE->set_pagelayout('report');
echo $OUTPUT->header();                                       // 11
echo $OUTPUT->box(get_string('hello world'));                               // 12
echo $OUTPUT->footer();           
