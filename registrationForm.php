<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            background: yellow;
            padding: 10px;
        }
    </style>
</head>
<body>
    <form action="register.php" method="get">
    <table style="text-align: left;">
        <tr>
            <th>name:</th>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <th>
                gender
            </th>
            <td>
                <input type="checkbox" name="sex" value="male">
                <br>
                <input type="checkbox" name="sex" value="female">
            </td>
        </tr>
        <tr>
            <th>
                professional field
            </th>
            <td>
                <select name="field" id="field">
                    <option value="dean">dean</option>
                    <option value="senior lecture">senior lecture</option>
                    <option value="lecturer">lecturer</option>
                    <option value="demonstrator">demonstrator</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                Email
            </th>
            <td>
                <input type="text" name="email">
            </td>
        </tr>
        <tr>
            <th>
                Subject Area
            </th>
            <td>
                <input type="checkbox" name="area[]" value="dbms"> DBMS <br>
                <input type="checkbox" name="area[]" value="java"> java <br>
                <input type="checkbox" name="area[]" value="networking"> networking <br>
                <input type="checkbox" name="area[]" value="information_security"> information security <br>
                <input type="checkbox" name="area[]" value="Design_Patterns"> Design Patterns <br>
            </td>
        </tr>
        <tr>
            <th>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            </th>
            <td>
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
