<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numbers to Words Calculator</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #444;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }

        p {
            font-size: 16px;
            color: #333;
            margin-top: 10px;
        }

        strong {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Numbers to Words Calculator</h2>
        <form method="post">
            <label>Please input your data:</label>
            <input type="text" name="number" required>
            <input type="submit" name="convert" value="Convert">
        </form>

        <?php
        if (isset($_POST['convert'])) {
            $number = intval($_POST['number']);
        
            $englishWords = ucwords(numberToWords($number)) . " Riel";
            $khmerWords = khmerNumberToWords($number) . " រៀល";
            $usd = round($number / 4000, 2);
            $usdText = "$usd $";
        
            echo "<p><strong>a. English:</strong> $englishWords</p>";
            echo "<p><strong>b. Khmer Words:</strong> $khmerWords</p>";
            echo "<p><strong>c. USD:</strong> $usdText</p>";
        
            $log = "Input: $number\nEnglish: $englishWords\nKhmer: $khmerWords\nUSD: $usdText\n---\n";
            file_put_contents("results.txt", $log, FILE_APPEND);
        }

        function numberToWords($number) {
            $words = array(
                0 => "zero", 1 => "one", 2 => "two", 3 => "three", 4 => "four",
                5 => "five", 6 => "six", 7 => "seven", 8 => "eight", 9 => "nine",
                10 => "ten", 11 => "eleven", 12 => "twelve", 13 => "thirteen",
                14 => "fourteen", 15 => "fifteen", 16 => "sixteen", 17 => "seventeen",
                18 => "eighteen", 19 => "nineteen", 20 => "twenty", 30 => "thirty",
                40 => "forty", 50 => "fifty", 60 => "sixty", 70 => "seventy",
                80 => "eighty", 90 => "ninety"
            );

            if ($number < 21) return $words[$number];
            elseif ($number < 100) return $words[10 * floor($number / 10)] . ($number % 10 ? " " . $words[$number % 10] : "");
            elseif ($number < 1000) return $words[floor($number / 100)] . " hundred" . ($number % 100 ? " and " . numberToWords($number % 100) : "");
            elseif ($number < 1000000) return numberToWords(floor($number / 1000)) . " thousand" . ($number % 1000 ? " " . numberToWords($number % 1000) : "");
            else return "number too large";
        }

        function khmerNumberToWords($number) {
            $khmer = [
                0 => 'សូន្យ', 1 => 'មួយ', 2 => 'ពីរ', 3 => 'បី', 4 => 'បួន',
                5 => 'ប្រាំ', 6 => 'ប្រាំមួយ', 7 => 'ប្រាំពីរ', 8 => 'ប្រាំបី', 9 => 'ប្រាំបួន',
                10 => 'ដប់', 20 => 'ម្ភៃ', 30 => 'សាមសិប', 40 => 'សែសិប', 50 => 'ហាសិប',
                60 => 'ហុកសិប', 70 => 'ចិតសិប', 80 => 'ប៉ែតសិប', 90 => 'កៅសិប',
            ];

            if ($number == 0) return $khmer[0];
            if ($number <= 10) return $khmer[$number];
            if ($number < 20) return 'ដប់' . $khmer[$number % 10];

            if ($number < 100) {
                $tens = floor($number / 10) * 10;
                $units = $number % 10;
                return $khmer[$tens] . ($units ? $khmer[$units] : '');
            }

            if ($number < 1000) {
                $hundreds = floor($number / 100);
                $remainder = $number % 100;
                return $khmer[$hundreds] . ' រយ' . ($remainder ? ' ' . khmerNumberToWords($remainder) : '');
            }

            if ($number < 10000) {
                $thousands = floor($number / 1000);
                $remainder = $number % 1000;
                return $khmer[$thousands] . ' ពាន់' . ($remainder ? ' ' . khmerNumberToWords($remainder) : '');
            }

            if ($number < 1000000) {
                $thousands = floor($number / 1000);
                $remainder = $number % 1000;
                return khmerNumberToWords($thousands) . ' ពាន់' . ($remainder ? ' ' . khmerNumberToWords($remainder) : '');
            }

            return "ចំនួនធំពេក";
        }
        ?>
    </div>
</body>
</html>
