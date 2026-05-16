<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $job->title}}</title>
</head>
<body>
    <p><a href="/jobs">Back to Job Listings</a></p>
    <h1>{{ $job->title }}</h1>
    <p>{{ $job->description }}</p>
    <h3>Financial Details</h3>
    <p>Salary: ${{ number_format($job->salary, 2) }}</p>
</body>
</html>