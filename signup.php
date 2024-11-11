<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            transform-style: preserve-3d;
            perspective: 1000px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50vh;
        }

        .pane {
            outline: 2px solid #ffb3c6;
            box-shadow: 0 0 10px #00ff6a77, inset 0 0 10px #00ff6a77;
            height: 1cm;
            width: 9cm;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
            transition: 0.7s ease;
        }

        .input {
            display: none;
        }

        .label {
            height: 1cm;
            width: 3cm;
            float: left;
            font-weight: 600;
            letter-spacing: -1px;
            font-size: 14px;
            padding: 0px;
            position: relative;
            z-index: 1;
            color: #ff8fab;
            text-align: center;
            padding-top: 10px;
        }

        .selection {
            display: none;
            position: absolute;
            height: 1cm;
            width: calc(9cm / 3);
            z-index: 0;
            left: 0;
            top: 0;
            box-shadow: 0 0 10px #00ff6a77;
            transition: .15s ease;
        }

        .label:has(input:checked) {
            color: #fe036a;
        }

        .pane:has(.label:nth-child(1):hover) {
            transform: rotateY(-30deg);
        }

        .pane:has(.label:nth-child(3):hover) {
            transform: rotateY(35deg);
        }

        .label:has(input:checked) ~ .selection {
            background-color: #ffe5ec   ;
            display: inline-block;
        }

        .label:nth-child(1):has(input:checked) ~ .selection {
            transform: translateX(calc(9cm * 0/3));
        }

        .label:nth-child(2):has(input:checked) ~ .selection {
            transform: translateX(calc(9cm * 1/3));
        }

        .label:nth-child(3):has(input:checked) ~ .selection {
            transform: translateX(calc(9cm * 2/3));
        }

        body {
            animation-name: weng;
            background-color: #f5e1fd;
            animation-duration: 2s;
            animation-iteration-count: infinite;      }

        @keyframes weng {
            0% {background-color: #f5e1fd;}
            25% {background-color: #FDF4DC;}
            50% {background-color: #FFE5EC;}
            75% {background-color: #FDF4DC;}
            100% {background-color: #f5e1fd;}
        }
        h1 {
            text-align: center;
            color: #c238b5; 
            font-size: 40px;
            font-family: comic sans ms;      }
    </style>
</head>
<body>
    <h1> itutuloy ko pa ba iteks ???? </h1>
    
    <div class="container">
        <div class="pane">
            <label class="label">
                <span>yuzzz</span>
                <input id="left" class="input" name="radio" type="radio">
            </label>
            <label class="label">
                <span>naur never no</span>
                <input id="middle" class="input" checked="checked" name="radio" type="radio">
            </label>
            <label class="label">
                <span>miss ko na siya</span>
                <input id="right" class="input" name="radio" type="radio">
            </label>
            <span class="selection"></span>
        </div>
    </div>
</body>
</html>
