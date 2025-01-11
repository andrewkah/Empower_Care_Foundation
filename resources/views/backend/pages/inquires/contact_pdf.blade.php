<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', '') }} </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Inquiry Report</h2>
                <table class="table table-bordered border-dark" style="border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th class="border border-dark" style="border: 1px solid black;">Name</th>
                            <th class="border border-dark" style="border: 1px solid black;">Email</th>
                            <th class="border border-dark" style="border: 1px solid black;">Phone</th>
                            <th class="border border-dark" style="border: 1px solid black;">Message</th>
                            <th class="border border-dark" style="border: 1px solid black;">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inquiries as $inquiry)
                            <tr>
                                <td class="border border-dark" style="border: 1px solid black;">{{ $inquiry->name }}
                                </td>
                                <td class="border border-dark" style="border: 1px solid black;">{{ $inquiry->email }}
                                </td>
                                <td class="border border-dark" style="border: 1px solid black;">{{ $inquiry->phone }}
                                </td>
                                <td class="border border-dark" style="border: 1px solid black;">{{ $inquiry->message }}
                                </td>
                                <td class="border border-dark" style="border: 1px solid black;">
                                    {{ $inquiry->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
