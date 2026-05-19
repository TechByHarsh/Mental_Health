<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="x-apple-disable-message-reformatting">
    <title>New Contact Form Submission</title>
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style type="text/css">
        /* Client-specific resets */
        table, td { color: #000000; }
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; }

        /* Reset styles */
        img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* Mobile styles */
        @media screen and (max-width: 650px) {
            .wrapper {
                width: 100% !important;
                max-width: 100% !important;
                border-radius: 0 !important;
            }
            .mobile-padding {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }
            .header-padding {
                padding: 40px 20px !important;
            }
            .content-padding {
                padding: 30px 20px 10px 20px !important;
            }
            .message-padding {
                padding: 0 20px 30px 20px !important;
            }
        }
    </style>
</head>
<body style="margin: 0 !important; padding: 0 !important; background-color: #f7f7f5;">
    <!-- Hidden Preheader Text -->
    <div style="display: none; font-size: 1px; color: #f7f7f5; line-height: 1px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
        A new support inquiry has been submitted by {{ $contact->full_name }}.
    </div>

    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" style="background-color: #f7f7f5; padding: 40px 0;" class="mobile-padding">
                
                <!-- Email Wrapper -->
                <table border="0" cellpadding="0" cellspacing="0" width="650" class="wrapper" style="background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
                    
                    <!-- HEADER SECTION -->
                    <tr>
                        <td align="center" class="header-padding" style="background-color: #050505; padding: 60px 40px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-family: 'Georgia', serif; font-size: 28px; font-weight: normal; letter-spacing: 0.5px;">New Contact Form Submission</h1>
                            <p style="margin: 12px 0 0 0; color: #a0a0a0; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: 300;">A new support inquiry has been submitted.</p>
                        </td>
                    </tr>

                    <!-- MAIN CONTENT AREA -->
                    <tr>
                        <td class="content-padding" style="padding: 40px 40px 20px 40px; background-color: #ffffff;">
                            
                            <!-- Full Name -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 25px;">
                                <tr>
                                    <td style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                                        <div style="font-size: 11px; font-weight: 600; color: #9ca3af; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 6px;">Full Name</div>
                                        <div style="font-size: 17px; color: #1a1a1a; padding-bottom: 15px; border-bottom: 1px solid #f3f4f6;">
                                            {{ $contact->full_name }}
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <!-- Email Address -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 25px;">
                                <tr>
                                    <td style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                                        <div style="font-size: 11px; font-weight: 600; color: #9ca3af; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 6px;">Email Address</div>
                                        <div style="font-size: 17px; color: #1a1a1a; padding-bottom: 15px; border-bottom: 1px solid #f3f4f6;">
                                            <a href="mailto:{{ $contact->email }}" style="color: #1a1a1a; text-decoration: none;">{{ $contact->email }}</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <!-- Phone Number -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 25px;">
                                <tr>
                                    <td style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                                        <div style="font-size: 11px; font-weight: 600; color: #9ca3af; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 6px;">Phone Number</div>
                                        <div style="font-size: 17px; color: #1a1a1a; padding-bottom: 15px; border-bottom: 1px solid #f3f4f6;">
                                            {{ $contact->phone }}
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <!-- Subject -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 25px;">
                                <tr>
                                    <td style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                                        <div style="font-size: 11px; font-weight: 600; color: #9ca3af; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 6px;">Subject</div>
                                        <div style="font-size: 17px; color: #1a1a1a; padding-bottom: 15px; border-bottom: 1px solid #f3f4f6;">
                                            {{ $contact->subject }}
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <!-- Submission Time -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 20px;">
                                <tr>
                                    <td style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                                        <div style="font-size: 11px; font-weight: 600; color: #9ca3af; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 6px;">Submission Time</div>
                                        <div style="font-size: 17px; color: #1a1a1a; padding-bottom: 15px; border-bottom: 1px solid #f3f4f6;">
                                            {{ $contact->created_at }}
                                        </div>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- MESSAGE SECTION -->
                    <tr>
                        <td class="message-padding" style="padding: 0 40px 30px 40px; background-color: #ffffff;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                                        <div style="font-size: 11px; font-weight: 600; color: #9ca3af; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Message</div>
                                        <!-- Highlighted Message Container -->
                                        <div style="background-color: #fdfaf7; border: 1px solid #f3ebe1; border-radius: 8px; padding: 24px; font-size: 16px; color: #2d2d2d; line-height: 1.6; font-family: 'Georgia', serif; white-space: pre-wrap;">{{ $contact->message }}</div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- ADMIN NOTE BOX -->
                    <tr>
                        <td class="message-padding" style="padding: 0 40px 40px 40px; background-color: #ffffff;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="background-color: #f2f5f2; border-left: 4px solid #94a899; border-radius: 0 6px 6px 0; padding: 16px 20px;">
                                        <p style="margin: 0; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; color: #4b5d50; line-height: 1.5;">
                                            <strong>Note:</strong> You can reply directly to the user&rsquo;s email address to continue the conversation.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- FOOTER -->
                    <tr>
                        <td style="padding: 30px 40px; background-color: #fafafa; border-top: 1px solid #eeeeee;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="center" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                                        <p style="margin: 0 0 8px 0; font-size: 13px; color: #777777; font-weight: 500; letter-spacing: 0.5px;">
                                            Mental Health Support Dashboard
                                        </p>
                                        <p style="margin: 0; font-size: 12px; color: #bbbbbb;">
                                            &copy; {{ date('Y') }} All rights reserved.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>
                <!-- End Email Wrapper -->

            </td>
        </tr>
    </table>
</body>
</html>
