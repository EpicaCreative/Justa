<html>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        

        let get_parameter = link => 
        {
            let url = new URL(link);
            return url.searchParams.get("ref");
        }

        let register_access = () => 
        {
            $.ajax({
                url: 'ws/ws_qr_code.php',
                type: 'POST',
                data: {
                    ref: get_parameter(window.location.href)
                },
                success: response => console.log(response),
                error: response =>  console.log(response)
            });
        }

        register_access();
    </script>
    <?php
header('Location: https://bit.ly/2PXFHDjFACEBOOKdaJUSTA');
?>
</html>

