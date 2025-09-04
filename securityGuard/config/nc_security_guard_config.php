<?php
/**
 * Security Guard Insurance Application Template Configuration
 * Generated: 2025-08-25
 * Based on DFA Insurance Security Guard Application Form
 * Matches nc-security-guard-template.php field mapping
 */

return array(
    'form' => array(
        'title' => 'Security Guard Insurance Application',
        'description' => 'Complete insurance application for security guard services',
        'labelPlacement' => 'top_label',
        'descriptionPlacement' => 'below',
        'button' => array(
            'type' => 'text',
            'text' => 'Submit Application',
            'imageUrl' => ''
        ),
        'fields' => array(
            // Section I - General Information Header
            array(
                'type' => 'section',
                'id' => 1,
                'label' => 'Section I - General Information',
                'adminLabel' => 'section_1_header',
                'isRequired' => false,
                'displayOnly' => true
            ),
            
            // Field 1 - Insured's Name
            array(
                'type' => 'text',
                'id' => 2,
                'label' => 'Insured\'s Name',
                'adminLabel' => 'insureds_name',
                'isRequired' => true,
                'size' => 'large'
            ),
            
            // Field 2 - Mailing Address
            array(
                'type' => 'address',
                'id' => 3,
                'label' => 'Mailing Address',
                'adminLabel' => 'mailing_address',
                'isRequired' => true,
                'inputs' => array(
                    array('id' => 3.1, 'label' => 'Street Address'),
                    array('id' => 3.2, 'label' => 'Address Line 2'),
                    array('id' => 3.3, 'label' => 'City'),
                    array('id' => 3.4, 'label' => 'State / Province'),
                    array('id' => 3.5, 'label' => 'ZIP / Postal Code'),
                    array('id' => 3.6, 'label' => 'Country')
                )
            ),
            
            // Field 3 - Physical Address
            array(
                'type' => 'address',
                'id' => 4,
                'label' => 'Physical Address',
                'adminLabel' => 'physical_address',
                'isRequired' => true,
                'inputs' => array(
                    array('id' => 4.1, 'label' => 'Street Address'),
                    array('id' => 4.2, 'label' => 'Address Line 2'),
                    array('id' => 4.3, 'label' => 'City'),
                    array('id' => 4.4, 'label' => 'State / Province'),
                    array('id' => 4.5, 'label' => 'ZIP / Postal Code'),
                    array('id' => 4.6, 'label' => 'Country')
                )
            ),
            
            // Field 5 - Title
            array(
                'type' => 'text',
                'id' => 5,
                'label' => 'Title',
                'adminLabel' => 'title',
                'isRequired' => false,
                'size' => 'medium'
            ),
            
            // Field 6 - Phone
            array(
                'type' => 'phone',
                'id' => 6,
                'label' => 'Phone',
                'adminLabel' => 'phone',
                'isRequired' => true,
                'phoneFormat' => 'standard'
            ),
            
            // Field 7 - Cell
            array(
                'type' => 'phone',
                'id' => 7,
                'label' => 'Cell',
                'adminLabel' => 'cell',
                'isRequired' => false,
                'phoneFormat' => 'standard'
            ),
            
            // Field 8 - Fax
            array(
                'type' => 'phone',
                'id' => 8,
                'label' => 'Fax',
                'adminLabel' => 'fax',
                'isRequired' => false,
                'phoneFormat' => 'standard'
            ),
            
            // Field 9 - Email Address
            array(
                'type' => 'email',
                'id' => 9,
                'label' => 'Email Address',
                'adminLabel' => 'email_address',
                'isRequired' => true,
                'size' => 'medium'
            ),
            
            // Field 10 - Effective Date Desired
            array(
                'type' => 'date',
                'id' => 10,
                'label' => 'Effective Date Desired',
                'adminLabel' => 'effective_date_desired',
                'isRequired' => true,
                'dateFormat' => 'mdy'
            ),
            
            // Field 11 - Business Type
            array(
                'type' => 'select',
                'id' => 11,
                'label' => 'Business Type',
                'adminLabel' => 'select_one',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Corporation', 'value' => 'corporation'),
                    array('text' => 'LLC', 'value' => 'llc'),
                    array('text' => 'Partnership', 'value' => 'partnership'),
                    array('text' => 'Sole Proprietorship', 'value' => 'sole_proprietorship'),
                    array('text' => 'Other', 'value' => 'other')
                )
            ),
            
            // Field 12 - FEIN
            array(
                'type' => 'text',
                'id' => 12,
                'label' => 'FEIN',
                'adminLabel' => 'fein',
                'isRequired' => true,
                'size' => 'medium',
                'placeholder' => 'XX-XXXXXXX'
            ),
            
            // Field 13 - Security Business (Years)
            array(
                'type' => 'text',
                'id' => 13,
                'label' => 'How long in the Security business?',
                'adminLabel' => 'security_business',
                'isRequired' => true,
                'size' => 'medium'
            ),
            
            // Field 14 - License Number
            array(
                'type' => 'text',
                'id' => 14,
                'label' => 'License Number',
                'adminLabel' => 'license_number',
                'isRequired' => true,
                'size' => 'medium'
            ),
            
            // Field 15 - Under This Name
            array(
                'type' => 'text',
                'id' => 15,
                'label' => 'How long under this name?',
                'adminLabel' => 'under_this_name',
                'isRequired' => true,
                'size' => 'medium'
            ),
            
            // Field 16 - Other Name
            array(
                'type' => 'radio',
                'id' => 16,
                'label' => 'Has the applicant operated under any other name?',
                'adminLabel' => 'other_name',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            // Field 17 - Please Identify
            array(
                'type' => 'textarea',
                'id' => 165,
                'label' => 'If "yes", please explain below.',
                'adminLabel' => 'please_explain_below-k',
                'isRequired' => false,
                'size' => 'medium',
                'conditionalLogic' => array(
                    'actionType' => 'show',
                    'logicType' => 'all',
                    'rules' => array(
                        array(
                            'fieldId' => 164,
                            'operator' => 'is',
                            'value' => 'yes'
                        )
                    )
                )
            ),
            
            // Applicant Signature Fields (166-168, 190)
            array(
                'type' => 'text',
                'id' => 166,
                'label' => 'Applicant Name',
                'adminLabel' => 'applicant_name',
                'isRequired' => true,
                'size' => 'medium'
            ),
            
            array(
                'type' => 'text',
                'id' => 167,
                'label' => 'Applicant Title',
                'adminLabel' => 'applicant_title',
                'isRequired' => true,
                'size' => 'medium'
            ),
            
            array(
                'type' => 'date',
                'id' => 168,
                'label' => 'Date',
                'adminLabel' => 'date214',
                'isRequired' => true,
                'dateFormat' => 'mdy'
            ),
            
            // Missing fields from template
            array(
                'type' => 'number',
                'id' => 172,
                'label' => 'If yes, how many include hold harmless clauses?',
                'adminLabel' => 'harmless_clauses',
                'isRequired' => false,
                'numberFormat' => 'decimal_dot',
                'conditionalLogic' => array(
                    'actionType' => 'show',
                    'logicType' => 'all',
                    'rules' => array(
                        array(
                            'fieldId' => 27,
                            'operator' => 'is',
                            'value' => 'yes'
                        )
                    )
                )
            ),
            
            // Employee Training Checkbox
            array(
                'type' => 'checkbox',
                'id' => 174,
                'label' => 'Employee training consists of:',
                'adminLabel' => 'employee_training_consists_of',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Firearms', 'value' => 'firearms'),
                    array('text' => 'On the Job', 'value' => 'on_the_job'),
                    array('text' => 'Report Writing', 'value' => 'report_writing'),
                    array('text' => 'Written Manual', 'value' => 'written_manual'),
                    array('text' => 'Other', 'value' => 'other')
                )
            ),
            
            // Pre-Employment Screening Checkbox
            array(
                'type' => 'checkbox',
                'id' => 175,
                'label' => 'Pre-Employment screening procedures for employees:',
                'adminLabel' => 'preemployment_screening_procedures',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Driving Record (MVR)', 'value' => 'mvr'),
                    array('text' => 'Drug Screen', 'value' => 'drug_screen'),
                    array('text' => 'Fingerprint Check', 'value' => 'fingerprint'),
                    array('text' => 'Personal References', 'value' => 'references'),
                    array('text' => 'Other', 'value' => 'other')
                )
            ),
            
            // File Upload for Loss Runs
            array(
                'type' => 'fileupload',
                'id' => 187,
                'label' => 'PLEASE ATTACH FIVE YEARS OF COMPANY LOSS RUNS',
                'adminLabel' => 'file207',
                'isRequired' => false,
                'allowedExtensions' => 'jpg,jpeg,png,gif,pdf,doc,docx,ppt,pptx,odt,avi,mov,mp4,mp3,csv,xls,xlsx'
            ),
            
            // Signature Field
            array(
                'type' => 'signature',
                'id' => 190,
                'label' => 'Signature',
                'adminLabel' => 'signature',
                'isRequired' => true,
                'description' => 'Please sign above'
            ),
            
            // DBA Field
            array(
                'type' => 'text',
                'id' => 202,
                'label' => 'DBA',
                'adminLabel' => 'dba',
                'isRequired' => false,
                'size' => 'large'
            ),
            
            // Contact Field
            array(
                'type' => 'name',
                'id' => 203,
                'label' => 'Contact',
                'adminLabel' => 'contact_name',
                'isRequired' => true,
                'inputs' => array(
                    array('id' => 203.3, 'label' => 'First'),
                    array('id' => 203.6, 'label' => 'Last')
                )
            )
        ),
        'version' => '2.8',
        'id' => 0,
        'useCurrentUserAsAuthor' => true,
        'postContentTemplateEnabled' => false,
        'postTitleTemplateEnabled' => false,
        'postTitleTemplate' => '',
        'postContentTemplate' => '',
        'lastPageButton' => null,
        'pagination' => array(
            'display' => 'percentage',
            'type' => 'percentage',
            'style' => 'blue',
            'color' => 'blue',
            'backgroundColor' => '#FFFFFF',
            'pages' => array(
                array(
                    'cssClass' => 'section-1-page'
                ),
                array(
                    'cssClass' => 'section-2-page'
                ),
                array(
                    'cssClass' => 'section-3-page'
                ),
                array(
                    'cssClass' => 'section-4-page'
                ),
                array(
                    'cssClass' => 'section-5-page'
                )
            )
        ),
        'firstPageCssClass' => 'first-page'
    ),
    'notifications' => array(
        array(
            'id' => '507f191e810c19729de860ea',
            'isActive' => true,
            'to' => '{admin_email}',
            'name' => 'Admin Notification',
            'event' => 'form_submission',
            'toType' => 'email',
            'subject' => 'New Security Guard Insurance Application - {Insured\'s Name:2}',
            'message' => 'A new security guard insurance application has been submitted.\n\nCompany: {Insured\'s Name:2}\nDBA: {DBA:202}\nContact: {Contact:203}\nEmail: {Email Address:9}\nPhone: {Phone:6}\n\nEffective Date Desired: {Effective Date Desired:10}\nLiability Limits: {Each Occurrence:22} / {Aggregate:23}\n\nAll submission details:\n{all_fields}'
        )
    ),
    'confirmations' => array(
        array(
            'id' => '507f191e810c19729de860eb',
            'name' => 'Default Confirmation',
            'isDefault' => true,
            'type' => 'message',
            'message' => 'Thank you for submitting your Security Guard Insurance Application. We have received your information and will review it shortly. You should expect to hear from us within 1-2 business days.\n\nIf you have any questions, please contact us at (214) 646-3347.',
            'url' => '',
            'pageId' => '',
            'queryString' => ''
        )
    )
);

                'id' => 17,
                'label' => 'If "yes", please identify:',
                'adminLabel' => 'please_identify',
                'isRequired' => false,
                'size' => 'medium',
                'conditionalLogic' => array(
                    'actionType' => 'show',
                    'logicType' => 'all',
                    'rules' => array(
                        array(
                            'fieldId' => 16,
                            'operator' => 'is',
                            'value' => 'yes'
                        )
                    )
                )
            ),
            
            // Field 18 - Security Service %
            array(
                'type' => 'number',
                'id' => 18,
                'label' => 'Security Service (%)',
                'adminLabel' => 'security_service',
                'isRequired' => true,
                'numberFormat' => 'decimal_dot',
                'rangeMin' => 0,
                'rangeMax' => 100
            ),
            
            // Field 19 - Investigations %
            array(
                'type' => 'number',
                'id' => 19,
                'label' => 'Investigations (%)',
                'adminLabel' => 'investigations',
                'isRequired' => true,
                'numberFormat' => 'decimal_dot',
                'rangeMin' => 0,
                'rangeMax' => 100
            ),
            
            // Field 20 - Consulting %
            array(
                'type' => 'number',
                'id' => 20,
                'label' => 'Consulting (%)',
                'adminLabel' => 'consulting',
                'isRequired' => true,
                'numberFormat' => 'decimal_dot',
                'rangeMin' => 0,
                'rangeMax' => 100
            ),
            
            // Field 21 - Alarm Service Monitoring %
            array(
                'type' => 'number',
                'id' => 21,
                'label' => 'Alarm Service Monitoring (%)',
                'adminLabel' => 'alarm_service_monitoring',
                'isRequired' => true,
                'numberFormat' => 'decimal_dot',
                'rangeMin' => 0,
                'rangeMax' => 100
            ),
            
            // Field 22 - Each Occurrence
            array(
                'type' => 'select',
                'id' => 22,
                'label' => 'Each Occurrence',
                'adminLabel' => 'each_occurrence',
                'isRequired' => true,
                'choices' => array(
                    array('text' => '$500,000', 'value' => '500000'),
                    array('text' => '$1,000,000', 'value' => '1000000'),
                    array('text' => '$2,000,000', 'value' => '2000000'),
                    array('text' => '$5,000,000', 'value' => '5000000')
                )
            ),
            
            // Field 23 - Aggregate
            array(
                'type' => 'select',
                'id' => 23,
                'label' => 'Aggregate',
                'adminLabel' => 'aggregate',
                'isRequired' => true,
                'choices' => array(
                    array('text' => '$1,000,000', 'value' => '1000000'),
                    array('text' => '$2,000,000', 'value' => '2000000'),
                    array('text' => '$5,000,000', 'value' => '5000000'),
                    array('text' => '$10,000,000', 'value' => '10000000')
                )
            ),
            
            // Field 24 - Duties Not Related to Security
            array(
                'type' => 'radio',
                'id' => 24,
                'label' => 'In regards to your clients, do you assume any duties not related to security?',
                'adminLabel' => 'duties_not_related_to_security',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            // Field 25 - Please Explain Below
            array(
                'type' => 'textarea',
                'id' => 25,
                'label' => 'If "yes", please explain below.',
                'adminLabel' => 'please_explain_below',
                'isRequired' => false,
                'size' => 'medium',
                'conditionalLogic' => array(
                    'actionType' => 'show',
                    'logicType' => 'all',
                    'rules' => array(
                        array(
                            'fieldId' => 24,
                            'operator' => 'is',
                            'value' => 'yes'
                        )
                    )
                )
            ),
            
            // Field 26 - Five Largest Clients
            array(
                'type' => 'textarea',
                'id' => 26,
                'label' => 'Please provide a list of your (5) five largest clients, along with a description of services:',
                'adminLabel' => '5_five_largest_clients',
                'isRequired' => true,
                'size' => 'large',
                'rows' => 5
            ),
            
            // Field 27 - Clients Under Contract
            array(
                'type' => 'radio',
                'id' => 27,
                'label' => 'Are the majority of your clients under contract?',
                'adminLabel' => 'clients_under_contract',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            // Field 28 - Workers Compensation
            array(
                'type' => 'radio',
                'id' => 29,
                'label' => 'Is workers\' compensation coverage currently in force?',
                'adminLabel' => 'workers_compensation',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            // Field 29 - Please Explain WC
            array(
                'type' => 'textarea',
                'id' => 30,
                'label' => 'If "no" please explain:',
                'adminLabel' => 'please_explain-wc',
                'isRequired' => false,
                'size' => 'medium',
                'conditionalLogic' => array(
                    'actionType' => 'show',
                    'logicType' => 'all',
                    'rules' => array(
                        array(
                            'fieldId' => 29,
                            'operator' => 'is',
                            'value' => 'no'
                        )
                    )
                )
            ),
            
            // Field 31 - Owners Partners Shareholders
            array(
                'type' => 'textarea',
                'id' => 31,
                'label' => 'Name of Owner(s), Partner(s) and Shareholder(s), their percentage of ownership and background in this industry:',
                'adminLabel' => 'owners_partners_shareholders',
                'isRequired' => true,
                'size' => 'large',
                'rows' => 3
            ),
            
            // Field 32 - Principals Perform Operations
            array(
                'type' => 'radio',
                'id' => 32,
                'label' => 'Will the principals perform guard/investigative operations?',
                'adminLabel' => 'principals_perform_operations',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            // Field 33 - Duties of Supervisors
            array(
                'type' => 'textarea',
                'id' => 33,
                'label' => 'Please describe duties of supervisors:',
                'adminLabel' => 'duties_of_supervisors',
                'isRequired' => true,
                'size' => 'medium',
                'rows' => 2
            ),
            
            // Field 34 - Officers Per Supervisor
            array(
                'type' => 'number',
                'id' => 34,
                'label' => 'Average number of officers per supervisor:',
                'adminLabel' => 'officers_per_supervisor',
                'isRequired' => true,
                'numberFormat' => 'decimal_dot'
            ),
            
            // Field 35 - Other Screening
            array(
                'type' => 'text',
                'id' => 37,
                'label' => 'Other Screening Procedures:',
                'adminLabel' => 'other-sc',
                'isRequired' => false,
                'size' => 'medium'
            ),
            
            // Field 36 - Unarmed Hours
            array(
                'type' => 'number',
                'id' => 38,
                'label' => 'Number of hours billed to client(s) annually - Unarmed:',
                'adminLabel' => 'unarmed-hr',
                'isRequired' => true,
                'numberFormat' => 'decimal_dot'
            ),
            
            // Field 37 - Armed Hours
            array(
                'type' => 'number',
                'id' => 39,
                'label' => 'Number of hours billed to client(s) annually - Armed:',
                'adminLabel' => 'armed-hr',
                'isRequired' => true,
                'numberFormat' => 'decimal_dot'
            ),
            
            // Field 38 - Full Time Officers
            array(
                'type' => 'number',
                'id' => 40,
                'label' => 'Number of officers - Full Time:',
                'adminLabel' => 'full_time',
                'isRequired' => true,
                'numberFormat' => 'decimal_dot'
            ),
            
            // Field 39 - Part Time Officers
            array(
                'type' => 'number',
                'id' => 41,
                'label' => 'Number of officers - Part Time:',
                'adminLabel' => 'part_time',
                'isRequired' => true,
                'numberFormat' => 'decimal_dot'
            ),
            
            // Field 40 - Unarmed Officers
            array(
                'type' => 'number',
                'id' => 42,
                'label' => 'Number of officers - Unarmed:',
                'adminLabel' => 'unarmed-o',
                'isRequired' => true,
                'numberFormat' => 'decimal_dot'
            ),
            
            // Field 41 - Armed Officers
            array(
                'type' => 'number',
                'id' => 43,
                'label' => 'Number of officers - Armed:',
                'adminLabel' => 'armed-o',
                'isRequired' => true,
                'numberFormat' => 'decimal_dot'
            ),
            
            // Field 42 - Golf Carts for Patrol
            array(
                'type' => 'radio',
                'id' => 44,
                'label' => 'Do you use any golf carts for patrol?',
                'adminLabel' => 'golf_carts_for_patrol',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            // Field 43 - Equipped with Lights
            array(
                'type' => 'radio',
                'id' => 45,
                'label' => 'If yes, are they equipped with lights?',
                'adminLabel' => 'equipped_with_lights',
                'isRequired' => false,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                ),
                'conditionalLogic' => array(
                    'actionType' => 'show',
                    'logicType' => 'all',
                    'rules' => array(
                        array(
                            'fieldId' => 44,
                            'operator' => 'is',
                            'value' => 'yes'
                        )
                    )
                )
            ),
            
            // Field 44 - Public Transported
            array(
                'type' => 'radio',
                'id' => 46,
                'label' => 'Will the public be transported?',
                'adminLabel' => 'will_the_public_be_transported',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            // Field 45 - Driving Records Checked
            array(
                'type' => 'radio',
                'id' => 47,
                'label' => 'Are driving records checked?',
                'adminLabel' => 'are_driving_records_checked',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            // Field 46 - Using Dogs
            array(
                'type' => 'radio',
                'id' => 48,
                'label' => 'Do you anticipate using dogs? *Must be leashed not to extend 6 ft.',
                'adminLabel' => 'using_dogs',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            // Field 47 - Dogs with Handlers
            array(
                'type' => 'number',
                'id' => 49,
                'label' => 'Number of dogs used with handlers:',
                'adminLabel' => 'dogs_with_handlers',
                'isRequired' => false,
                'numberFormat' => 'decimal_dot',
                'conditionalLogic' => array(
                    'actionType' => 'show',
                    'logicType' => 'all',
                    'rules' => array(
                        array(
                            'fieldId' => 48,
                            'operator' => 'is',
                            'value' => 'yes'
                        )
                    )
                )
            ),
            
            // Field 48 - Dogs without Handlers
            array(
                'type' => 'number',
                'id' => 50,
                'label' => 'Number of dogs without handlers:',
                'adminLabel' => 'dogs_without_handlers',
                'isRequired' => false,
                'numberFormat' => 'decimal_dot',
                'conditionalLogic' => array(
                    'actionType' => 'show',
                    'logicType' => 'all',
                    'rules' => array(
                        array(
                            'fieldId' => 48,
                            'operator' => 'is',
                            'value' => 'yes'
                        )
                    )
                )
            ),
            
            // Field 49 - Tasers
            array(
                'type' => 'radio',
                'id' => 51,
                'label' => 'Do any of your officers use tasers in their operations?',
                'adminLabel' => 'tasers',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            // Field 50 - Operations (Jewelry/Money)
            array(
                'type' => 'radio',
                'id' => 52,
                'label' => 'Any operations performing security services where jewelry, money, securities or furs are present?',
                'adminLabel' => 'operations',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            // Field 51 - Professional Associations
            array(
                'type' => 'textarea',
                'id' => 53,
                'label' => 'Of what professional associations are you a member?',
                'adminLabel' => 'professional_associations',
                'isRequired' => false,
                'size' => 'medium'
            ),
            
            // Field 52 - Independent Contractors
            array(
                'type' => 'radio',
                'id' => 54,
                'label' => 'Based on the above definition, do you have any independent contractors?',
                'adminLabel' => 'independent_contractors',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            // Field 53 - Total Salaries
            array(
                'type' => 'number',
                'id' => 55,
                'label' => 'If "yes", please give their total salaries:',
                'adminLabel' => 'total_salaries',
                'isRequired' => false,
                'numberFormat' => 'currency',
                'conditionalLogic' => array(
                    'actionType' => 'show',
                    'logicType' => 'all',
                    'rules' => array(
                        array(
                            'fieldId' => 54,
                            'operator' => 'is',
                            'value' => 'yes'
                        )
                    )
                )
            ),
            
            // Payroll Fields (54-130) - All the guard services payroll fields
            array(
                'type' => 'number',
                'id' => 56,
                'label' => 'Airports (non-public) - Unarmed Payroll',
                'adminLabel' => 'airports_nonpublic',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 57,
                'label' => 'Airports (public) - Unarmed Payroll',
                'adminLabel' => 'airports_public',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 58,
                'label' => 'Armored Car - Unarmed Payroll',
                'adminLabel' => 'armored_car',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 59,
                'label' => 'Banks - Unarmed Payroll',
                'adminLabel' => 'banks',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 60,
                'label' => 'Bounty Hunting/Bail Enforcement - Unarmed Payroll',
                'adminLabel' => 'bounty_bail',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 61,
                'label' => 'Car Dealerships - Unarmed Payroll',
                'adminLabel' => 'car_dealerships',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 62,
                'label' => 'Churches - Unarmed Payroll',
                'adminLabel' => 'churches',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 63,
                'label' => 'Construction or Demolition Sites - Unarmed Payroll',
                'adminLabel' => 'construction_or_demolition_sites',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 64,
                'label' => 'Convention/Trade Shows - Unarmed Payroll',
                'adminLabel' => 'conventiontrade_shows',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 65,
                'label' => 'Criminal Detention Centers - Unarmed Payroll',
                'adminLabel' => 'criminal_detention_centers',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 66,
                'label' => 'Executive Protection - Unarmed Payroll',
                'adminLabel' => 'executive_protection',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 67,
                'label' => 'Fast Food Establishments - Unarmed Payroll',
                'adminLabel' => 'fast_food_establishments',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 68,
                'label' => 'Federal Government Contracts - Unarmed Payroll',
                'adminLabel' => 'federal_government_contracts',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 69,
                'label' => 'Gated Communities/Retirement - Unarmed Payroll',
                'adminLabel' => 'gated_communitiesretirement',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 70,
                'label' => 'Government-Owned Housing - Unarmed Payroll',
                'adminLabel' => 'governmentowned_housing',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 71,
                'label' => 'Hotels/Motels - Unarmed Payroll',
                'adminLabel' => 'hotelsmotels',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 72,
                'label' => 'Industrial (Factories, Warehouses, etc.) - Unarmed Payroll',
                'adminLabel' => 'industrial_factories',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 73,
                'label' => 'Institutions (Hospitals, Clinics) - Unarmed Payroll',
                'adminLabel' => 'institutions_hospitals',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 74,
                'label' => 'Liquor Establishments (Bars, Taverns, Etc.) - Unarmed Payroll',
                'adminLabel' => 'liquor_establishments',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 75,
                'label' => 'Local & State Contracts - Unarmed Payroll',
                'adminLabel' => 'local_state_contracts',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 76,
                'label' => 'Middle/High Income Housing - Unarmed Payroll',
                'adminLabel' => 'middlehigh_income_housing',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 77,
                'label' => 'Museums/Galleries - Unarmed Payroll',
                'adminLabel' => 'museumsgalleries',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 78,
                'label' => 'Office Buildings - Unarmed Payroll',
                'adminLabel' => 'office_buildings',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 79,
                'label' => 'Patrol Cars - Unarmed Payroll',
                'adminLabel' => 'patrol_cars',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 80,
                'label' => 'Restaurants - Unarmed Payroll',
                'adminLabel' => 'restaurants',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 81,
                'label' => 'Retail Stores (Parking Lots, Outside Perimeter) - Unarmed Payroll',
                'adminLabel' => 'retail_stores_outside',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 82,
                'label' => 'Retail Stores (Inside, Shoplifting, Door Duty) - Unarmed Payroll',
                'adminLabel' => 'retail_stores_inside',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 83,
                'label' => 'Schools - Unarmed Payroll',
                'adminLabel' => 'schools',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 84,
                'label' => 'Special Events (Sports, Concerts, Etc) - Unarmed Payroll',
                'adminLabel' => 'special_events',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 85,
                'label' => 'Strike Duty - Unarmed Payroll',
                'adminLabel' => 'strike_duty',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 86,
                'label' => 'Traffic Control - Unarmed Payroll',
                'adminLabel' => 'traffic_control',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 87,
                'label' => 'Transport/Courier Operations - Unarmed Payroll',
                'adminLabel' => 'transportcourier_operations',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 88,
                'label' => 'Trucking Terminals - Unarmed Payroll',
                'adminLabel' => 'trucking_terminals',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 89,
                'label' => 'Waterfront/Piers/Marinas - Unarmed Payroll',
                'adminLabel' => 'waterfrontpiersmarinas',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 90,
                'label' => 'Other - Unarmed Payroll',
                'adminLabel' => 'other-u',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            // Armed Payroll Fields (91-125)
            array(
                'type' => 'number',
                'id' => 91,
                'label' => 'Airports (non-public) - Armed Payroll',
                'adminLabel' => 'airports_nonpublic-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 92,
                'label' => 'Airports (public) - Armed Payroll',
                'adminLabel' => 'airports_public-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 93,
                'label' => 'Armored Car - Armed Payroll',
                'adminLabel' => 'armored_car-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 94,
                'label' => 'Banks - Armed Payroll',
                'adminLabel' => 'banks-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 95,
                'label' => 'Bounty Hunting/Bail Enforcement - Armed Payroll',
                'adminLabel' => 'bounty_bail-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 96,
                'label' => 'Car Dealerships - Armed Payroll',
                'adminLabel' => 'car_dealerships-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 97,
                'label' => 'Churches - Armed Payroll',
                'adminLabel' => 'churches-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 98,
                'label' => 'Construction or Demolition Sites - Armed Payroll',
                'adminLabel' => 'construction_or_demolition_sites-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 99,
                'label' => 'Convention/Trade Shows - Armed Payroll',
                'adminLabel' => 'conventiontrade_shows-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 100,
                'label' => 'Criminal Detention Centers - Armed Payroll',
                'adminLabel' => 'criminal_detention_centers-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 101,
                'label' => 'Executive Protection - Armed Payroll',
                'adminLabel' => 'executive_protection-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 102,
                'label' => 'Fast Food Establishments - Armed Payroll',
                'adminLabel' => 'fast_food_establishments-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 103,
                'label' => 'Federal Government Contracts - Armed Payroll',
                'adminLabel' => 'federal_government_contracts-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 104,
                'label' => 'Gated Communities/Retirement - Armed Payroll',
                'adminLabel' => 'gated_communitiesretirement-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 105,
                'label' => 'Government-Owned Housing - Armed Payroll',
                'adminLabel' => 'governmentowned_housing-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 106,
                'label' => 'Hotels/Motels - Armed Payroll',
                'adminLabel' => 'hotelsmotels-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 107,
                'label' => 'Industrial (Factories, Warehouses, etc.) - Armed Payroll',
                'adminLabel' => 'industrial_factories-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 108,
                'label' => 'Institutions (Hospitals, Clinics) - Armed Payroll',
                'adminLabel' => 'institutions_hospitals-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 109,
                'label' => 'Liquor Establishments (Bars, Taverns, Etc.) - Armed Payroll',
                'adminLabel' => 'liquor_establishments-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 110,
                'label' => 'Local & State Contracts - Armed Payroll',
                'adminLabel' => 'local_state_contracts-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 111,
                'label' => 'Middle/High Income Housing - Armed Payroll',
                'adminLabel' => 'middlehigh_income_housing-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 112,
                'label' => 'Museums/Galleries - Armed Payroll',
                'adminLabel' => 'museumsgalleries-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 113,
                'label' => 'Office Buildings - Armed Payroll',
                'adminLabel' => 'office_buildings-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 114,
                'label' => 'Patrol Cars - Armed Payroll',
                'adminLabel' => 'patrol_cars-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 115,
                'label' => 'Restaurants - Armed Payroll',
                'adminLabel' => 'restaurants-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 116,
                'label' => 'Retail Stores (Parking Lots, Outside Perimeter) - Armed Payroll',
                'adminLabel' => 'retail_stores_outside-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 117,
                'label' => 'Retail Stores (Inside, Shoplifting, Door Duty) - Armed Payroll',
                'adminLabel' => 'retail_stores_inside-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 118,
                'label' => 'Schools - Armed Payroll',
                'adminLabel' => 'schools-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 119,
                'label' => 'Special Events (Sports, Concerts, Etc) - Armed Payroll',
                'adminLabel' => 'special_events-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 120,
                'label' => 'Strike Duty - Armed Payroll',
                'adminLabel' => 'strike_duty-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 121,
                'label' => 'Traffic Control - Armed Payroll',
                'adminLabel' => 'traffic_control-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 122,
                'label' => 'Transport/Courier Operations - Armed Payroll',
                'adminLabel' => 'transportcourier_operations-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 123,
                'label' => 'Trucking Terminals - Armed Payroll',
                'adminLabel' => 'trucking_terminals-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 124,
                'label' => 'Waterfront/Piers/Marinas - Armed Payroll',
                'adminLabel' => 'waterfrontpiersmarinas-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 125,
                'label' => 'Other - Armed Payroll',
                'adminLabel' => 'other-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            // Private Investigations Fields (126-137)
            array(
                'type' => 'number',
                'id' => 126,
                'label' => 'Executive Protection/Bodyguard Service - Unarmed Payroll',
                'adminLabel' => 'bodyguard_service-u',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 127,
                'label' => 'Insurance, Legal, Credit, Pre-Employment - Unarmed Payroll',
                'adminLabel' => 'insurance_legal',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 128,
                'label' => 'Lie Detection, Polygraph - Unarmed Payroll',
                'adminLabel' => 'lie_detection_polygraph',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 129,
                'label' => 'Process Server - Unarmed Payroll',
                'adminLabel' => 'process_server',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 130,
                'label' => 'Security Consultant - Unarmed Payroll',
                'adminLabel' => 'security_consultant',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 131,
                'label' => 'Total - Unarmed Payroll',
                'adminLabel' => 'total-u',
                'isRequired' => true,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 132,
                'label' => 'Executive Protection/Bodyguard Service - Armed Payroll',
                'adminLabel' => 'bodyguard_service-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 133,
                'label' => 'Insurance, Legal, Credit, Pre-Employment - Armed Payroll',
                'adminLabel' => 'insurance_legal-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 134,
                'label' => 'Lie Detection, Polygraph - Armed Payroll',
                'adminLabel' => 'lie_detection_polygraph-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 135,
                'label' => 'Process Server - Armed Payroll',
                'adminLabel' => 'process_server-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 136,
                'label' => 'Security Consultant - Armed Payroll',
                'adminLabel' => 'security_consultant-a',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 137,
                'label' => 'Total - Armed Payroll',
                'adminLabel' => 'total-a',
                'isRequired' => true,
                'numberFormat' => 'currency'
            ),
            
            // Wage and Revenue Fields (138-141)
            array(
                'type' => 'number',
                'id' => 138,
                'label' => 'Average Hourly Wage - Full Time',
                'adminLabel' => 'hourly_wage_full_time',
                'isRequired' => true,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 139,
                'label' => 'Average Hourly Wage - Part Time',
                'adminLabel' => 'hourly_wage_part_time',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 140,
                'label' => 'Annual Corporate Revenue - Full Time',
                'adminLabel' => 'revenue_full_time',
                'isRequired' => true,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'number',
                'id' => 141,
                'label' => 'Alarm Operations - Estimated Revenue',
                'adminLabel' => 'alarm_operations_revenue',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            // Section IV Description Fields (191-199)
            array(
                'type' => 'textarea',
                'id' => 191,
                'label' => 'Airport Work - Please describe all operations/duties performed:',
                'adminLabel' => 'airport_work',
                'isRequired' => false,
                'size' => 'medium'
            ),
            
            array(
                'type' => 'textarea',
                'id' => 192,
                'label' => 'Apartment Work - Please describe duties. If any government-owned, please provide list of addresses:',
                'adminLabel' => 'apartment_work',
                'isRequired' => false,
                'size' => 'medium'
            ),
            
            array(
                'type' => 'textarea',
                'id' => 193,
                'label' => 'Retail Work - Please describe types of stores, duties, and hours that guard(s) are on duty:',
                'adminLabel' => 'retail_work',
                'isRequired' => false,
                'size' => 'medium'
            ),
            
            array(
                'type' => 'textarea',
                'id' => 194,
                'label' => 'Criminal Detention Centers - Please describe all operations/duties performed:',
                'adminLabel' => 'criminal_detention',
                'isRequired' => false,
                'size' => 'medium'
            ),
            
            array(
                'type' => 'textarea',
                'id' => 195,
                'label' => 'Special Events - Please describe events, locations and duties:',
                'adminLabel' => 'special',
                'isRequired' => false,
                'size' => 'medium'
            ),
            
            array(
                'type' => 'textarea',
                'id' => 196,
                'label' => 'Bodyguard Work - Please describe duties:',
                'adminLabel' => 'bodyguard_work',
                'isRequired' => false,
                'size' => 'medium'
            ),
            
            array(
                'type' => 'radio',
                'id' => 197,
                'label' => 'Bodyguard Work - Any athletes, celebrities or entertainers?',
                'adminLabel' => 'any_athletes',
                'isRequired' => false,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            array(
                'type' => 'textarea',
                'id' => 198,
                'label' => 'Security Consulting - Please describe consulting clients and scope of services provided:',
                'adminLabel' => 'security_consulting',
                'isRequired' => false,
                'size' => 'medium'
            ),
            
            array(
                'type' => 'textarea',
                'id' => 199,
                'label' => 'Other - Please describe all operations/duties performed:',
                'adminLabel' => 'other_operations',
                'isRequired' => false,
                'size' => 'medium'
            ),
            
            // Section V Current Insurance Fields (151-165)
            array(
                'type' => 'text',
                'id' => 151,
                'label' => 'Current Carrier',
                'adminLabel' => 'current_carrier',
                'isRequired' => false,
                'size' => 'large'
            ),
            
            array(
                'type' => 'date',
                'id' => 152,
                'label' => 'Inception Date',
                'adminLabel' => 'inception_date',
                'isRequired' => false,
                'dateFormat' => 'mdy'
            ),
            
            array(
                'type' => 'number',
                'id' => 153,
                'label' => 'Premium',
                'adminLabel' => 'premium',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'date',
                'id' => 154,
                'label' => 'Expiration Date',
                'adminLabel' => 'expiration_date',
                'isRequired' => false,
                'dateFormat' => 'mdy'
            ),
            
            array(
                'type' => 'number',
                'id' => 155,
                'label' => 'Deductible',
                'adminLabel' => 'deductible',
                'isRequired' => false,
                'numberFormat' => 'currency'
            ),
            
            array(
                'type' => 'radio',
                'id' => 157,
                'label' => 'Occurrence Form?',
                'adminLabel' => 'occurrence_form',
                'isRequired' => false,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            array(
                'type' => 'radio',
                'id' => 158,
                'label' => 'Has any company cancelled or declined to renew liability insurance?',
                'adminLabel' => 'company_renew_insurance',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            array(
                'type' => 'textarea',
                'id' => 159,
                'label' => 'If "yes", please explain below.',
                'adminLabel' => 'please_explain_below-c',
                'isRequired' => false,
                'size' => 'medium',
                'conditionalLogic' => array(
                    'actionType' => 'show',
                    'logicType' => 'all',
                    'rules' => array(
                        array(
                            'fieldId' => 158,
                            'operator' => 'is',
                            'value' => 'yes'
                        )
                    )
                )
            ),
            
            array(
                'type' => 'radio',
                'id' => 160,
                'label' => 'Do you require staff to report all unusual incidents to management?',
                'adminLabel' => 'do_you_require_staff',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            array(
                'type' => 'radio',
                'id' => 161,
                'label' => 'Have there been any claims or lawsuits in the past 5 years?',
                'adminLabel' => 'claims_or_lawsuits',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            array(
                'type' => 'textarea',
                'id' => 162,
                'label' => 'If "yes", please explain below.',
                'adminLabel' => 'please_explain_below-5',
                'isRequired' => false,
                'size' => 'medium',
                'conditionalLogic' => array(
                    'actionType' => 'show',
                    'logicType' => 'all',
                    'rules' => array(
                        array(
                            'fieldId' => 161,
                            'operator' => 'is',
                            'value' => 'yes'
                        )
                    )
                )
            ),
            
            array(
                'type' => 'radio',
                'id' => 164,
                'label' => 'Do you have any knowledge of any incidents which may give rise to a future claim?',
                'adminLabel' => 'knowledge_of_any_incidents',
                'isRequired' => true,
                'choices' => array(
                    array('text' => 'Yes', 'value' => 'yes'),
                    array('text' => 'No', 'value' => 'no')
                )
            ),
            
            array(
                'type' => 'textarea',
                