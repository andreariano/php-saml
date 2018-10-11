<?php

    $spBaseUrl = 'https://2d85b3b9.ngrok.io'; //or http://<your_domain>

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
            'entityId' => 'https://app.onelogin.com/saml/metadata/5074bb37-0ad2-4180-a53f-07a08cd1233f',
            'singleSignOnService' => array (
                'url' => 'https://andreariano-dev.onelogin.com/trust/saml2/http-post/sso/846367',
            ),
            'singleLogoutService' => array (
                'url' => 'https://andreariano-dev.onelogin.com/trust/saml2/http-redirect/slo/846367',
            ),
            'x509cert' => '-----BEGIN CERTIFICATE-----
            MIIEHTCCAwWgAwIBAgIUF8HCJoNMcecH8hIYQeqQmnm5GIQwDQYJKoZIhvcNAQEF
            BQAwWjElMCMGA1UECgwcUHJvZ3JhbW1lcnMgSW5mb3JtYXRpY2EgTFREQTEVMBMG
            A1UECwwMT25lTG9naW4gSWRQMRowGAYDVQQDDBFPbmVMb2dpbiBBY2NvdW50IDAe
            Fw0xODEwMDkyMTI4NTRaFw0yMzEwMDkyMTI4NTRaMFoxJTAjBgNVBAoMHFByb2dy
            YW1tZXJzIEluZm9ybWF0aWNhIExUREExFTATBgNVBAsMDE9uZUxvZ2luIElkUDEa
            MBgGA1UEAwwRT25lTG9naW4gQWNjb3VudCAwggEiMA0GCSqGSIb3DQEBAQUAA4IB
            DwAwggEKAoIBAQCn12pjUBL01cVomyn7EfQ/i8gCmqTdNyCYXDG2dhSzLYGKKKIF
            uFxyOqnAA/5G8/idXIFD4Es/87mgWXFxdGx3ucZ+vyaL9RWOAaJbfXFx8VRUM6YU
            hyuK1T0+EkFVT2Nw+vrQQ+BEjhvKUbv5lbNaf1dbmj/tJKfCwJQ4aLV7kSza1eQ5
            WucWw49tckvXOItJlrjMqojgDbDvDlMZIGBp0IrjodQPBvy29VbE597MCPhcLpcl
            2RilVevmKhC89m26VRFBEQuW/c600DW75inc/TGmiw/ZuLXMtK9o9zLVmUybzNET
            DSYmd3OBjmeM0Z6Se8G5ZhoPKkXjMovelJAVAgMBAAGjgdowgdcwDAYDVR0TAQH/
            BAIwADAdBgNVHQ4EFgQUNvTkkgqARE+BL02IkV11vGyXVJcwgZcGA1UdIwSBjzCB
            jIAUNvTkkgqARE+BL02IkV11vGyXVJehXqRcMFoxJTAjBgNVBAoMHFByb2dyYW1t
            ZXJzIEluZm9ybWF0aWNhIExUREExFTATBgNVBAsMDE9uZUxvZ2luIElkUDEaMBgG
            A1UEAwwRT25lTG9naW4gQWNjb3VudCCCFBfBwiaDTHHnB/ISGEHqkJp5uRiEMA4G
            A1UdDwEB/wQEAwIHgDANBgkqhkiG9w0BAQUFAAOCAQEAa8tyEu2JSOrYOrrgzxEt
            jaqiHF16IHHtK1ialTSQ9yS69cpZu6rXCzcqhh6XLClHK6Y6qPj9jKwT3R9Bp6VE
            MOzMUghk+AdFrQuJ3vtv2Z7A8BUk4sRqksjpOepsB+fg83T13xRcIhE3vT3m4PW1
            SfJsQr1FTmUKti02FPaVB6369b5RAX//aGhSzlHFyGxe8BgT2f2wILFoRWvmyySO
            ktEaqkAFWDS8HMATSKzWamFbuqaiqyc4IOfUCUbRIJR8cST0eBuVAeAVmuIAmZ7h
            nhm3oqUxFOUxbRVAThJ4MIbUhj4YZUi4Vm9OC82oxDTjV2RPmaP9ZynyymX/VDvE
            IQ==
            -----END CERTIFICATE-----
            ',
        ),
    );
