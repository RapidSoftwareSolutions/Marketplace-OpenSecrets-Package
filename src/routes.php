       <?php
       $routes = [
       'getOrganizationSummary',
       'getOrganization',
       'getIndustryRaisedByMember',
       'getCandidateSector',
       'getSingleIndustryCandidateData',
       'getCandidateIndustries',
       'getCandidateContributors',
       'getCandidateSummary',
       'getMemberPFDprofile',
        'getLegislators',
        'metadata'
       ];
       foreach ($routes as $file) {
           require __DIR__ . '/../src/routes/' . $file . '.php';
       }

