<?php

// Define the classify_sentence() function
function classify_sentence($sentence){
    $url='http://localhost:9000/classify';
    $data = http_build_query(array('sentence' => $sentence));
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => $data
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response  = json_decode($result, true);
    if ($response && isset($response['classification'])) {
        return $response['classification'];
    } else {
        return "Error: Unable to classify sentence.";
    }
}

// Handle form submission
// if (isset($_POST['submit'])) {
//     $sen = $_POST['sen'];
//     $result = classify_sentence($sen);
//     echo htmlspecialchars($result);
// } else {
//     echo "No data submitted.";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentiment Analysis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            background-image: url(em_img.jpg);
            background-repeat: repeat;
            background-size: 200px;
        }
        form {
            margin: 50px auto;
            padding: 20px;
            max-width: 500px;
            background-color: #fff;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.2);
            border-radius: 5px;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            height: 40px;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            height: 40px;
            background-color: #4CAF50;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
        .classification {
            text-align: center;
            margin-top: 20px;
            font-size: 20px;
            text-transform: capitalize;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="sen">Enter Your Sentence:</label>
            <input required type="text" name="sen" id="sen">
            <input type="submit" name="submit" value="Submit">
            
    </form>
    <?php
    // Check if form was submitted
    if (isset($_POST['submit'])) {
        // Call classify_sentence() function and get result
        $sen = $_POST['sen'];
        $result = classify_sentence($sen);
        // Display the classification result below the input form
        echo '<div class="classification">';
        echo '<strong>The sentiment of your sentence is:</strong> <span text-transform: capitalize; style="color: red; font-weight: bold" text-transform: capitalize;>' . htmlspecialchars($result) . '</span>';
        echo '</div>';
    }
    ?>
</body>
</html>