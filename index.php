<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form method= "POST" action="user_data.php">

    </label> <br>
        <label for="name">
        Name: <input type="text" name="name">
        </label><br>

    </label> <br>
        <label for="email">
            Email: <input type="email" name="email">
        </label><br>

        </label> <br>
        <label for="date of birth">
        Date of Birth: <input type="date" name="dob">
        </label><br>

        </label> <br>
        <label for="gender">Gender: <br>
       <select type="text" name="gender" required>
                        <option >Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>
        </label><br>

        

        <label for="country">Country</label><br>
                    <select type="text" name="country" placeholder="Country" required>
                        <option >Select Country</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Kenya">Kenya</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Congo">Congo</option>
                        <option value="Morrocco">Morrocco</option>
                        <option value="Central Africa">Central Africa</option>
                        </select>
                        <br>
        <button type="submit">Submit</button>

    </form>
</body>
</html>