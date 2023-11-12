<!DOCTYPE html>
<html>
<head>
    <title>Survey Information Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e6e6e6;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #004080;
            margin-top: 20px;
        }

        form {
            background-color: #ffffff;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #007acc;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #005580;
        }
    </style>
</head>
<body>
    <h1>Student Info</h1>

    <form action="pdfprint.php" method="POST">
        <div>
            <label for="p_name">Person Name</label>
            <input type="text" id="p_name" name="p_name">
        </div>

        <div>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location">
        </div>

        <div>
            <label for="school_name">School:</label>
            <input type="text" id="school_name" name="school_name">
        </div>

        <div>
            <label for="rollno">Roll No:</label>
            <input type="text" id="rollno" name="rollno">
        </div>

        <div>
            <label for="parent">Parent:</label>
            <input type="text" id="parent" name="parent">
        </div>

        <div>
            <label for="phone">phone</label>
            <input type="text" id="phone" name="phone">
        </div>

        <br>
        <button type="submit" name="submit_button" value="1">Submit</button>
    </form>
</body>
</html>
