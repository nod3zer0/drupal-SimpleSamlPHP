<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata["https://aai.eulist.university:8443/realms/EULiST"] = [
    'entityid' => 'https://aai.eulist.university:8443/realms/EULiST',
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'sign.authnrequest' => true,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://aai.eulist.university:8443/realms/EULiST/protocol/saml',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://aai.eulist.university:8443/realms/EULiST/protocol/saml',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://aai.eulist.university:8443/realms/EULiST/protocol/saml',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://aai.eulist.university:8443/realms/EULiST/protocol/saml',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://aai.eulist.university:8443/realms/EULiST/protocol/saml',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://aai.eulist.university:8443/realms/EULiST/protocol/saml',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://aai.eulist.university:8443/realms/EULiST/protocol/saml',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://aai.eulist.university:8443/realms/EULiST/protocol/saml',
        ],
    ],
    'ArtifactResolutionService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://aai.eulist.university:8443/realms/EULiST/protocol/saml/resolve',
            'index' => 0,
        ],
    ],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
        'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
        'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIICmzCCAYMCBgGL+Jqo4zANBgkqhkiG9w0BAQsFADARMQ8wDQYDVQQDDAZFVUxpU1QwHhcNMjMxMTIyMTk1NDI3WhcNMzMxMTIyMTk1NjA3WjARMQ8wDQYDVQQDDAZFVUxpU1QwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCNBNYjiafPulQGzpIWIAvW0tTwnP3vBGN+pia31BNqxhUDXrPOUMQa1Ce0p4ZSlzKNl0MgubCbZSKwd1FHqOQsYv6rJkGh+bxOG7dtxVC5jkvORlaKJkXpy8eurAntMuMC19XBDCj+eMjinQB1CYlDurW0GvATlCNa+MefOfZtvzKDr5u/ht23Ns8SnXY/4DHdOlXDMvCJEGVoC+5URjXsF5yAN+MjCn+XdhhgHG5aeX3cy+T7Uxl/+ufa6xWmI0mWAxBfpzzV02Zu5r7g8dFlHW2wJeGzVRFOKYggFe57pQ96lqJ19IkoixLXVdd+HUytCADHMLlU3HAHjfm4a2fZAgMBAAEwDQYJKoZIhvcNAQELBQADggEBAIt5n3IPbSTyfpF/MBRY9TAHskWwAXvIT5NC0FD62KDUmkmJGsCasEYo9jptNN2x9ZTgTUPOHJ6pVCnz4M9U9559EvBFCvVO5Ju4gY3axpxpZpf8Jw2bT2I9ZkHkyYwbGSL/H98lWdPiPg+JsiQjqZR0ydcBFo6qPUJ7kHhpxgSFJuhQ6SwrBSoEE8tetpScVo3QsPfCCQDWjRn/ZBxDaAT+m1imlqAs/fuyWcOseytx09itZ3Z5g6cjNPaY3v/617rWSku6sgA8cLq9QYDbRev7+dPcq+oMFF/97O7o2LxTTDh+Zbfhjd5V9tH4dCmFgYSMh9XZ/+0+vhjUz0Lqrt4=',
        ],
    ],
    'metadata-index' => 'https://aai.eulist.university:8443/realms/EULiST',
];
$metadata['https://saml.example.com/entityid'] = [
    'entityid' => 'https://saml.example.com/entityid',
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'sign.authnrequest' => true,
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://mocksaml.com/api/saml/sso',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://mocksaml.com/api/saml/sso',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC4jCCAcoCCQC33wnybT5QZDANBgkqhkiG9w0BAQsFADAyMQswCQYDVQQGEwJVSzEPMA0GA1UECgwGQm94eUhRMRIwEAYDVQQDDAlNb2NrIFNBTUwwIBcNMjIwMjI4MjE0NjM4WhgPMzAyMTA3MDEyMTQ2MzhaMDIxCzAJBgNVBAYTAlVLMQ8wDQYDVQQKDAZCb3h5SFExEjAQBgNVBAMMCU1vY2sgU0FNTDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBALGfYettMsct1T6tVUwTudNJH5Pnb9GGnkXi9Zw/e6x45DD0RuRONbFlJ2T4RjAE/uG+AjXxXQ8o2SZfb9+GgmCHuTJFNgHoZ1nFVXCmb/Hg8Hpd4vOAGXndixaReOiq3EH5XvpMjMkJ3+8+9VYMzMZOjkgQtAqO36eAFFfNKX7dTj3VpwLkvz6/KFCq8OAwY+AUi4eZm5J57D31GzjHwfjH9WTeX0MyndmnNB1qV75qQR3b2/W5sGHRv+9AarggJkF+ptUkXoLtVA51wcfYm6hILptpde5FQC8RWY1YrswBWAEZNfyrR4JeSweElNHg4NVOs4TwGjOPwWGqzTfgTlECAwEAATANBgkqhkiG9w0BAQsFAAOCAQEAAYRlYflSXAWoZpFfwNiCQVE5d9zZ0DPzNdWhAybXcTyMf0z5mDf6FWBW5Gyoi9u3EMEDnzLcJNkwJAAc39Apa4I2/tml+Jy29dk8bTyX6m93ngmCgdLh5Za4khuU3AM3L63g7VexCuO7kwkjh/+LqdcIXsVGO6XDfu2QOs1Xpe9zIzLpwm/RNYeXUjbSj5ce/jekpAw7qyVVL4xOyh8AtUW1ek3wIw1MJvEgEPt0d16oshWJpoS1OT8Lr/22SvYEo3EmSGdTVGgk3x3s+A0qWAqTcyjr7Q4s/GKYRFfomGwz0TZ4Iw1ZN99Mm0eo2USlSRTVl7QHRTuiuSThHpLKQQ==',
        ],
    ],
];
