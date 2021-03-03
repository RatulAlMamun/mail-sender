<!DOCTYPE html>
<html>
<head>
    <title>A- Star</title>
    <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Dealership Details</h1>
    <table>
        <tr>
            <td>Name</td>
            <td>{{ $details['name'] }}</td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td>{{ $details['mobile'] }}</td>
        </tr>
        <tr>
            <td>Present Address</td>
            <td>{{ $details['presentAddress'] }}</td>
        </tr>
        <tr>
            <td>Present District</td>
            <td>{{ $details['presentDistrict'] }}</td>
        </tr>
        <tr>
            <td>Present Thana</td>
            <td>{{ $details['presentThana'] }}</td>
        </tr>
        <tr>
            <td>Birth Date</td>
            <td>{{ $details['bDate'] }}</td>
        </tr>
        <tr>
            <td>Permanent Address</td>
            <td>{{ $details['permanentAddress'] }}</td>
        </tr>
        <tr>
            <td>Permanent District</td>
            <td>{{ $details['permanentDistrict'] }}</td>
        </tr>
        <tr>
            <td>Permanent Thana</td>
            <td>{{ $details['permanentThana'] }}</td>
        </tr>
        <tr>
            <td>Postal Code</td>
            <td>{{ $details['postalCode'] }}</td>
        </tr>
    </table>
   
</body>
</html>