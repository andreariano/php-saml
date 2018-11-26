<?php

    $spBaseUrl = 'https://8c467f87.ngrok.io'; //or http://<your_domain>

    $settingsInfo = array (
        'sp' => array (
            'entityId' => $spBaseUrl.'/demo1/metadata.php',
            'assertionConsumerService' => array (
                'url' => $spBaseUrl.'/demo1/index.php?acs',
            ),
            'singleLogoutService' => array (
                'url' => $spBaseUrl.'/demo1/index.php?sls',
            ),
            'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
        ),
        'idp' => array (
            'entityId' => 'https://login.beedoo.com.br/FederationMetadata/2007-06/FederationMetadata.xml',
            'singleSignOnService' => array (
                'url' => 'https://login.beedoo.com.br/adfs/ls',
            ),
            'singleLogoutService' => array (
                'url' => 'https://login.beedoo.com.br/adfs/ls',
            ),
            'x509cert' => '-----BEGIN CERTIFICATE-----
            MIIC4jCCAcqgAwIBAgIQJHSGodvTn4hCcm6HPKNj5jANBgkqhkiG9w0BAQsFADAtMSswKQYDVQQDEyJBREZTIFNpZ25pbmcgLSBsb2dpbi5iZWVkb28uY29tLmJyMB4XDTE4MDgxNjAzMjI1NFoXDTE5MDgxNjAzMjI1NFowLTErMCkGA1UEAxMiQURGUyBTaWduaW5nIC0gbG9naW4uYmVlZG9vLmNvbS5icjCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBALwE85Mr6LjeQrSpB3C7X6kOj6JvQFk0hIuAT8aS++uJxilTusX1sOaXeWRuvXbWEo38bEMZybedIzM1sVxoNq0VmnZzFzCIMSWBzqc88wUDHX+zY8ajOgIHA93/Q8WYl7T20g41OBStO5t+y8ulFvAn2cg24HgHWZaGD27m/mFCqeXN3DSWx9dRu+399J/fyv+JCTMQP3vCdQCN9v7SPQ76eSu2LnbWTL4wsvksO6Y24meG4m1i84f829bJPBcLKPHA3GK/Jmw7M9j+gC96FimJnMJUEmZA6tynYaLwUksc7ro7yiw3/FakxosnpWFJNDLqgSl4unBtmYLWMO2FNOMCAwEAATANBgkqhkiG9w0BAQsFAAOCAQEAXM187h+t634ghq6FFCMuG0FQ+Xn0FiSG7qS5C0EtX180NUdeCnHtOXOUIYkSbpVcQXsIRuwJ/h5F9b7WLZPA1zD7FWlXWxjipZC9u5lUy76rxpE44zxNqxSCPEHgGaBrFy6sy8h4wjdfzyMUDADCkP1D/UjDogsWK+1COgPvZcnfL60LrILVVBcFQGWPdsq2zw/iXXHZi1+zkm4MDfl/pJkjQf9CdMi29MW4tqy3zblbtAUVPzQMnE5g59EtgfZ2bsidUYJ3Ipnbwl/5+U969i21O2MEk4vtHTxIvaEJ+FhKdVXsRb8qRbG3MCUoWqw5bm0ep/2Rr4yyDzN1q9ozfw==
            -----END CERTIFICATE-----
            ',
        ),
    );
