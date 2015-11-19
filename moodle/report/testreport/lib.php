<?php
/**
 * Version information
 *
 * @package   report_testreport
 * @copyright 2015 onwards Yadhu krishnan  {@link http://moodle.com}
 * @license   sparksupport.org 
 */

function report_testreport_extend_navigation_course($navigation, $course, $context) {
    if (has_capability('report/testreport:view', $context)) {
        $url = new moodle_url('/report/testreport/index.php', array('id'=>$course->id));
        $navigation->add(get_string('pluginname', 'report_testreport'), $url, navigation_node::TYPE_SETTING, null, null, new pix_icon('i/report', ''));
    }
}


