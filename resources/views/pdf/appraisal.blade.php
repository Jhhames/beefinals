<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appraisal</title>
    
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
            text-align: left !important;
            
        }

        .appraisal span {
            font-size: 16px;
            font-weight: bold;
            text-align: left !important;
            display: block;
            margin-left: -2px;
            text-decoration: underline;
        }

        .app-container{
            /* border: 1px solid gray; */
        }

        h4.for{
            text-transform: capitalize;
            font-weight: normal;
        }
    </style>
</head>
<body>
    <h2> Employee manangement system </h2>
    <small> Naccoss Library, Faculty of tech; Obefemi Awolowo University </small>
    <h3>performance appraisal report</h3>
    {{-- </h3> --}}
    
    <h6> Report for the year {{ Date('Y') }} </h6>
    <h4 class="for"> For : {{$name}} </h4>

    <hr>
    <div class="app-container">
            
        <p class="appraisal">
            <span>Report Summary</span>
            {{ $summary }}
        </p>
        <p class="appraisal">
            <span>Appraisal Report</span>
            {{ $report }}
        </p>
        
    </div>
    <hr>
    <h4>Appraised by : {{ $appraised_by  }}</h4>

</body>
</html>