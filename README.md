[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/OpenSecrets/functions?utm_source=RapidAPIGitHub_OpenSecretsFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# OpenSecrets Package
OpenSecrets
* Domain: [OpenSecrets](http://opensecrets.org)
* Credentials: apiKey

## How to get credentials: 
0. Go to [Opensecrets](http://opensecrets.org)
1. Register or log in
2. Go to [Profile & key page](https://www.opensecrets.org/api/admin/index.php?function=user_data)



## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## OpenSecrets.getLegislators
provides a list of 114th Congressional legislators and associated attributes for specified subset (state, district or specific CID).

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Opensecrets
| id    | String     | two character state code, or 4 character district or specific CID

## OpenSecrets.getMemberPFDprofile
Summary profile from a members personal financial disclosure statement.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Opensecrets
| cid   | String     | CRP CandidateID
| year  | String     | 2013 & 2014 data provided

## OpenSecrets.getCandidateSummary
Provides summary fundraising information for specified politician

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Opensecrets
| cid   | String     | CRP CandidateID
| cycle | String     | 2012, 2014, 2016; leave blank for latest cycle

## OpenSecrets.getCandidateContributors
Provides the top organizations contributing to specified politician

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Opensecrets
| cid   | String     | CRP CandidateID
| cycle | String     | 2012, 2014, 2016; leave blank for latest cycle

## OpenSecrets.getCandidateIndustries
Provides the top industries contributing to a specified politician

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Opensecrets
| cid   | String     | CRP CandidateID
| cycle | String     | 2012, 2014, 2016; leave blank for latest cycle

## OpenSecrets.getSingleIndustryCandidateData
Provides the top industries contributing to a specified politician

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key obtained from Opensecrets
| cid     | String     | CRP CandidateID
| industry| String     | a 3-character industry code
| cycle   | String     | 2012, 2014, 2016; leave blank for latest cycle

## OpenSecrets.getCandidateSector
Provides sector total of specified politician's receipts

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Opensecrets
| cid   | String     | CRP CandidateID
| cycle | String     | 2012, 2014, 2016; leave blank for latest cycle

## OpenSecrets.getIndustryRaisedByMember
Provides summary fundraising information for a specific committee, industry and congress number

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key obtained from Opensecrets
| committeeId| String     | Committee ID in CQ format
| industry   | String     | a 3-character industry code
| congno     | String     | 112 (uses 2012 data), 113 (uses 2014 data) or 114 (uses 2016 data); leave blank for latest congress

## OpenSecrets.getOrganization
Look up an organization by name.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Api key obtained from Opensecrets
| organizationName| String     | name or partial name of organization requested

## OpenSecrets.getOrganizationSummary
Provides summary fundraising information for the specified organization id.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Api key obtained from Opensecrets
| organizationId| String     | CRP orgid

