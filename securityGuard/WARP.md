# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

## Overview

This is a Gravity PDF template system for generating Security Guard insurance application PDFs. The codebase is part of a larger DFA Insurance PDF templates repository that includes multiple insurance application types (Alarm, PI, Security Guard).

## Architecture

### Template Structure
- **Main Template**: `nc-security-guard-template.php` - The primary PDF template file that generates the Security Guard insurance application PDF
- **Configuration**: `config/nc_security_guard_config.php` - Gravity Forms field definitions and form structure
- **Field Mapping**: The template uses Gravity Forms merge tags (e.g., `{insureds_name:1}`) to populate PDF fields

### Key Components
1. **Template Header**: Contains metadata, version info, and change log (lines 3-38 in main template)
2. **PDF Sections**: 
   - Section I: General Information (company details, contacts)
   - Section II: Operations (business operations, staffing)
   - Section III: Projected Annual Payroll (detailed breakdown by service type)
   - Section IV: Description of Operations (detailed operational descriptions)
   - Section V: Current Insurance Information (existing coverage details)
3. **Dynamic Business Age Calculation**: PHP code calculates business duration from start date field (lines 133-151)
4. **Conditional Fields**: Many fields have conditional logic based on user responses
5. **File Uploads**: Support for loss run documents and signature capture

### Field ID System
- Field IDs range from 1-217 with some gaps
- Unarmed payroll fields: 56-90
- Armed payroll fields: 91-125  
- Private investigation fields: 126-137
- Revenue/wage fields: 138-141
- Current insurance fields: 151-165
- Description fields: 191-199
- Contact/signature fields: 202-217

## Development Commands

### Testing Template Changes
```bash
# No build process required - PHP templates are interpreted at runtime
# Test by uploading to Gravity PDF plugin in WordPress admin
```

### File Validation
```bash
# Check PHP syntax
php -l nc-security-guard-template.php
php -l config/nc_security_guard_config.php
```

### Version Control
```bash
# This is part of a larger Git repository
git status
git add .
git commit -m "Update security guard template"
git push origin main
```

## Template Development Guidelines

### Version Management
- Update version number in template header (line 5)
- Add detailed change log entries with dates (lines 16-38)
- Follow existing versioning pattern (v.14, v.15, etc.)

### Field Mapping Rules
- Use Gravity Forms merge tag syntax: `{field_label:field_id}`
- Conditional fields use specific IDs for targeting
- Maintain consistency between template fields and config definitions

### Business Logic
- Business age calculation is dynamic (lines 133-151) - avoid hardcoding
- Use proper PHP date handling with DateTime objects
- Handle empty/invalid dates gracefully with fallback to 'N/A'

### PDF Styling
- Uses inline CSS within `<style>` tags
- Blue theme color: `#4a67d8`
- Table-based layout for form structure
- Responsive column widths with percentage values

### File Structure Conventions
- Main template: `nc-{template-type}-template.php`
- Config file: `config/nc_{template_type}_config.php`  
- Maintain parallel structure with other templates (Alarm, PI)

## Common Tasks

### Adding New Fields
1. Add field definition to `config/nc_security_guard_config.php`
2. Add corresponding merge tag to template HTML
3. Update field ID documentation
4. Test conditional logic if applicable

### Modifying Calculations
- Business age calculation: lines 133-151 in main template
- Payroll totals: handled in Gravity Forms, not template
- Revenue calculations: defined in config field definitions

### Template Updates
1. Update version number in header
2. Add change log entry with date and description
3. Test all sections render correctly
4. Verify merge tags resolve properly
5. Check PDF output formatting

## Dependencies

- **Gravity Forms**: WordPress form builder plugin
- **Gravity PDF**: PDF generation plugin for Gravity Forms
- **PHP 7.4+**: Required for DateTime calculations and form processing
- **WordPress**: Content management system hosting the forms

## File Organization

```
securityGuard/
├── nc-security-guard-template.php    # Main PDF template
├── config/
│   └── nc_security_guard_config.php  # Form field definitions
└── nc-security-guard-template.php.zip # Packaged template
```

## Integration Notes

- Templates integrate with Gravity Forms via merge tags
- PDF generation triggered on form submission
- Form data flows: User Input → Gravity Forms → Gravity PDF → Template → PDF Output
- No database queries in templates - all data comes from form submission
- File uploads (signatures, loss runs) handled via Gravity Forms file upload fields

## Testing Strategy

1. **Template Syntax**: Use `php -l` for syntax checking
2. **Form Integration**: Test with actual Gravity Forms in WordPress
3. **PDF Output**: Generate test PDFs with sample data
4. **Field Mapping**: Verify all merge tags resolve correctly
5. **Conditional Logic**: Test show/hide conditions work properly