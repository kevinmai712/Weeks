<?php
/**
 * Template Name: Contact Page
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package awps
 */

get_header();

$contactInfo  = array();
$contactInfo['copy'] = get_field("copy");
$contactInfo['address'] =  get_field("address");
$contactInfo['address2'] =  get_field("address2");
$contactInfo['hours'] =  get_field("hours");
$contactInfo['phone'] =  get_field("phone");
$contactInfo['phone2'] =  get_field("phone2");
$contactInfo['email'] =  get_field("email");
$contactInfo['contactForm'] =  '[contact-form-7 id="45" title="Contact Page Form"]';

Timber::render('./assets/src/components/contact/contact.twig', $contactInfo);

?>


<?php get_footer(); ?>
