<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>

    <style>
        .wrapper{
            min-width: 100%;
            padding: 0px;
            margin: 0px;
        }

        .header{
            background-color: #eef1f6;
            padding: 15px;
            display: flex;
            justify-content: center;
        }

        .header-text{
            color: #CD4236;
            text-align: center;
        }

        .body{
            min-width: 60%;
            margin: auto;
        }

        .point{
            color: #1C375B;
        }

        table{
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin: auto;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            width: 50%;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <h2 class="header-text"><span style="color: #1C375B;">ITE</span> Counsel</h2>
        </header>

        <section class="body">
            <table class="info-table" cell-padding="5">
                <tbody>
                    <tr>
                        <td><strong class="point">Student Name: </strong></td>
                        <td>{{$details['fullname']}}</td>
                    </tr>
                    <tr>
                        <td><strong class="point">Email Address: </strong></td>
                        <td>{{$details['email']}}</td>
                    </tr>
                    <tr>
                        <td><strong class="point">Contact: </strong></td>
                        <td>{{$details['contact']}}</td>
                    </tr>
                    <tr>
                        <td><strong class="point">Nationality: </strong></td>
                        <td>{{$details['nationality']}}</td>
                    </tr>
                    <tr>
                        <td><strong class="point">Course Code: </strong></td>
                        <td>{{$details['course_code']}}</td>
                    </tr>
                    <tr>
                        <td><strong class="point">Course Name: </strong></td>
                        <td>{{$details['course_name']}}</td>
                    </tr>
                    <tr>
                        <td><strong class="point">Organization: </strong></td>
                        <td>{{$details['work']}}</td>
                    </tr>
                    <tr>
                        <td><strong class="point">Designation: </strong></td>
                        <td>{{$details['designation']}}</td>
                    </tr>
                    <tr>
                        <td><strong class="point">Relevant work experience: </strong></td>
                        <td>{{$details['experience_one']}}</td>
                    </tr>
                    <tr>
                        <td><strong class="point">Address: </strong></td>
                        <td>{{$details['live']}}</td>
                    </tr>
                    <tr>
                        <td><strong class="point">Query: </strong></td>
                        <td>{{$details['question']}}</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>