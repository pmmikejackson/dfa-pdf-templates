<?php

   /**
 * Template Name: NowCerts Security Guard Application
 * Version: Latest .18
 * Description: Security Guard Quote
 * Author: Mike Jackson
 * Author URI: https://mikejacksonpm.com
 * Group: Mike Jackson
 * License: GPLv2
 * Required PDF Version: 4.0
 * Tags: security, form, mikejackson, insurance, quote
 */

/**
 * 2025-08-25 v.14
 * Added contact name field
 * Updated color and logo
 * v.15 changed color throughout to blue #4a67d8
 * 
 * 2025-09-04 v.16
 * Replaced security_business:13 field with bus_age:216 field
 * Updated field mapping for business duration input
 * 
 * 2025-09-04 v.17
 * Changed applicant name to display first and last name separately
 * Updated field mapping for better name formatting
 * 
 * 2025-01-27 v.18
 * Replaced static bus_age field with dynamic PHP calculation
 * Business age now calculated from start date field (217) automatically
 * Improved accuracy and eliminates manual entry errors
*/

/* Prevent direct access to the template (always good to include this) */
if ( ! class_exists( 'GFForms' ) ) {
	return;
}

/**
 * All Gravity PDF v4/v5/v6 templates have access to the following variables:
 *
 * @var array  $form      The current Gravity Form array
 * @var array  $entry     The raw entry data
 * @var array  $form_data The processed entry data stored in an array
 * @var object $settings  The current PDF configuration
 * @var array  $fields    An array of Gravity Form fields which can be accessed with their ID number
 * @var array  $config    The initialised template config class – eg. /config/zadani.php
 */

?>

<!-- Any PDF CSS styles can be placed in the style tag below -->
<style>

</style>

<!-- The PDF content should be placed in here -->
<table style="width: 100%;" cellpadding="5">
<tbody>
<tr>
<td style="width: 50%;"><img src="https://forms.dfainsure.com/wp-content/uploads/2025/08/CleanShot-2025-08-25-at-15.20.25@2x.png" /></td>
<td style="text-align: right; width: 50%;">
<p>PO Box 1868<br />Rockwall, Texas 75087<br />P:(214)646-3347<br />F:(214)943-6531</p>
</td>
</tr>
</tbody>
</table>
<table style="width: 100%;">
<tbody>
<tr>
<td style="text-align: center;">
<h2>Security Guard</h2>
</td>
</tr>
<tr>
<td style="text-align: center; width: 100%;background: #4a67d8;padding:10px;">
<h3>Section I - General Information</h3>
</td>
</tr>
</tbody>
</table>
<table style="width: 100%;">
<tbody>
<tr>
<td colspan="4"><strong>Insured's Name: </strong> {insureds_name:1}</td>
<td colspan="4"><strong>DBA: </strong> {dba:202}</td>
</tr>
<tr>
<td><strong>Mailing Address: </strong> {Address (Street Address):2.1}</td>
<td><strong>City: </strong> {Address (City):2.3}</td>
<td><strong>State: </strong> {Address (State / Province / Region):2.4}</td>
<td><strong>Zip: </strong> {Address (ZIP / Postal Code):2.5}</td>
</tr>
<tr>
<td><strong>Physical Address: </strong>  {Address (Street Address):3.1} </td>
<td><strong>City: </strong> {Address (City):3.3}</td>
<td><strong>State: </strong> {Address (State / Province / Region):3.4}</td>
<td><strong>Zip: </strong> {Address (ZIP / Postal Code):3.5}</td>
</tr>
</tbody>
</table>
<table style="width: 100%;">
<tbody>
<tr>
<td><strong>Contact: </strong>  {contact_name (First):203.3} {contact_name (Last):203.6}</td>
<td><strong>Title: </strong>      {title:5}</td>
<td><strong>Email Address: </strong> {email_address:9}</td>
</tr>
<tr>
<td><strong>Phone: </strong>  {phone:6}</td>
<td><strong>Cell: </strong> {cell:7}</td>
<td><strong>Fax: </strong> {fax:8}</td>
</tr>
<tr>
<td><strong>Business Type:</strong> {select_one:11}</td>  
<td><strong>FEIN: </strong>      {fein:12}</td>
<td><strong>License Number: </strong>      {license_number:14}</td>
</tr>
</tbody>
</table>
<table style="width: 100%;">
<tbody>
<tr>
<td><strong>Effective Date Desired:</strong>      {effective_date_desired:10}</td>
</tr>
<tr>
<td><strong>How long in the Security business? </strong>      <?php
$bus_start_date = rgar( $entry, '217' );
if ( ! empty( $bus_start_date ) && strtotime( $bus_start_date ) ) {
    $start_date = new DateTime( $bus_start_date );
    $today = new DateTime();
    $age = $today->diff( $start_date )->y;
    echo $age . ' years';
} else {
    echo 'N/A';
}
?></td>
</tr>
<tr>
<td><strong>How long under this name? </strong>      {under_this_name:15}</td>
</tr>
<tr>
<td><strong>Has the applicant operated under any other name? </strong>      {other_name:16}</td>
</tr>
<tr>
<td><strong>If “yes”, please identify: </strong>      {please_identify:17}</td>
</tr>
</tbody>
</table>
<table cellpadding="5">
<tbody>
<tr>
<td colspan="4" style="text-align: center;"><strong>Application Classification:</strong></td>
</tr>
<tr>
<td>{security_service:18} <strong>% Security Service</strong></td>
<td>{investigations:19} <strong>% Investigations</strong></td>
<td>{consulting:20} <strong>% Consulting</strong></td>
<td>{alarm_service_monitoring:21} <strong>% Alarm Service Monitoring</strong></td>
</tr>
</tbody>
</table>
<table style="width: 100%;" cellpadding="5">
<tbody>
<tr>
<td style="text-align: center; width: 100%;" colspan="2"><strong>Limit of Liability Desired</strong></td>
</tr>
<tr>
<td style="width: 50%;"><strong>Each Occurrence: </strong>      {each_occurrence:22}</td>
<td style="width: 50%;"><strong>Aggregate: </strong>      {aggregate:23}</td>
</tr>
</tbody>
</table>
<table style="width: 100%;" cellpadding="5">
<tbody>
<tr>
<td style="width: 100%;"><strong>In regards to your clients, do you assume any duties not related to security?</strong>      {duties_not_related_to_security:24}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>If “yes”, please explain below.</strong><br />{please_explain_below:25}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Please provide a list of your (5) five largest clients, along with a description of services: </strong><br />{5_five_largest_clients:26}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Are the majority of your clients under contract? </strong>      {clients_under_contract:27}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>If yes, how many include hold harmless clauses? </strong>      {harmless_clauses:172}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Is workers’ compensation coverage currently in force? </strong>      {workers_compensation:29}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>If “no” please explain: </strong>      {please_explain-wc:30}</td>
</tr>
</tbody>
</table>
<table style="width: 100%;" cellpadding="5">
<tbody>
<tr>
<td style="text-align: center; width: 100%;background: #4a67d8;padding:10px;">
<h3>Section II - Operations</h3>
</td>
</tr>
</tbody>
</table>
<table style="width: 100%;" cellpadding="5">
<tbody>
<tr>
<td style="width: 100%;"><strong>Name of Owner(s), Partner(s) and Shareholder(s), their percentage of ownership and background in this industry: </strong><br />{owners_partners_shareholders:31}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Will the principals perform guard/investigative operations? </strong>      {principals_perform_operations:32}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Please describe duties of supervisors: </strong><br />{duties_of_supervisors:33}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Average number of officers per supervisor: </strong>      {officers_per_supervisor:34}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Employee training consists of: </strong><br />{employee_training_consists_of:174}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Pre-Employment screening procedures for employees: </strong><br />{preemployment_screening_procedures:175}; Other: {other-sc:37}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Number of hours billed to client(s) annually:   Unarmed: </strong>      {unarmed-hr:38} <strong>Armed: </strong>      {armed-hr:39}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Number of officers: Full Time: </strong>      {full_time:40}      <strong>Part Time: </strong>      {part_time:41}      <strong>Unarmed: </strong>      {unarmed-o:42}      <strong>Armed: </strong> {armed-o:43}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Do you use any golf carts for patrol? </strong>      {golf_carts_for_patrol:44}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>If yes, are they equipped with lights? </strong>      {equipped_with_lights:45}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Will the public be transported? </strong>      {will_the_public_be_transported:46}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Are driving records checked? </strong>      {are_driving_records_checked:47}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Do you anticipate using dogs? *Must be leashed not to extend 6 ft. </strong>      {using_dogs:48}</td>
</tr>
</tbody>
</table>
<table style="width: 100%;" cellpadding="5">
<tbody>
<tr>
<td style="width: 50%;"><strong>Number of dogs used with handlers: </strong>      {dogs_with_handlers:49}</td>
<td style="width: 50%;"><strong>Number of dogs without handlers: </strong>      {dogs_without_handlers:50}</td>
</tr>
</tbody>
</table>
<table style="width: 100%;" cellpadding="5">
<tbody>
<tr>
<td style="width: 100%;"><strong>Do any of your officers use tasers in their operations?</strong>      {tasers:51}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Any operations performing security services where jewelry, money, securities or furs are present? </strong>      {operations:52}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Of what professional associations are you a member? </strong>      {professional_associations:53}</td>
</tr>
</tbody>
</table>
<table cellpadding="5">
<tbody>
<tr>
<td style="text-align: center; width: 100%;background: #4a67d8;padding:10px;">
<h3>Section III - Projected Annual Payroll<br />(Not Including Owners & Clerical Staff)</h3>
</td>
</tr>
<tr>
<td><strong>****Your liability insurance carrier defines Independent Contractors as workers who carry their own license and their own liability insurance. All other employees who are 1099 or W2 are considered “on the payroll” and their salaries should be included on the table below.</strong></td>
</tr>
<tr>
<td><strong>Based on the above definition, do you have any independent contractors? </strong>      {independent_contractors:54}</td>
</tr>
<tr>
<td><strong>If “yes”, please give their total salaries: </strong>      {total_salaries:55}</td>
</tr>
</tbody>
</table>
<table style="width: 100%;" cellpadding="5" border="1">
<tbody>
<tr>
<td style="width: 33%;"><strong>Guard Services</strong></td>
<td style="width: 33%;"><strong>Unarmed Payroll</strong></td>
<td style="width: 33%;"><strong>Armed Payroll</strong></td>
</tr>
<tr>
<td style="width: 33%;"><strong>Airports (non-public) **</strong></td>
<td style="width: 33%;">{airports_nonpublic:56}</td>
<td style="width: 33%;">{airports_nonpublic-a:91}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Airports (public) **</strong></td>
<td style="width: 33%;">{airports_public:57}</td>
<td style="width: 33%;">{airports_public-a:92}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Armored Car</strong></td>
<td style="width: 33%;">{armored_car:58}</td>
<td style="width: 33%;">{armored_car-a:93}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Banks</strong></td>
<td style="width: 33%;">{banks:59}</td>
<td style="width: 33%;">{banks-a:94}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Bounty Hunting/Bail Enforcement</strong></td>
<td style="width: 33%;">{bounty_bail:60}</td>
<td style="width: 33%;">{bounty_bail-a:95}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Car Dealerships</strong></td>
<td style="width: 33%;">{car_dealerships:61}</td>
<td style="width: 33%;">{car_dealerships-a:96}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Churches</strong></td>
<td style="width: 33%;">{churches:2}</td>
<td style="width: 33%;">{churches-a:97}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Construction or Demolition Sites</strong></td>
<td style="width: 33%;">{construction_or_demolition_sites:63}</td>
<td style="width: 33%;">{construction_or_demolition_sites-a:98}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Convention/Trade Shows</strong></td>
<td style="width: 33%;">{conventiontrade_shows:64}</td>
<td style="width: 33%;">{conventiontrade_shows-a:99}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Criminal Detention Centers**</strong></td>
<td style="width: 33%;">{criminal_detention_centers:65}</td>
<td style="width: 33%;">{criminal_detention_centers-a:100}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Executive Protection </strong></td>
<td style="width: 33%;">{executive_protection:66}</td>
<td style="width: 33%;">{executive_protection-a:101}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Fast Food Establishments</strong></td>
<td style="width: 33%;">{fast_food_establishments:67}</td>
<td style="width: 33%;">{fast_food_establishments-a:102}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Federal Government Contracts</strong></td>
<td style="width: 33%;">{federal_government_contracts:68}</td>
<td style="width: 33%;">{federal_government_contracts-a:103}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Gated Communities/Retirement </strong></td>
<td style="width: 33%;">{gated_communitiesretirement:69}</td>
<td style="width: 33%;">{gated_communitiesretirement-a:104}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Government-Owned Housing**</strong></td>
<td style="width: 33%;">{governmentowned_housing:70}</td>
<td style="width: 33%;">{governmentowned_housing-a:105}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Hotels/Motels </strong></td>
<td style="width: 33%;">{hotelsmotels:71}</td>
<td style="width: 33%;">{hotelsmotels-a:106}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Industrial (Factories, Warehouses, etc.)</strong></td>
<td style="width: 33%;">{industrial_factories:72}</td>
<td style="width: 33%;">{industrial_factories-a:107}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Institutions (Hospitals, Clinics) </strong></td>
<td style="width: 33%;">{institutions_hospitals:73}</td>
<td style="width: 33%;">{institutions_hospitals-a:108}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Liquor Establishments (Bars, Taverns, Etc.)</strong></td>
<td style="width: 33%;">{liquor_establishments:74}</td>
<td style="width: 33%;">{liquor_establishments-a:109}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Local & State Contracts</strong></td>
<td style="width: 33%;">{local_state_contracts:75}</td>
<td style="width: 33%;">{local_state_contracts-a:110}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Middle/High Income Housing** </strong></td>
<td style="width: 33%;">{middlehigh_income_housing:76}</td>
<td style="width: 33%;">{middlehigh_income_housing-a:111}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Museums/Galleries</strong></td>
<td style="width: 33%;">{museumsgalleries:77}</td>
<td style="width: 33%;">{museumsgalleries-a:112}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Office Buildings</strong></td>
<td style="width: 33%;">{office_buildings:78}</td>
<td style="width: 33%;">{office_buildings-a:113}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Patrol Cars</strong></td>
<td style="width: 33%;">{patrol_cars:79}</td>
<td style="width: 33%;">{patrol_cars-a:114}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Restaurants</strong></td>
<td style="width: 33%;">{restaurants:80}</td>
<td style="width: 33%;">{restaurants-a:115}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Retail Stores (Parking Lots, Outside Perimeter)**</strong></td>
<td style="width: 33%;">{retail_stores_outside:81}</td>
<td style="width: 33%;">{retail_stores_outside-a:116}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Retail Stores (Inside, Shoplifting, Door Duty)**</strong></td>
<td style="width: 33%;">{retail_stores_inside:82}</td>
<td style="width: 33%;">{retail_stores_inside-a:117}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Schools</strong></td>
<td style="width: 33%;">{schools:83}</td>
<td style="width: 33%;">{schools-a:118}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Special Events (Sports, Concerts, Etc)** </strong></td>
<td style="width: 33%;">{special_events:84}</td>
<td style="width: 33%;">{special_events-a:119}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Strike Duty</strong></td>
<td style="width: 33%;">{strike_duty:85}</td>
<td style="width: 33%;">{strike_duty-a:120}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Traffic Control</strong></td>
<td style="width: 33%;">{traffic_control:86}</td>
<td style="width: 33%;">{traffic_control-a:121}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Transport/Courier Operations</strong></td>
<td style="width: 33%;">{transportcourier_operations:87}</td>
<td style="width: 33%;">{transportcourier_operations-a:122}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Trucking Terminals</strong></td>
<td style="width: 33%;">{trucking_terminals:88}</td>
<td style="width: 33%;">{trucking_terminals-a:123}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Waterfront/Piers/Marinas</strong></td>
<td style="width: 33%;">{waterfrontpiersmarinas:89}</td>
<td style="width: 33%;">{waterfrontpiersmarinas-a:124}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Other**</strong></td>
<td style="width: 33%;">{other-u:210}</td>
<td style="width: 33%;">{other-a:125}</td>
</tr>
</tbody>
</table><br /><br />
<table style="width: 100%;" cellpadding="5" border="1">
<tbody>
<tr>
<td style="width: 33%;"><strong>Private Investigations</strong></td>
<td style="width: 33%;"><strong>Unarmed Payroll</strong></td>
<td style="width: 33%;"><strong>Armed Payroll</strong></td>
</tr>
<tr>
<td style="width: 33%;"><strong>Executive Protection/Bodyguard Service**</strong></td>
<td style="width: 33%;">{bodyguard_service-u:126}</td>
<td style="width: 33%;">{bodyguard_service-a:132}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Insurance, Legal, Credit, Pre-Employment</strong></td>
<td style="width: 33%;">{insurance_legal:127}</td>
<td style="width: 33%;">{insurance_legal-a:133}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Lie Detection, Polygraph</strong></td>
<td style="width: 33%;">{lie_detection_polygraph:128}</td>
<td style="width: 33%;">{lie_detection_polygraph-a:134}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Process Server</strong></td>
<td style="width: 33%;">{process_server:129}</td>
<td style="width: 33%;">{process_server-a:135}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Security Consultant**</strong></td>
<td style="width: 33%;">{security_consultant:130}</td>
<td style="width: 33%;">{security_consultant-a:136}</td>
</tr>
<tr>
<td style="width: 33%;"><strong>Total</strong></td>
<td style="width: 33%;">{total-u:131}</td>
<td style="width: 33%;">{total-a:137}</td>
</tr>
</tbody>
</table>
<table style="width: 100%;" cellpadding="5">
<tbody>
<tr>

<td style="width: 100%;" colspan="3"><strong>**Please refer to Section IV for a further explanation of operations</strong></td>
</tr>
<tr>
<td style="width: 33%;"><strong>Average Hourly Wage:</strong></td>
<td style="width: 33%;">{hourly_wage_full_time:138} <strong>Full Time</strong></td>
<td style="width: 33%;">{hourly_wage_part_time:139} <strong>Part Time</strong></td>
</tr>
<tr>
<td style="width: 33%;"><strong>Annual Corporate Revenue:</strong></td>
<td style="width: 33%;">{revenue_full_time:140} <strong>Full Time</strong></td>
</tr>
<tr>
<td style="width: 33%;"><strong>Alarm Operations:</strong></td>
<td style="width: 33%;">{alarm_operations_revenue:141} <strong>Estimated Revenue</strong></td>
</tr>
</tbody>
</table>
<table style="width: 100%;" cellpadding="5">
<tbody>
<tr>
<td style="text-align: center; width: 100%;background: #4a67d8;padding:10px;">
<h3>Section IV - Description of Operations</h3>
</td>
</tr>
<tr>
<td style="width: 100%;"><strong>**Please provide complete details of the following operations, if applicable.</strong></td>
</tr>
<tr>
<td style="width: 100%;"><strong>Airport Work- Please describe all operations/duties performed:</strong><br />{airport_work:191}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Apartment Work- Please describe duties. If any government-owned, please provide list of addresses:</strong><br />{apartment_work:192}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Criminal Detention Centers- Please describe all operations/duties performed:</strong><br />{criminal_detention:194}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Retail Work- Please describe types of stores, duties, and hours that guard(s) are on duty:</strong><br />{retail_work:193}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Special Events- Please describe events, locations and duties:</strong><br />{special:195}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Bodyguard Work- Please describe duties. Any athletes, celebrities or entertainers? </strong> {any_athletes:148}{any_athletes:197}<br />{bodyguard_work:196}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Security Consulting- Please describe consulting clients and scope of services provided</strong><br />{security_consulting:198}</td>
</tr>
<tr>
<td style="width: 100%;"><strong>Other- Please describe all operations/duties performed:</strong><br />{other_operations:199}</td>
</tr>
</tbody>
</table>
<!-- Basic Page Break -->
<pagebreak/>
<table style="width: 100%;" cellpadding="5">
<tbody>
<tr>
<td style="text-align: center; width: 100%;background: #4a67d8;padding:10px;">
<h3>Section V - Current Insurance Information</h3>
</td>
</tr>
</tbody>
</table>
<table style="width: 100%;" cellpadding="5">
<tbody>
<tr>
<td style="width: 100%;" colspan="2"><strong>Current Carrier:</strong>      {current_carrier:151}</td>
</tr>
<tr>
<td style="width: 50%;"><strong>Inception Date: </strong>      {inception_date:152}</td>
<td style="width: 50%;"><strong>Expiration Date: </strong>      {expiration_date:154}</td>
</tr>
<tr>
<td style="width: 50%;"><strong>Premium: </strong>      {premium:153}</td>
<td style="width: 50%;"><strong>Deductible: </strong>      {deductible:155}</td>
</tr>
</tbody>
</table>
<table cellpadding="5">
<tbody>
<tr>
<td><strong>Limit of Liability: </strong></td>
</tr>
<tr>
<td><strong>Occurrence Form? </strong>      {occurrence_form:157}</td>
</tr>
<tr>
<td><strong>Has any company cancelled or declined to renew liability insurance? </strong>      {company_renew_insurance:158}</td>
</tr>
<tr>
<td><strong>If “yes”, please explain below.</strong><br />{please_explain_below-c:159}</td>
</tr>
<tr>
<td><strong>Do you require staff to report all unusual incidents to management? </strong>      {do_you_require_staff:160}</td>
</tr>
<tr>
<td><strong>Have there been any claims or lawsuits in the past 5 years? </strong>      {claims_or_lawsuits:161}</td>
</tr>
<tr>
<td><strong>If “yes”, please explain below.</strong><br />{please_explain_below-5:162}</td>
</tr>
<tr>
<td>
<h4>***PLEASE ATTACH FIVE YEARS OF COMPANY LOSS RUNS***</h4> <img src={file207:187}>
</td>
</tr>
<tr>
<td><strong>Do you have any knowledge of any incidents which may give rise to a future claim? </strong>      {knowledge_of_any_incidents:164}</td>
</tr>
<tr>
<td><strong>If “yes”, please explain below.</strong><br />{please_explain_below-k:165}</td>
</tr>
<tr>
<td><strong>NOTICE TO APPLICANTS: This application must be completed in full as the quote will be based solely on the information provided. Any persons who knowingly and with the intent to defraud any insurance company or other person, files an application for insurance containing any false information, or conceals for the purpose of misleading information concerning any fact material thereto, commits a fraudulent act, which is a crime. Be aware of the laws in the states where you operate with regard to the use of firearms and weapons. By signing below, you are verifying that you 1) are aware of, understand and comply with the laws of the states in which you operate and 2) are aware that any claim you submit where an illegal device was used by you, your employee, or a subcontractor doing work for you may be denied.</strong></td>
</tr>
<tr>
<td><strong>Applicant Name: </strong>      {applicant_name:208.3} {applicant_name:208.6}</td>
</tr>
<tr>
<td><strong>Applicant Title: </strong>      {applicant_title:167}</td>
</tr>
<tr>
<td><strong>Date: </strong>      {date214:168}</td>
</tr>
<tr>
<td><strong>Signature: </strong>      <img src={signature:190}></td>
</tr>
</tbody>

</table>