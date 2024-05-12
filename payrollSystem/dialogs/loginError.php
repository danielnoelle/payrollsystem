<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../resources/components/head.html'); ?>
    <title>Login Error</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .video-bg {
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            z-index: -1;
        }

        .video-bg video {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .swal2-title {
            font-family: var(--header-text-font);
            font-family: 2vw;
        }

        .swal2-html-container {
            font-family: var(--body-text-font);
            font-size: 1.3vw;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="video-bg">
            <video src="../resources/videos/bg.mp4" autoplay muted loop></video>
        </div>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '<?php echo isset($_SESSION["errorMessage"]) ? $_SESSION["errorMessage"] : "An error occurred"; ?>',
                showConfirmButton: true,
                confirmButtonText: 'Okay',
            }).then((result) => {
                window.location.href = '../views/login.php';
            });
        </script>
</body>

</html>