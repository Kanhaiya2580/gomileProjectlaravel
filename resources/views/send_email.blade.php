<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/sendmail.css') }}" />

</head>

<body>
    <h1>Registration Form</h1>
    <p>Please fill out this form with the required information</p>

    @if (Session::has('message_sent'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message_sent') }}
        </div>
    @endif
    <form action="{{ url('/send-mail') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <label for="first-name">Enter Your First Name: <input id="first-name" name="firstname" type="text"
                    required /></label>
            <label for="last-name">Enter Your Last Name: <input id="last-name" name="lastname" type="text"
                    required /></label>
            <label for="email">Enter Your Email: <input id="email" name="email" type="email"
                    required /></label>
            <label for="password">Create a Password: <input id="password" name="password" type="password"
                    required /></label>
            <label for="File">Make a File: <input id="file" name="file" type="file" required /></label>
        </fieldset>

        <input type="submit" value="Submit" />
    </form>
</body>

</html>
