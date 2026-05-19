<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $subject ?? 'TheraWell' }}</title>
    <style>
        /* CSS reset and base styles */
        body {
            margin: 0;
            padding: 0;
            background-color: #F7F8F6; /* Soft sage/cream background */
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100% !important;
            height: 100% !important;
        }
        table {
            border-spacing: 0;
            border-collapse: collapse;
        }
        td {
            padding: 0;
        }
        img {
            border: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        /* Mobile responsive styles */
        @media screen and (max-width: 600px) {
            .container {
                width: 100% !important;
                padding: 0 15px !important;
            }
            .content-pad {
                padding: 30px 20px !important;
            }
            .button {
                display: block !important;
                width: 100% !important;
                text-align: center !important;
            }
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #F7F8F6; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
    <center style="width: 100%; background-color: #F7F8F6; padding: 40px 0;">
        <div style="max-width: 600px; margin: 0 auto;" class="container">
            <!-- Preheader text (hidden in email body, visible in inbox preview) -->
            <div style="display: none; font-size: 1px; color: #F7F8F6; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
                {{ $preheader ?? 'Prioritizing your mental wellness with TheraWell.' }}
            </div>

            <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                
                <!-- Header -->
                <tr>
                    <td align="center" style="padding: 40px 0 30px 0; background-color: #ffffff; border-bottom: 1px solid #f0f0f0;">
                        <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                            <tr>
                                <td align="center">
                                    <!-- Using Georgia/Serif to match the luxurious, modern wellness aesthetic -->
                                    <h1 style="margin: 0; font-family: Georgia, 'Times New Roman', serif; font-size: 28px; color: #2C3E35; font-weight: normal; letter-spacing: 1px;">TheraWell</h1>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Main Content -->
                <tr>
                    <td class="content-pad" style="padding: 40px 40px 20px 40px; background-color: #ffffff;">
                        
                        @if(isset($greeting))
                        <h2 style="margin: 0 0 20px 0; font-family: Georgia, 'Times New Roman', serif; font-size: 22px; color: #2C3E35; font-weight: normal;">
                            {{ $greeting }}
                        </h2>
                        @else
                        <h2 style="margin: 0 0 20px 0; font-family: Georgia, 'Times New Roman', serif; font-size: 22px; color: #2C3E35; font-weight: normal;">
                            Hello,
                        </h2>
                        @endif

                        <div style="margin: 0 0 25px 0; font-size: 16px; line-height: 1.6; color: #4A5568;">
                            @if(isset($body))
                                {!! $body !!}
                            @else
                                <p style="margin: 0 0 15px 0;">Thank you for being a part of the TheraWell community. We are dedicated to providing you with the best services and resources for your mental health journey.</p>
                                <p style="margin: 0;">Take a deep breath, relax, and take a moment for yourself today. We're here to support you every step of the way.</p>
                            @endif
                        </div>

                        <!-- Action Button -->
                        @if(isset($actionText) && isset($actionUrl))
                        <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="margin-bottom: 25px;">
                            <tr>
                                <td align="left">
                                    <table cellpadding="0" cellspacing="0" role="presentation">
                                        <tr>
                                            <td align="center" style="border-radius: 6px; background-color: #8BA995;">
                                                <a href="{{ $actionUrl }}" class="button" style="display: inline-block; padding: 14px 28px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px; font-weight: 500;">
                                                    {{ $actionText }}
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        @endif

                        <!-- Closing -->
                        <div style="margin: 0; font-size: 16px; line-height: 1.6; color: #4A5568;">
                            @if(isset($closing))
                                <p style="margin: 0;">{{ $closing }}</p>
                            @else
                                <p style="margin: 0;">Warmly,<br><strong>The TheraWell Team</strong></p>
                            @endif
                        </div>

                    </td>
                </tr>

                <!-- Additional Space / Divider -->
                <tr>
                    <td style="padding: 0 40px;">
                        <hr style="border: 0; border-top: 1px solid #E2E8F0; margin: 20px 0;">
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="padding: 20px 40px 40px 40px; background-color: #ffffff; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px;">
                        
                        <!-- Social Links -->
                        <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="margin-bottom: 20px;">
                            <tr>
                                <td align="center">
                                    <a href="#" style="display: inline-block; margin: 0 10px; color: #8BA995; text-decoration: none; font-size: 14px;">Website</a>
                                    <span style="color: #CBD5E0;">|</span>
                                    <a href="#" style="display: inline-block; margin: 0 10px; color: #8BA995; text-decoration: none; font-size: 14px;">Instagram</a>
                                    <span style="color: #CBD5E0;">|</span>
                                    <a href="#" style="display: inline-block; margin: 0 10px; color: #8BA995; text-decoration: none; font-size: 14px;">Twitter</a>
                                </td>
                            </tr>
                        </table>

                        <p style="margin: 0 0 10px 0; font-size: 12px; line-height: 1.5; color: #A0AEC0; text-align: center;">
                            &copy; {{ date('Y') }} TheraWell. All rights reserved.
                        </p>
                        <p style="margin: 0; font-size: 12px; line-height: 1.5; color: #A0AEC0; text-align: center;">
                            123 Wellness Avenue, Serenity City, SC 12345
                        </p>
                        <p style="margin: 10px 0 0 0; font-size: 12px; line-height: 1.5; text-align: center;">
                            <a href="#" style="color: #A0AEC0; text-decoration: underline;">Unsubscribe</a>
                        </p>

                    </td>
                </tr>
            </table>

            <!-- Spacer for bottom padding -->
            <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr><td height="40"></td></tr>
            </table>

        </div>
    </center>
</body>
</html>
