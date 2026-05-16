<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="/">Home</a> | <a href="/jobs">Jobs</a></p>
    <h1>Available Jobs</h1>
    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job->id }}">{{ $job->title }} - ${{ number_format($job->salary, 2) }}</a>
            </li>
        @endforeach
</body>
</html>