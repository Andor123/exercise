<!DOCTYPE html>
<html>
<head>
    <script language="JavaScript" type="text/javascript">
        function CheckData45() {
            with(document.filepost) {
                if(filea.value != "") {
                    document.getElementById('one').innerText =
                        "Attaching File... Please Wait";
                }
            }
        }
    </script>
</head>
<body>
<table width="100%" border="0"
       cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
            <form name="filepost" method="post"
                  action="file.php" enctype="multipart/form-data" id="file">
                <table width="300" border="0"
                       cellspacing="0" cellpadding="0">
                    <tr valign="bottom">
                        <td height="20">Your name:</td>
                    </tr>
                    <tr>
                        <td>
                            <input name="from" type="text" id="from" size="30">
                        </td>
                    </tr>
                    <tr valign="bottom">
                        <td height="20">Your Email Address:</td>
                    </tr>
                    <tr>
                        <td class="frmtxt2">
                            <input name="emaila" type="text" id="emaila" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td height="20" valign="bottom">Attach File:</td>
                    </tr>
                    <tr valign="bottom">
                        <td valign="bottom">
                            <input name="filea" type="file" id="filea" size="16">
                        </td>
                    </tr>
                    <tr>
                        <td height="40" valign="middle">
                            <input name="Reset2" type="reset"
                                   id="Reset2" value="Reset">
                            <input name="Submit2" type="submit"
                                   id="Submit2" value="Submit" onclick="CheckData45()">
                        </td>
                    </tr>
                </table>
            </form>
            <section>
                <table width="400">
                    <tr>
                        <td id="one"></td>
                    </tr>
                </table>
            </section>
        </td>
    </tr>
</table>
</body>
</html>