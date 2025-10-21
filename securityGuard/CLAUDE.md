# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Overview

This is a Gravity PDF template system for generating Security Guard insurance application PDFs. The template integrates with WordPress Gravity Forms to create formatted PDF outputs from form submissions.

## Architecture

### Template Structure
- **Main Template**: `nc-security-guard-template.php` - PDF template that renders form data into a formatted insurance application
- **Configuration**: `config/nc_security_guard_config.php` - Gravity Forms field definitions and form structure
- **Field Mapping**: Uses Gravity Forms merge tag syntax `{field_label:field_id}` to populate PDF fields from form data

### Template-Config Relationship
The template and config work together:
- Config defines the form structure with field IDs, types, and validation rules
- Template references these fields using merge tags to populate PDF content
- Field IDs must match between config definitions and template references

### Field ID System
Field IDs range from 1-218 with organized ranges:
- General info: 1-55
- Unarmed payroll fields: 56-90
- Armed payroll fields: 91-125
- Private investigation fields: 126-137
- Revenue/wage fields: 138-141
- Current insurance fields: 151-165
- Description fields: 191-199
- Contact/signature fields: 202-218

### PDF Sections
The template is organized into five main sections:
1. **Section I**: General Information (company details, contacts, business classification)
2. **Section II**: Operations (staffing, training, equipment, procedures)
3. **Section III**: Projected Annual Payroll (detailed breakdown by service type - unarmed/armed)
4. **Section IV**: Description of Operations (detailed operational descriptions)
5. **Section V**: Current Insurance Information (existing coverage, claims history, signatures)

## Development Commands

### Template Validation
```bash
# Check PHP syntax for main template
php -l nc-security-guard-template.php

# Check PHP syntax for config file
php -l config/nc_security_guard_config.php
```

### Testing
No build process required - PHP templates are interpreted at runtime. Testing requires:
1. Upload template to WordPress Gravity PDF plugin
2. Submit test form data through Gravity Forms
3. Verify PDF generation and field population

## Version Management

**Important**: Always update the template header when making changes:
1. Increment version number (line 5: `Version: Latest .XX`)
2. Add detailed changelog entry with date and description (lines 16-43)
3. Follow existing versioning pattern (v.14, v.15, etc.)

Recent version history shows evolution:
- v.20: Reverted to static field reference for business age (`guard_time:218`)
- v.19: Enhanced business age calculation with months display
- v.18: Introduced dynamic PHP calculation for business age
- v.17: Separated applicant name into first/last fields

## Field Mapping Rules

### Merge Tag Syntax
- Basic: `{field_label:field_id}` (e.g., `{insureds_name:1}`)
- Name fields with subfields: `{field_name (First):id.3}` and `{field_name (Last):id.6}`
- Address fields: `{Address (Street Address):id.1}`, `{Address (City):id.3}`, etc.
- Conditional fields: Use specific field IDs referenced in config's conditionalLogic

### Field Mapping Consistency
- Template merge tags must reference valid field IDs defined in config
- Config field adminLabels should match template usage patterns
- Conditional fields require matching field IDs in both template and config

## Template Development Patterns

### Naming Conventions
- Main template: `nc-{template-type}-template.php`
- Config file: `config/nc_{template_type}_config.php`
- Maintain parallel structure with sibling templates (Alarm, PI)

### PDF Styling
- Uses inline CSS within `<style>` tags at template top
- Brand color (blue): `#4a67d8` for headers and highlights
- Table-based layout for form structure
- Logo hosted externally: `https://forms.dfainsure.com/wp-content/uploads/...`

### Business Logic Approach
- v.20 uses static field references (no PHP calculations)
- All data flows from Gravity Forms submission
- Template does not query database or perform complex calculations
- Calculations handled by Gravity Forms, not template

## Integration Flow

The data flow for PDF generation:
1. User submits Gravity Forms application
2. Form data passed to Gravity PDF plugin
3. Plugin renders template with merge tags replaced by form data
4. PDF generated and delivered to user/admin

## Common Development Tasks

### Adding New Fields
1. Add field definition to `config/nc_security_guard_config.php`
2. Add corresponding merge tag to template HTML at appropriate location
3. Verify field ID doesn't conflict with existing IDs
4. Test conditional logic if field depends on other fields
5. Update version and changelog

### Modifying Field Layout
1. Locate field in template by searching for merge tag or field ID
2. Modify surrounding HTML/CSS for layout changes
3. Test PDF output to verify formatting
4. Update version and changelog

### File Upload Fields
- Loss run documents: field ID 187
- Signature capture: field ID 190
- Use `<img src={field_name:id}>` to display in PDF

## Dependencies

- **WordPress**: Content management system (hosting environment)
- **Gravity Forms**: Form builder plugin (creates the forms)
- **Gravity PDF**: PDF generation plugin (renders templates)
- **PHP 7.4+**: Required for template execution
