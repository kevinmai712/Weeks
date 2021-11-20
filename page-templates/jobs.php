<?php
/**
 * Template Name: Job Description Page
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package awps
 */

get_header();

$jobInfo  = array();
$jobInfo['copy'] = get_field("copy");


$jobInfo['job_title'] = get_field("job_title");
$jobInfo['job_location'] = get_field("job_location");
$jobInfo['job_duration'] = get_field("job_duration");
$jobInfo['careerForm'] =  '[contact-form-7 id="5948" title="Careers Form Main"]';




Timber::render('./assets/src/components/jobs/jobs.twig', $jobInfo);

?>


<?php get_footer(); ?>
