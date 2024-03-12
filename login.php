<html>
    <head>
    </head>
    <body>
        <script>
            // Listen for authorization success.
            document.addEventListener('AppleIDSignInOnSuccess', (event) => {
                // Handle successful response.
                console.log(event.detail.data);
            });


            // Listen for authorization failures.
            document.addEventListener('AppleIDSignInOnFailure', (event) => {
                // Handle error.
                console.log(event.detail.error);
            });
        </script>
    </body>
</html>