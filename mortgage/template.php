    <meta content="width=device-width, initial-scale=1" name="viewport" />
<head>
    <style type="text/css">
        
        .main{
            width:95%;
            background-color: #ffffff;
            margin: auto;
            overflow: auto;
            font-family:  Arial, Helvetica, sans-serif;
        }
        .container{
            width: 70%;
            background-color: rgb(229, 229, 229);
            margin:auto;
            margin-top: 20px;
            margin-bottom: 30px;
            overflow: auto;
            padding-bottom: 30px;
            padding-right: 30px;
            padding-left: 30px;
            border-radius: 10px;
            box-sizing: border-box;

        }
        .label{
            text-align: center;
            margin-top: 20px;
        }
        .value{
            width: 50%;
            height: 40px;
            background-color: #ffffff;
            margin: auto;
            margin-top: 20px;
            text-align: center;
            font-size: 25px;
            line-height: 40px;
            border-radius: 5px;
        }
        .result{
            width: 100%;
            height: 270px;
            background-color: #8BBE6C;
            margin-top: 30px;
            color:#ffffff;
            font-weight: 500;   
            border-radius: 10px;
        }
        .resultpar {
            text-align: center;
            font-size: 50px;
            line-height:60px;
            margin: 0;
            position: relative;
            top: 50%;
            transform: translateY(-50%);

        }
        .label:not(:first-child) {
            margin-top: 30px
        }
        .header{
            width: 70%;
            margin:auto;
            margin-top: 30px;
            margin-bottom: 20px;
            overflow: auto;
            border-radius: 10px;
            box-sizing: border-box;
        }

        img{
            max-width: 150px;
            display: block;
            margin:auto;
        }

        @media screen and (max-width: 600px) {
            .container {
                width:100%;
                box-sizing: border-box;
            }
            .header {
                width:100%;
            }
        }
    </style>
</head>
<body>
    <style type="text/css">
        
        .main{
            width:95%;
            background-color: #ffffff;
            margin: auto;
            overflow: auto;
            font-family:  Arial, Helvetica, sans-serif;
        }
        .container{
            width: 70%;
            background-color: rgb(229, 229, 229);
            margin:auto;
            margin-top: 20px;
            margin-bottom: 30px;
            overflow: auto;
            padding-bottom: 30px;
            padding-right: 30px;
            padding-left: 30px;
            border-radius: 10px;
            box-sizing: border-box;

        }
        .label{
            text-align: center;
            margin-top: 20px;
        }
        .value{
            width: 50%;
            height: 40px;
            background-color: #ffffff;
            margin: auto;
            margin-top: 20px;
            text-align: center;
            font-size: 25px;
            line-height: 40px;
            border-radius: 5px;
        }
        .result{
            width: 100%;
            height: 270px;
            background-color: #8BBE6C;
            margin-top: 30px;
            color:#ffffff;
            font-weight: 500;   
            border-radius: 10px;
        }
        .resultpar {
            text-align: center;
            font-size: 50px;
            line-height:60px;
            margin: 0;
            position: relative;
            top: 50%;
            transform: translateY(-50%);

        }
        .label:not(:first-child) {
            margin-top: 30px
        }
        .header{
            width: 70%;
            margin:auto;
            margin-top: 30px;
            margin-bottom: 20px;
            overflow: auto;
            border-radius: 10px;
            box-sizing: border-box;
        }

        img{
            max-width: 250px;
            display: block;
            margin:auto;
        }

        @media screen and (max-width: 600px) {
            .container {
                width:100%;
                box-sizing: border-box;
            }
            .header {
                width:100%;
            }
        }
    </style>


    <div class="main">
        <div class="header">
            <img src="http://stewart.wedesignuk.co.uk/wp-content/uploads/2019/09/logo.png">
            <p style="text-align: center; font-size: 35px; margin-bottom: 0px; margin-top:25px;">Mortgage Calculator</p>
            {{email}}
        </div>
        <div class="container">

            <p class='label'>{{value_txt}}</p>
            <p class="value">{{deal_value}}</p>

            <p class='label'>{{dep_eq_label}}</p>
            <p class="value">{{deposit}}</p>

            <p class='label'>Total borrowed</p>
            <p class="value">{{totalAmount}}</p>

            <p class='label'>Loan term (months)</p>
            <p class="value">{{loanTerm}}</p>

            <p class='label'>{{rep_int_label}}</p>
            <p class="value">{{rep_inter_val}}</p>

            <div class="result">
                <p style = 'height: 70px; line-height: 70px; text-align: center; margin:0; font-size: 40px;'>{{result_txt}}</p>
                <div style = "height: 100%; box-sizing: border-box; padding-top: 70px; margin-top: -70px;">
                    <p class="resultpar">{{dollar}} {{paymentMonth}} {{result_append}}</p>
                </div>
                
            </div>
        </div>

    </div>
</body>