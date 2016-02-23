<?php
/**
 * systemSettings transport file for myorganisation extra
 *
 * Copyright 2016 by Danny Harding <http://stuntrocket.co>
 * Created on 02-22-2016
 *
 * @package myorganisation
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $systemSettings */


$systemSettings = array();

$systemSettings[1] = $modx->newObject('modSystemSetting');
$systemSettings[1]->fromArray(array (
  'key' => 'organisation_name',
  'name' => 'Organisation Name',
  'description' => 'Organisation Name',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[2] = $modx->newObject('modSystemSetting');
$systemSettings[2]->fromArray(array (
  'key' => 'organisation_base_title',
  'name' => 'Company Base Title',
  'description' => 'Company Base Title',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[3] = $modx->newObject('modSystemSetting');
$systemSettings[3]->fromArray(array (
  'key' => 'organisation_email',
  'name' => 'Site Public Email',
  'description' => 'Site Public Email',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[4] = $modx->newObject('modSystemSetting');
$systemSettings[4]->fromArray(array (
  'key' => 'organisation_telephone',
  'name' => 'Site Public Telephone',
  'description' => 'Site Public Telephone',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[5] = $modx->newObject('modSystemSetting');
$systemSettings[5]->fromArray(array (
  'key' => 'organisation_building',
  'name' => 'Building',
  'description' => 'Building',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[6] = $modx->newObject('modSystemSetting');
$systemSettings[6]->fromArray(array (
  'key' => 'organisation_street',
  'name' => 'Street',
  'description' => 'Street',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[7] = $modx->newObject('modSystemSetting');
$systemSettings[7]->fromArray(array (
  'key' => 'organisation_city',
  'name' => 'City',
  'description' => 'City',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[8] = $modx->newObject('modSystemSetting');
$systemSettings[8]->fromArray(array (
  'key' => 'organisation_county',
  'name' => 'County',
  'description' => 'County',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[9] = $modx->newObject('modSystemSetting');
$systemSettings[9]->fromArray(array (
  'key' => 'organisation_country',
  'name' => 'Country',
  'description' => 'Country',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[10] = $modx->newObject('modSystemSetting');
$systemSettings[10]->fromArray(array (
  'key' => 'organisation_postcode',
  'name' => 'Postcode',
  'description' => 'Postcode',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[11] = $modx->newObject('modSystemSetting');
$systemSettings[11]->fromArray(array (
  'key' => 'organisation_address',
  'name' => 'Company Full Address',
  'description' => 'Company Full Address',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[12] = $modx->newObject('modSystemSetting');
$systemSettings[12]->fromArray(array (
  'key' => 'organisation_number',
  'name' => 'Company Registration Number',
  'description' => 'Company Registration Number',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[13] = $modx->newObject('modSystemSetting');
$systemSettings[13]->fromArray(array (
  'key' => 'organisation_meta_description',
  'name' => 'Base Meta Description',
  'description' => 'Base Meta Description',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[14] = $modx->newObject('modSystemSetting');
$systemSettings[14]->fromArray(array (
  'key' => 'organisation_default_author',
  'name' => 'Default Author',
  'description' => 'Default Author',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[15] = $modx->newObject('modSystemSetting');
$systemSettings[15]->fromArray(array (
  'key' => 'organisation_facebook',
  'name' => 'Facebook Page',
  'description' => 'Facebook Page',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[16] = $modx->newObject('modSystemSetting');
$systemSettings[16]->fromArray(array (
  'key' => 'organisation_github',
  'name' => 'Github Page',
  'description' => 'Github Page',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[17] = $modx->newObject('modSystemSetting');
$systemSettings[17]->fromArray(array (
  'key' => 'organisation_google',
  'name' => 'Google+ Page',
  'description' => 'Google+ Page',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[18] = $modx->newObject('modSystemSetting');
$systemSettings[18]->fromArray(array (
  'key' => 'organisation_linkedin',
  'name' => 'Linkedin Page',
  'description' => 'Linkedin Page',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[19] = $modx->newObject('modSystemSetting');
$systemSettings[19]->fromArray(array (
  'key' => 'organisation_support',
  'name' => 'Support Email',
  'description' => 'Support Email',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[20] = $modx->newObject('modSystemSetting');
$systemSettings[20]->fromArray(array (
  'key' => 'organisation_twitter',
  'name' => 'Twitter Page',
  'description' => 'Twitter Page',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[21] = $modx->newObject('modSystemSetting');
$systemSettings[21]->fromArray(array (
  'key' => 'organisation_twitter_name',
  'name' => 'Twitter Username',
  'description' => 'Twitter Username',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[22] = $modx->newObject('modSystemSetting');
$systemSettings[22]->fromArray(array (
  'key' => 'google_id',
  'name' => 'Google Analytics ID (UA-)',
  'description' => 'Google Analytics ID (UA-)',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[23] = $modx->newObject('modSystemSetting');
$systemSettings[23]->fromArray(array (
  'key' => 'googlemaps_apikey',
  'name' => 'Googlemaps Apikey',
  'description' => 'Googlemaps Apikey',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[24] = $modx->newObject('modSystemSetting');
$systemSettings[24]->fromArray(array (
  'key' => 'googlemaps_lookupaddress',
  'name' => 'Googlemaps Lookupaddress',
  'description' => 'Googlemaps Lookupaddress',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[25] = $modx->newObject('modSystemSetting');
$systemSettings[25]->fromArray(array (
  'key' => 'mailchimp_apikey',
  'name' => 'Mailchimp Api Key',
  'description' => 'Mailchimp Api Key',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
$systemSettings[26] = $modx->newObject('modSystemSetting');
$systemSettings[26]->fromArray(array (
  'key' => 'skin',
  'name' => 'Skin',
  'description' => 'Skin',
  'namespace' => 'myorganisation',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'myorganisation',
), '', true, true);
return $systemSettings;
