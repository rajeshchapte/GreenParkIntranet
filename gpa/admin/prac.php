<!DOCTYPE>

<html>
<head>
    <title>Test</title>

    <script type="text/javascript">
        function loadIt() {
            $.ajax({
                url: "about.html",
                cache: false,
                success: function (data) {
                    $("#content").empty();
                    $(data).hide().appendTo($("#content")).slideDown();
                },
                error: function () {
                    alert("something went wrong");
                }
            });
        }
    </script>
</head>
<body>
    <input type="button" id="button1" value="Load About" onclick="loadIt();" />

    <br />

    <div id="content" style="width: 400px; height: 400px; border: 1px solid #000;">

    </div>
</body>
</html>