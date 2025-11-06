<?php

   /**
 * Template Name: Private Investigator Quote
 * Version: 1.1
 * Description: Private Investigator Quote
 * Author: Mike
 * Author URI: https://www.dfainsure.com
 * Group: DFA Insurance
 * License: GPLv2
 * Required PDF Version: 4.0
 * Tags: private investigator, form, cyberspyder, insurance, quote
 */

/** 2025-08-27 v1.0 created */
/** 2025-11-05 v1.1 Updated Insured's Name and DBA to separate fields (128, 126) */

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

<table width="100%" cellpadding="5">
<tbody>
<tr>
<td style="width: 187px;"><img src="https://forms.dfainsure.com/wp-content/uploads/2025/08/CleanShot-2025-08-25-at-15.20.25@2x.png" /></td>
<td style="text-align: right; width: 443px;">
<p>PO Box 1868<br />Rockwall, Texas 75087<br />P:(214)646-3347<br />F:(214)943-6531</p>
</td>
</tr>
</tbody>
</table>
<table width="100%" cellpadding="5">
<tbody>
<tr>
<td style="text-align: center;">
<h2>Private Investigator</h2>
</td>
</tr>
<tr>
<td style="text-align: center; width: 100%;background: #4a67d8;padding:10px;">
<h2>Section I - General Information</h2>
</td>
</tr>
</tbody>
</table>
<table width="100%" cellpadding="5">
<tbody>
<tr>
<td colspan="4"><strong>Insured's Name:</strong>       {:128}</td>
</tr>
<tr>
<td colspan="4"><strong>DBA:</strong>       {:126}</td>
</tr>
<tr>
<td nowrap="nowrap"><strong>Mailing Address:</strong>  {Address (Street Address):2.1}</td>
<td><strong>City:</strong> {Address (City):2.3}</td>
<td><strong>State:</strong> {Address (State / Province / Region):2.4}</td>
<td><strong>Zip:</strong> {Address (ZIP / Postal Code):2.5}</td>
</tr>
<tr>
<td><strong>Physical Address:</strong> {Address (Street Address):3.1}</td>
<td><strong>City:</strong>  {Address (City):3.3}</td>
<td><strong>State:</strong> {Address (State / Province / Region):3.4}</td>
<td><strong>Zip:</strong> {Address (ZIP / Postal Code):3.5}</td>
</tr>
<tr>
<td colspan="2"><strong>Contact Name:</strong>    {Name (First):129.3} {Name (Last):129.6}</td>
<td colspan="2"><strong>Title:</strong>    {title:5}</td>
</tr>
<tr>
<td colspan="2"><strong>Phone:</strong>    {phone:6}</td>
<td colspan="2"><strong>Cell:</strong>    {cell:7}</td>
</tr>
<tr>
<td colspan="4"><strong>Email Address:</strong>       {:131}</td>
</tr>
<tr>
<td><strong>Date Company Established:</strong>       {date_company_established:13}</td>
<td><strong>Business Type:</strong> {check_one:9}</td>
</tr>
</tbody>
</table>
<table width="100%" cellpadding="5">
<tbody>
<tr>
<td colspan="4"><strong>Effective Date Desired:</strong>    {effective_date-1:8}</td>
</tr>
<tr>
<td colspan="4">
<strong>Limit of Liability Desired</strong>
</td>
</tr>
<tr>
<td><strong>Occurrence:</strong>       {occurence:10}</td>
<td><strong>Aggregate:</strong>       {aggregate:11}</td>
</tr>
</tbody>
</table>
<table width="100%" cellpadding="5">
<tbody>
<tr>
<td colspan="4"><strong>What background do the principals of this organization have in the Investigative Industry?</strong><br />{what_background:14}</td>
</tr>
<tr>
<td colspan="4"><strong>Federal ID Number:</strong> {federal_id_number:15}  <strong>License Number:</strong>       {license_number:16}</td>
</tr>
<tr>
<td colspan="4">****Your liability insurance defines Independent Contractors as workers who carry their own license and their own liability insurance. All other employees who are 1099 or W2 are considered "on the payroll" and their salaries should be included on the next page.</td>
</tr>
<tr>
<td colspan="4"><strong>Does applicant subcontract work to others?</strong>        {does_applicant_subcontract:17}</td>
</tr>
<tr>
<td colspan="4"><strong>Do sub-contractors maintain their own insurance?</strong>        {do_subcontractors:18}</td>
</tr>
<tr>
<td colspan="4"><strong>Are Certificates of Insurance required from subcontractors?</strong>        {are_certificates:19}</td>
</tr>
<tr>
<td colspan="4"><strong>Do you require subcontractors to name you as an additional insured on their policies?</strong><br /> {do_you_require:20}</td>
</tr>
<tr>
<td colspan="4"><strong>Annual Sub-Contractor Cost:</strong>        {subcontractor_cost:21}</td>
</tr>
<tr>
<td colspan="4"><strong>Does your firm provide any type of security guard or alarm operations?</strong>          {does_your_firm:22}</td>
</tr>
<tr>
<td colspan="4"><strong>If "Yes", please explain.</strong> <br />{if_yes_please_explain:23}</td>
</tr>
<tr>
<td colspan="4"><strong>Please list your top 4 clients, the type of business they are, and the services provided</strong></td>
</tr>
<tr>
<td style="width: 25%;"><strong>Client #1</strong></td>
<td style="width: 25%;"><strong>Type of Business</strong></td>
<td style="width: 50%;"><strong>Services Provided</strong></td>
</tr>
<tr>
<td>{:132}</td>
<td>{:135}</td>
<td>{:136}</td>
</tr>
<tr>
<td><strong>Client #2</strong></td>
<td><strong>Type of Business</strong></td>
<td><strong>Services Provided</strong></td>
</tr>
<tr>
<td>{:137}</td>
<td>{:138}</td>
<td>{:139}</td>
</tr>
<tr>
<td><strong>Client #3</strong></td>
<td><strong>Type of Business</strong></td>
<td><strong>Services Provided</strong></td>
</tr>
<tr>
<td>{:140}</td>
<td>{:141}</td>
<td>{:142}</td>
</tr>
<tr>
<td><strong>Client #4</strong></td>
<td><strong>Type of Business</strong></td>
<td><strong>Services Provided</strong></td>
</tr>
<tr>
<td>{:143}</td>
<td>{:144}</td>
<td>{:145}</td>
</tr>
</tbody>
</table>
<table width="100%" cellpadding="5">
<tbody>
<tr>
<td style="text-align: center; width: 100%;background: #4a67d8;padding:10px;">
<h2>Section II - Operations</h2>
</td>
</tr>
</tbody>
</table>
<table width="100%" cellpadding="5">
<tbody>
<tr>
<td colspan="2"><strong>Total number of Owner(s):</strong>         {number_of_owners:25}</td>
</tr>
<tr>
<td colspan="2"><strong>Number of Owners performing investigation(s):</strong>         {owners_performing_investigations:26}</td>
</tr>
<tr>
<td colspan="2"><strong>Number of owners that work 250 hours or less per year:</strong>         {owners_work_250h:28}</td>
</tr>
<tr>
<td colspan="2"><strong>Number of owners that work 251 to 450 hours per year:</strong>         {owners_work_251-450h:29}</td>
</tr>
<tr>
<td colspan="2"><strong>Number of owners that work 451 hours or more per year:</strong>         {owners_work_451h:30}</td>
</tr>
<tr>
<td colspan="2"><strong>Number of employees performing or involved with investigations:</strong>         {employees_with_investigations:31}</td>
</tr>
<tr>
<td colspan="2"><strong>Number of investigation employees that work 250 hours or less per year:</strong>        {employees_work_250h:32}</td>
</tr>
<tr>
<td colspan="2"><strong>Number of investigation employees that work 251 to 450 hours per year:</strong>         {employees_work_251-450h:33}</td>
</tr>
<tr>
<td colspan="2"><strong>Number of investigation employees that work 451 hours or more per year:</strong>         {employees_work_451h:123}</td>
</tr>
<tr>
<td colspan="2"><strong>Annual Corporate Revenue:</strong>         {annual_corporate_revenue:35}</td>
</tr>
<tr>
<td colspan="2"><strong>Total Employee Payroll (not incl. owners or partners):</strong>         {total_employee_payroll:36}</td>
</tr>
<tr>
<td colspan="2"><strong>Employee training consists of:</strong>         {employee_training_consists_of:113}</td>
</tr>
<tr>
<td colspan="2"><strong>Pre-Employment screening procedures for employees (check all that apply):</strong>         {preemployment_screening:114}</td>
</tr>
<tr>
<td colspan="2"> </td>
</tr>
<tr>
<td colspan="4" style="text-align: center; width: 100%;background: #4a67d8;padding:10px;">
<h2>Section II - Operations (Continued)</h2>
</td>
</tr>
<tr>
<td colspan="4"><strong>*Please indicate % of operations (must be 100%)</strong></td>
</tr>
<tr>
<td colspan="4"><strong>Private Investigation</strong></td>
</tr>
<tr>
<td>{accident_investigations:39} % <strong>Accident Investigations/Reconstruction**</strong></td>
<td>{insurance_investigations:51} % <strong>Insurance Investigations</strong></td>
</tr>
<tr>
<td>{asset_searches:40} % <strong>Asset Searches</strong></td>
<td>{legal_investigations:52} % <strong>Legal Investigations</strong></td>
</tr>
<tr>
<td>{background_investigations:41} % <strong>Background Investigations</strong></td>
<td>{missing_persons_heirs:53} % <strong>Missing Persons / Heirs</strong></td>
</tr>
<tr>
<td>{bank_accounting_fraud:42} % <strong>Bank & Accounting Fraud</strong></td>
<td>{process_serving:54} % <strong>Process Serving</strong></td>
</tr>
<tr>
<td>{child_recovery:43} % <strong>Child Recovery/Custody</strong></td>
<td>{record_services:55} % <strong>Record Services</strong></td>
</tr>
<tr>
<td>{computer_crime:44} % <strong>Computer Crime</strong></td>
<td>{repossessions:56} % <strong>Repossessions</strong></td>
</tr>
<tr>
<td>{creditpreemployment:45} % <strong>Credit/Pre-Employment</strong></td>
<td>{shopping_services:57} % <strong>Shopping Services**</strong></td>
</tr>
<tr>
<td>{domestic:46} % <strong>Domestic (Matrimonial/Divorce)</strong></td>
<td>{skip_tracing_collections:58} % <strong>Skip Tracing / Collections</strong></td>
</tr>
<tr>
<td>{environmental:47} % <strong>Environmental</strong></td>
<td>{surveillance_electronic:59} % <strong>Surveillance / Electronic</strong></td>
</tr>
<tr>
<td>{executive_protection:48} % <strong>Executive Protection**</strong></td>
<td>{wc_fraud_investigations:60} % <strong>WC / Fraud Investigations</strong></td>
</tr>
<tr>
<td>{expert_witness:49} % <strong>Expert Witness</strong></td>
<td>{white_collar_crimes:61} % <strong>White Collar Crimes</strong></td>
</tr>
<tr>
<td>{fire_arson:50} % <strong>Fire / Arson</strong></td>
<td>{other-pi:62} % <strong>Other**</strong></td>
</tr>
<tr>
<td colspan="4"><strong>Security Consulting**</strong></td>
</tr>
<tr>
<td>{construction_design:63} % <strong>Construction Design</strong></td>
<td>{seminars_lectures:67} % <strong>Seminars / Lectures</strong></td>
</tr>
<tr>
<td>{criminal:64} % <strong>Criminal</strong></td>
<td>{terrorism:68} % <strong>Terrorism</strong></td>
</tr>
<tr>
<td>{data_computer_security:65} % <strong>Data / Computer Security</strong></td>
<td>{threat_assessments:69} % <strong>Threat Assessments</strong></td>
</tr>
<tr>
<td>{kidnap_terrorist:66} % <strong>Kidnap / Terrorist</strong></td>
<td>{other-sc:70} % <strong>Other</strong></td>
</tr>
<tr>
<td colspan="4"><strong>Lie Detection</strong></td>
</tr>
<tr>
<td>{paper_pen_pencil:71} % <strong>Paper / Pen & Pencil</strong></td>
<td>{psychological_stress_evaluator:73} % <strong>Psychological Stress Evaluator</strong></td>
</tr>
<tr>
<td>{polygraph:72} % <strong>Polygraph</strong></td>
<td>{other-ld:74} % <strong>Other</strong></td>
</tr>
<tr>
<td colspan="4"><strong>Training</strong></td>
</tr>
<tr>
<td>{firearms_training:75}# <strong>Firearms Training-Classroom (students/yr)</strong></td>
<td>{securityclassroom:76}# <strong>Security-Classroom (students/yr)</strong></td>
</tr>
<tr>
<td>{other_students:78}# <strong>Other** (students/yr)</strong></td>
<td>{firing_range:77}# <strong>Firearms Training-Firing Range (students/yr)</strong></td>
</tr>
<tr>
<td colspan="4">**Please refer to Section III for a further explanation of operations</td>
</tr>
</table>
<table width="100%" cellpadding="5">
<tbody>
<tr>
<td colspan="4" style="text-align: center; width: 100%;background: #4a67d8;padding:10px;">
<h2>Section III - Description of Operations</h2>
</td>
</tr>
<tr>
<td colspan="4"><strong>Accident Investigations/Reconstruction</strong>     - Please describe all operations below:</td>
</tr>
<tr>
<td colspan="4"><strong>Any fault assessment?</strong>        {any_fault_assessment:80}</td>
</tr>
<tr>
<td colspan="4">{accident_investigations_operations:79}</td>
</tr>
<tr>
<td colspan="4"><strong>Executive Protection</strong> - Please describe all duties performed below:</td>
</tr>
<tr>
<td colspan="4"><strong>Any athletes, celebrities, or entertainers?</strong>        {any_athletes:82}</td>
</tr>
<tr>
<td colspan="4">{executive_protection_duties:81}</td>
</tr>
<tr>
<td colspan="4"><strong>Expert Witness</strong> - Do you provide court testimony as an expert for cases that you are NOT investigating?         {expert_witness_do_you:83}</td>
</tr>
<tr>
<td colspan="4"><strong>If "Yes",</strong> please describe all operations/duties performed & <strong>provide resume</strong> <img src="{provide_resume:85}"></td>
</tr>
<tr>
<td colspan="4"><strong>Fire/Arson</strong> - Please describe all operations/duties performed below:</td>
</tr>
<tr>
<td colspan="4"><strong>Any cause of origin?</strong>    {any_cause_of_origin:87}</td>
</tr>
<tr>
<td colspan="4">{firearson_duties:86}</td>
</tr>
<tr>
<td colspan="4"><strong>Shopping Services</strong> - Please describe events, locations and duties:</td>
</tr>
<tr>
<td colspan="4">{shopping_services_duties:88}</td>
</tr>
<tr>
<td colspan="4"><strong>Security Consulting</strong> - Please describe clients, scope of services performed & provide a sample contract: <img src="{sample_contract:90}"></td>
</tr>
<tr>
<td colspan="4">{security_consulting_clients:89}</td>
</tr>
<tr>
<td colspan="4"><strong>Other</strong> - Please describe all operations/duties performed:</td>
</tr>
<tr>
<td colspan="4">{other_duties:91}</td>
</tr>
</tbody>
</table>
<table width="100%" cellpadding="5">
<tbody>
<tr>
<td colspan="4" style="text-align: center; width: 100%;background: #4a67d8;padding:10px;">
<h2>Section IV - Current Insurance Information</h2>
</td>
</tr>
</tbody>
</table>
<table width="100%" cellpadding="5">
<tbody>
<tr>
<td colspan="2"><strong>Current Carrier:</strong>   {current_carrier:92}</td>
</tr>
<tr>
<td style="width: 339px;"><strong>Inception date:</strong>    {inception_date:93}</td>
<td style="width: 504px;"><strong>Expiration date:</strong>    {expiration_date:94}</td>
</tr>
<tr>
<td colspan="2"><strong>Premium:</strong>        {premium:95}</td>
</tr>
<tr>
<td colspan="2"><strong>Deductible:</strong>        {deductible:96}</td>
</tr>
<tr>
<td colspan="2"><strong>Limit of Liability:</strong>        {limit_of_liability:97}</td>
</tr>
<tr>
<td colspan="2"><strong>Occurrence Form?</strong>        {occurrence_form:98}</td>
</tr>
<tr>
<td colspan="2"><strong>Have there been any claims or lawsuits in the past 5 years?</strong>        {claims_or_lawsuits:99}</td>
</tr>
<tr>
<td colspan="2"><strong>If "yes", please attach statement of losses.</strong>        <img src="{statement_of_losses:120}"></td>
</tr>
<tr>
<td colspan="2"><strong>Do you anticipate any future claims/losses?</strong>        {future_claimslosses:101}</td>
</tr>
<tr>
<td colspan="2"> </td>
</tr>
<tr>
<td colspan="2"><strong>Applicant Name:</strong>    {Name (First):146.3} {Name (Last):146.6}</td>
</tr>
<tr>
<td colspan="2"><strong>Applicant Title</strong>    {applicant_title:103}</td>
</tr>
<tr>
<td colspan="2"><strong>Date</strong>    {date:104}</td>
</tr>
<tr>
<td colspan="2"><strong>Signature</strong>    <img src="{signature:122}"></td>
</tr>
</tbody>
</table>