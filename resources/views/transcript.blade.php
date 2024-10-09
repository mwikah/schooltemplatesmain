<!DOCTYPE html>
<html>
<head>
    <title>High School Transcript</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            text-align: center;
        }

        #transcript-header {
            border-bottom: 1px solid black;
            margin-bottom: 20px;
        }

        #course-list table {
            border-collapse: collapse;
            width: 100%;
        }

        #course-list th, #course-list td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        #course-list th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<header>
    <h1>[School Name]</h1>
    <address>
        [School Address]<br>
        [City, State, ZIP]<br>
        Phone: [Phone Number]<br>
        Email: [Email Address]<br>
        Website: [Website URL]
    </address>
</header>

<section id="transcript-header">
    <h2>Transcript of Record</h2>
    <p>
        <strong>Student Name:</strong> [Student Name]<br>
        <strong>Student ID:</strong> [Student ID Number]<br>
        <strong>Date of Birth:</strong> [Date of Birth]<br>
        <strong>Dates Covered:</strong> [Start Date] - [End Date]
    </p>
    <p>
        <strong>Issued:</strong> [Issuance Date]<br>
        <strong>Issued By:</strong> [Issuing Authority Title] - [Issuing Authority Name]
    </p>
</section>

<section id="course-list">
    <table>
        <thead>
        <tr>
            <th>Course Name</th>
            <th>Grade</th>
            <th>Credits</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>[Course Name 1]</td>
            <td>[Grade]</td>
            <td>[Credits]</td>
        </tr>
        </tbody>
    </table>
</section>

<footer>
    [Signature and other verification elements]
</footer>
</body>
</html>
