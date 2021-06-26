<?php

    if (isset($_POST['submit'])) 
    {
        $mobile = $_POST['mobile'];
        $message = $_POST['message'];    
        $fields = array(
            "message" => "$message",
            "language" => "english",
            "route" => "q",
            "numbers" => "$mobile",
        );
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($fields),
          CURLOPT_HTTPHEADER => array(
            "authorization: oPGgx5L9viwWZmacfRVYSHX3ery0sj2CzF4NOAl6hD71kUuM8pPBMrSW6Eg1OtqYoJIe4hiX9x5HGpZC",
            "accept: */*",
            "cache-control: no-cache",
            "content-type: application/json"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) 
        {
          echo "<script>alert('Failed to send message! contact Developer.');</script>";
        }
        else 
        {
            echo "<script>alert('Hurrey! MESSAGE SENT SUCCESSFULLY');</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS APP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="dp.jpeg" type="image/gif" sizes="16x16">
</head>
<body>
    <!-- Header Section Starts Here -->
    <header class="text-center">
        <h1>SMS APPLICATION</h1>
    </header>
    <!-- Header Section Ends Here -->

    <!-- Main Section Starts Here -->
    <main>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td><label for="mobile"><strong>Mobile No :</strong></label></td>
                    <td><input type="tel" name="mobile" placeholder="Enter Your Mobile Number" class="text-center" require></td>
                </tr>
                <tr>
                    <td><label for="message"><strong>Type A Message :</strong></label></td>
                    <td><textarea name="message" id="message" cols="30" rows="10" placeholder="Enter Your Message" class="text-center" require></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <input type="submit" name="submit" value="Send Message" class="btn" >
                    </td>
                </tr>
            </table>
        </form>
    </main>
    <!-- Main Section Ends Here -->

    <!-- Footer Section Starts Here -->
    <footer class="text-center">
        <section class="social">
            <div>    
                <ul>
                    <li>
                        <a href="https://www.facebook.com/Dhirenkumar-Rathod-101251368365284" target="blank" title="Facebook">

                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="30px" height="30px"><linearGradient id="Ld6sqrtcxMyckEl6xeDdMa" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2aa4f4"/><stop offset="1" stop-color="#007ad9"/></linearGradient><path fill="url(#Ld6sqrtcxMyckEl6xeDdMa)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"/><path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"/></svg></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/dhirenkumar_rathod/" target="blank" title="Instagram">
<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="30px" height="30px"><radialGradient id="yOrnnhliCrdS2gy~4tD8ma" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"/><stop offset=".328" stop-color="#ff543f"/><stop offset=".348" stop-color="#fc5245"/><stop offset=".504" stop-color="#e64771"/><stop offset=".643" stop-color="#d53e91"/><stop offset=".761" stop-color="#cc39a4"/><stop offset=".841" stop-color="#c837ab"/></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/><radialGradient id="yOrnnhliCrdS2gy~4tD8mb" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"/><stop offset=".999" stop-color="#4168c9" stop-opacity="0"/></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"/><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"/><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"/></svg></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/c/DhirenkumarRathod" target="blank" title="Youtube">
<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 100 100" width="30px" height="30px"><path fill="#1f212b" d="M29,15h4l2.875,10.375h0.25L39,15h4l-5,16v10h-4V31L29,15z"/><path fill="#1f212b" d="M52.492,22.99c-1.001-0.993-2.279-1.49-3.847-1.49c-1.727,0-3.091,0.473-4.108,1.419	c-1.025,0.93-1.537,2.2-1.537,3.776v8.612c0,1.734,0.497,3.122,1.49,4.147C45.491,40.48,46.808,41,48.472,41	c1.727,0,3.075-0.497,4.052-1.498c0.978-1.001,1.466-2.373,1.466-4.123v-8.565C53.99,25.253,53.494,23.976,52.492,22.99z M50,36	c0,0.828-0.672,1.5-1.5,1.5S47,36.828,47,36c0-0.644,0-8.856,0-9.5c0-0.828,0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5	C50,27.144,50,35.356,50,36z"/><path fill="#1f212b" d="M64,22v14.204c-0.64,0.666-1.466,1.296-2.125,1.296C61.392,37.5,61,37.108,61,36.625V22h-4	c0,0,0,15.346,0,16.438C57,39.853,58.147,41,59.562,41c1.644,0,3.354-1.03,4.438-2.286V41h4V22H64z"/><path fill="#f15b6c" d="M21,64.5c0,5.75,0.185,10.985,0.512,12.5c0.352,1.631,1.12,3.113,2.247,4.24	c1.128,1.128,2.608,1.895,4.24,2.247C30.375,84,42,84,49.999,84c8,0,19.626,0,22.001-0.513c1.631-0.352,3.112-1.12,4.24-2.247	c1.128-1.128,1.895-2.609,2.247-4.24C78.815,75.484,79,70.251,79,64.5h-0.001c0-5.75-0.184-10.984-0.511-12.499	c-0.352-1.631-1.12-3.112-2.247-4.24s-2.608-1.895-4.24-2.247C69.625,45,57.999,45,49.999,45s-19.625,0-22,0.513	c-1.631,0.352-3.112,1.12-4.24,2.247s-1.895,2.609-2.247,4.24C21.185,53.516,21,58.75,21,64.5z"/><path fill="#1f212b" d="M50.23,85c-0.155,0-0.308,0-0.461,0c-10.306,0-19.705-0.043-21.98-0.535	c-1.851-0.4-3.489-1.271-4.735-2.518c-1.248-1.247-2.118-2.885-2.518-4.735C20.141,75.386,20,69.448,20,64.5	s0.141-10.885,0.535-12.71c0.4-1.851,1.271-3.489,2.518-4.736s2.884-2.117,4.735-2.518C30.082,44.04,39.611,43.997,50,44	c0.078,0,0.157,0,0.234,0c10.306,0,19.702,0.043,21.978,0.535c1.851,0.4,3.489,1.271,4.735,2.518	c1.247,1.247,2.118,2.885,2.518,4.736c0.394,1.823,0.534,7.761,0.534,12.71c0.001,4.719-0.138,10.88-0.534,12.712	c-0.4,1.851-1.271,3.488-2.518,4.735c-1.247,1.247-2.884,2.118-4.735,2.518C69.936,84.957,60.536,85,50.23,85z M50,83	c7.304-0.003,19.516,0.001,21.789-0.49c1.475-0.319,2.77-1.002,3.744-1.977c0.975-0.975,1.659-2.27,1.977-3.744	C77.803,75.433,78,70.494,78,64.5c-0.001-5.999-0.198-10.938-0.49-12.289c-0.318-1.475-1.002-2.77-1.977-3.745	s-2.269-1.658-3.744-1.977C69.515,46,57.3,45.995,50,46c-7.291,0.007-19.514,0-21.788,0.49c-1.475,0.318-2.77,1.002-3.744,1.977	c-0.975,0.975-1.659,2.27-1.977,3.745C22.197,53.567,22,58.505,22,64.5s0.197,10.933,0.49,12.289	c0.318,1.475,1.002,2.769,1.977,3.744c0.975,0.975,2.269,1.658,3.744,1.977C30.485,83.001,42.7,83.003,50,83z"/><polygon fill="#fff" points="38,51 26,51 26,55.065 30,55.065 30,77 34,77 34,55.065 38,55.065"/><path fill="#fff" d="M45,58v13.625c0,0-1.25,1.375-2.25,1.375C42.336,73,42,72.664,42,72.25V58h-4c0,0,0,15.501,0,16.063	C38,75.685,39.315,77,40.937,77c1.771,0,3.183-1.154,4.063-2v2h4V58H45z"/><path fill="#fff" d="M57.875,57.5c-0.679,0-1.31,0.18-1.875,0.47V51h-4v26h4v-0.47c0.565,0.29,1.196,0.47,1.875,0.47	C60.153,77,62,75.153,62,72.875c0-1.487,0-9.765,0-11.25C62,59.347,60.153,57.5,57.875,57.5z M58,73.188	C58,73.636,57.636,74,57.187,74C56.375,74,56,73.375,56,73.375v-11.75c0,0,0.375-0.625,1.187-0.625C57.636,61,58,61.364,58,61.813	C58,62.196,58,72.802,58,73.188z"/><path fill="#fff" d="M75,68c0-1.927,0-4.017,0-5c0-3.038-2.462-5.5-5.5-5.5S64,59.962,64,63c0,1.712,0,6.788,0,8.5	c0,3.038,2.462,5.5,5.5,5.5s5.5-2.462,5.5-5.5c0-0.366,0-0.892,0-1.5h-4c0,0,0,1.672,0,2.5S70.328,74,69.5,74S68,73.328,68,72.5	s0-4.5,0-4.5H75z M69.5,61c0.828,0,1.5,0.672,1.5,1.5c0,0.344,0,2.5,0,2.5h-3c0,0,0-1.672,0-2.5S68.672,61,69.5,61z"/></svg></a>
                    </li>
                </ul>
            </div>
        </section>
        <h2>All Rights Reserved || Developed By <a href="#" title="Dhirenkumar Rathod">Dhirenkumar Rathod</a></h2>
    </footer>
    <!-- Footer Section Ends Here -->
</body>
</html>