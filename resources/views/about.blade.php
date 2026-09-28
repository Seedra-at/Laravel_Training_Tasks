<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f5;
            padding: 40px;
            direction: rtl;
        }

        h1 {
            color: #0b4229;
        }

        p {
            color: #555;
        }

        table {
            width: 80%;
            margin-top: 30px;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background-color: #0b4229;
            color: white;
            padding: 15px;
        }

        td {
            padding: 13px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f0f6f2;
        }
    </style>
</head>

<body>

    <h1>مرحبا بكم في موقعي</h1>

    <p>
        هذه أول صفحة Blade أقوم بإنشائها باستخدام Laravel
    </p>

    <table>

        <thead>
            <tr>
                <th>المنتج</th>
                <th>الشركة</th>
                <th>السعر</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($products as $product)

                <tr>

                    @foreach ($product as $item)

                        <td>
                            {{ $item }}
                        </td>

                    @endforeach

                </tr>

            @endforeach

        </tbody>

    </table>

</body>

</html>