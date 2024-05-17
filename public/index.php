<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        html {
            color-scheme: dark light;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 16px;
            max-width: fit-content;
            margin: 0 auto;
        }

    </style>
</head>
<body>
<form action="send.php" method="post">
    <label>
        First name
        <input name="first_name" type="text" >
    </label>
    <label>
        Last name
        <input name="last_name" type="text">
    </label>
    <label>
        Age
        <input name="age" type="number" max="100" min="0">
    </label>
    <label>
        Male
        <input type="radio" name="gender" value="m">
    </label>
    <label>
        Female
        <input type="radio" name="gender" value="f" >
    </label>
    <label>
        Email
        <input type="email" name="email">
    </label>
    <label>
        Phone
        <input type="tel" name="phone">
    </label>
    <input type="submit" value="Submit">
</form>

</body>
</html>