<?php namespace JF;
/**

Copyright 2017 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-e911bf
Date:    2017-09-01 21:29:01
Version: v2.0.3
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-e911bf",
    "email": {
        "to": "jack@frisby.online",
        "cc": "",
        "bcc": "",
        "subject": "{f1} ({f5} Requested Information About A Website",
        "template": "SENDER: {f1}\nCONTACT: {f2}\nCOMPANY NAME: {f5}\nWEBSITE: {f4}\nREFID: {AutoID}\nDATE: {Date}\n\nHas Requested Information About A Website In The Price Range Of {f8} \n\nWhat Does The Client Want Out Of The Website?\n\n{f6}\n\nInformation About Business:\n\n{f3}\n",
        "sendmail_from": "jfwebsender@workmail.com",
        "fromName": "Jack Frisby Web Design"
    },
    "admin": {
        "users": "admin:d20eb",
        "dataDelivery": "emailAndFile"
    },
    "thankyou": {
        "url": "",
        "message": "",
        "seconds": "10"
    },
    "seo": {
        "trackerId": "",
        "title": "",
        "description": "",
        "keywords": "",
        "author": ""
    },
    "mailer": "smtp",
    "smtp": {
        "host": "smtp.mail.com",
        "user": "jfwebsender@workmail.com",
        "password": "Yogscast1",
        "port": "587",
        "security": "tls"
    },
    "mailgun": {
        "domain": "https:\/\/app.mailgun.com\/app\/domains\/sandboxee570db38ece4c5cb101ae6077ee7751.mailgun.org",
        "apiKey": "pubkey-803b69989fc77b1381459384b62d138f",
        "fromEmail": "jack",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "black"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [

    ],
    "fields": [
        {
            "label": "Your Name",
            "field_type": "name",
            "field_options": {
                "size": "small",
                "sender": "fullname",
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "John Doe",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "id": "f1",
            "cid": "c1"
        },
        {
            "label": "Email",
            "field_type": "email",
            "field_options": {
                "size": "small",
                "sender": true,
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-envelope",
                    "leftText": ""
                }
            },
            "id": "f2",
            "cid": "c2"
        },
        {
            "label": "Company Name (If Personal Write \"P\")",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ]
            },
            "id": "f5",
            "cid": "c34"
        },
        {
            "label": "Pre-Existing Website?",
            "field_type": "website",
            "required": true,
            "field_options": {
                "placeholder": "http:\/\/",
                "validators": {
                    "url": {
                        "enabled": true
                    }
                }
            },
            "id": "f4",
            "cid": "c29"
        },
        {
            "label": "Information About You Or Your Buisiness",
            "field_type": "paragraph",
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-edit"
                }
            },
            "id": "f3",
            "cid": "c3"
        },
        {
            "label": "What You Want Out Of Your Website",
            "field_type": "paragraph",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f6",
            "cid": "c39"
        },
        {
            "label": "Price Range",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "0-10 Pounds A Month",
                        "checked": false,
                        "value": "0-10"
                    },
                    {
                        "label": "10-20 Pounds A Month",
                        "checked": false,
                        "value": "10-20"
                    },
                    {
                        "label": "20+ A Month",
                        "checked": false,
                        "value": "20+"
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "id": "f8",
            "cid": "c49"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "page": {
                    "title": "Submit",
                    "labelPrev": "< Back",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}"
                },
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "",
                "icon": "",
                "checkRequiredFields": ""
            },
            "id": "f0",
            "cid": "c0"
        }
    ]
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class