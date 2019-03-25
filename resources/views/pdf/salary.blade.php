<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salary Slip</title>
    <style>
                body{
            /* background: url('/img/background.jpg'); */
            width: 80%;
            /* border: 1px solid #777; */
            margin: auto;
            text-align: center;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 5px 0;
        }

        h2,h3{
            text-transform: uppercase;
        }

        .emp-name{
            font-weight: normal;
            text-transform: capitalize;
        }

        .appraisal{
            margin-top: 20px;
        }

        .appraisal span {
            font-size: 16px;
            font-weight: bold;
            text-align: left;
            display: block;
            margin-left: 10px;
            text-decoration: underline;
        }

        .app-container{
            /* border: 1px solid gray; */
            padding: 10px;
        }

        h4.for{
            text-transform: capitalize;
            font-weight: normal;
        }
        .main-container{
            border: 1px solid #777777;
        }

        table{
            width: 80%;
            margin: auto;
            text-align: left;
            
        }

        th,td{
            outline:2px solid #777777;
            padding:5px;
        }


    </style>
</head>
<body>
    <div class="main-container">
        <h2> Employee manangement system </h2>
        <small> Naccoss Library, Faculty of tech; Obefemi Awolowo University </small>
        <h3>Salary Slip</h3>
        {{-- </h3> --}}
        
        <h6>{{ Date('F')}} ,{{ Date('Y') }} </h6>
        <h4 class="for"> For : {{$name}} </h4>
    
        <hr>
        <div class="app-container">
                
            <table>
                <thead>
                    <tr>
                        <th colspan="2">
                            Earning
                        </th>
                        <th colspan="2">
                            Deductions
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>
                            Basic and DA
                        </td>
                        <td> 
                            {{ number_format($salary,2,".",",") }}
                        </td>
                        <td>
                            Professional Tax
                        </td>
                        <td>
                            {{ number_format($tax,2,".",",") }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Overtime
                        </td>
                        <td> {{ number_format(2000,2,".",",") }} </td>
                        <td>
                            Loan         
                        </td>
                        <td>
                            -
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Total Addition
                        </td>
                        <td> {{ number_format($salary + 2000,2,".",",") }} </td>
                        <td>
                            Total Deductions
                        </td>
                        <td> 
                            {{ number_format($tax,2,".",",") }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                        <td></td>
                        <td>
                            <strong>
                                Net Salary
                            </strong>
                        </td>
                        
                        <td>
                            <strong>
                                {{ number_format($net +2000,2,".",",") }}
                            </strong>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>
        
    </div>
</body>
</html>