## DHIS2 Meta Data Import

This project is used to schedule Extract Transform and Load jobs to extract facility and dataelements

### The process

1. The mapping file maps indicator and health facility IDs from the the MoH DHIS2 to the Stop Palu DHIS2
2. The import file generator will prompt for the login credentials for the MoH DHSI2. Using DHIS 2 support for the OAuth2 protocol, an open standard for authorization, the import file generator is then granted access to the MoH DHIS2 database. 
3. The import file generator logs into the MoH DHIS2 using the DHIS2 Web API and creates an export file for the indicator data defined in the mapping file for each of the health facilities for a given period.
4. Using the Data Import function in DHIS2,  the file from the previous step is imported created. This process is designed to be run on a reg

### Getting started

1. Install PHP (https://getcomposer.org)[Composer]
2. Install dependencies like so `composer install`
3. Start the server `php -S localhost:8000 -t .