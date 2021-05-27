<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Received | foodgarage</title>
    <style>
        button {
            margin: auto;
            display: block;
            background-color: #008f97;
			border-radius: 12px;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            padding: 10px 24px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <header>
        <h1 style="text-align:center">RECIEVED!</h1>
    </header>

    <div>
        <p style="text-align:center">Your order has been saved. Your delivery will be placed soon. Stay safe, stay fine.</p>
        <button onclick="window.location='{{ route('index') }}'">Home</button>
    </div>

    <footer>
        <p style="text-align:center">Copyright ©foodgarage | All Rights Reserved</p>
    </footer>
</body>
</html>
