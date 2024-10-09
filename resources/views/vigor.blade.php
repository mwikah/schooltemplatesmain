<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vigor High School</title>
    <link rel="stylesheet" href="{{ asset('vigor/css/vigor.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333333;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
        }
        .header {
            background-color: #003366;
            padding: 20px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header-left {
            text-align: left;
        }
        .header-left h1 {
            margin: 0;
            font-size: 28px;
            font-weight: normal;
        }
        .header-left p {
            font-size: 14px;
            margin-left: 30px;
            font-family: sans-serif;

        }
        .header-icons {
            margin-top: 10px;
        }

        .header-icons img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            vertical-align: middle;
        }
        .header-right img {
            width: 150px;
            height: auto;
        }
        .content {
            padding: 20px;

        }
        .content p {
            font-size: 16px;
            line-height: 1;
            margin-bottom: 20px;
            font-family: sans-serif;
        }
        .disclaimer {
            font-size: 14px;
            color: #777777;
            margin-top: 18px;
        }
        .content p{
            font-size: 14px;
        }

        .footer {
            background-color: #003366;
            padding: 10px;
            text-align: center;
            color: white;
            font-size: 14px;
        }
        .headt{
            height: 40px;
            width: 40px;
        }
        .attachment {
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 10px;
            background-color: #f9f9f9;
        }
        .attachment img {
            width: 100%;
            max-width: 150px;
            height: auto;
        }

    </style>
</head>
<body>
<div class="email-container">
    <!-- Header -->
    <div class="header">
        <div class="header-left">
            <h1>Vigor High School</h1>
            <p>913 N. Wilson Ave., Prichard, AL 36610</p>
            <p style="text-align: left;margin-left: 100px">251-221-3045</p>
            <div class="header-icons">
                <a href="https://app.guidek12.com/mobileal/school_search/current/"><img src="https://content.schoolinsites.com/api/documents/ce5591993d054bbd973c31ecd5aaf49b.png" alt="Icon 1"></a>
                <a href="https://global-zone53.renaissance-go.com/welcomeportal/79853"> <img src="https://content.schoolinsites.com/api/documents/9c6566b254bc4aa499c4800ba0a7eb34.png" alt="Icon 2"></a>
                <a href="http://alex.state.al.us/"> <img src="https://content.schoolinsites.com/api/documents/ab5b59cfe0504f189baf13ce2b5d2cf3.png" alt="Icon 3"></a>
                <a href="https://eps.mvpbanking.com/cgi-bin/efs/login.pl?access=56043"> <img src="https://content.schoolinsites.com/api/documents/ef45aca0261e443ab6fff5a294c2f4d8.png" alt="Icon 4"></a>
                <a href="https://app.schoology.com/login"> <img src="https://content.myconnectsuite.com/api/documents/6901bc3cdf464d859059c16bfa2af24e.png" alt="Icon 5"></a>
                <a href="http://www.arbookfind.com/UserType.aspx"> <img src="https://content.schoolinsites.com/api/documents/997ea4d3d96c4cde9595a4201d2e6ac9.png" alt="Icon 6"></a>
                <a href="https://365.mcpss.com/"><img src="https://content.schoolinsites.com/api/documents/60ab1ddff8114c19880615b658e04cd0.png" alt="Icon 7"></a>
                <a href="https://clever.com/in/mcpss"> <img src="https://content.schoolinsites.com/api/documents/4dc2bb579643430eaea906769db8b99c.png" alt="Icon 8"></a>
            </div>
        </div>
        <!-- Right Side: Logo -->
        <div class="header-right">
            <img src="https://content.schoolinsites.com/api/documents/2bd03b35c5f44e5f998afe1881bc3a6a.png" alt="Vigor High School Logo" class="headt">
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <p>On behalf of Vigor High School, we are pleased to provide the official transcript for [Your Name], a former student, as part of their application/admission process to [College Name]. Please find the attached PDF document below for your review. Click the link to download and view the file.</p>
        <div class="attachment">
            <img src="https://www.example.com/thumbnail.png" alt="PDF Thumbnail">
            <p><a href="https://www.example.com/yourdocument.pdf" target="_blank">Download the PDF document</a></p>

        </div>
        <hr>
        <h4>Disclaimers:</h4>
        <p class="disclaimer"><strong>Confidentiality Notice:</strong> This transcript is confidential and intended solely for the use of the recipient. If you are not the intended recipient, please be aware that any disclosure, copying, distribution, or use of the contents of this information is strictly prohibited. If you have received this transcript in error, please notify us immediately by replying to this email and delete the message from your system.</p>

        <p class="disclaimer"><strong>Authenticity:</strong> The attached document is an official academic record generated and authenticated by <strong>Vigor High School</strong>. Any alterations or modifications to this document will render it invalid.</p>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; Vigor High School, All rights reserved.</p>
    </div>
</div>
</body>
</html>
