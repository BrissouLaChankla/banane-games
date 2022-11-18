<!DOCTYPE html>
<html>
<head>
    <title>BananeGames.fr</title>
</head>
<body>
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
        <tr>
            <td align="center" valign="top">
                <table border="0" cellpadding="20" cellspacing="0" width="600" id="emailContainer">
                    <tr>
                        <td align="center" valign="top">
                            <table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailHeader">
                                <tr>
                                    <td align="center" valign="center">
                                        <div style="background-color:#C90A4C; text-align:center" align="center">
                                            <br>
                                            <br>
                                                <img src="{{asset('img/logo_nanagames.webp')}}" height="80" alt="Logo BananeGames">
                                            <br>
                                            <br>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                            <table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailBody">
                                <tr>
                                    <td align="center" valign="top">
                                        <p>
                                            {!! nl2br(e($mailData['body'])) !!}
                                            <br>
                                            <br>
                                            <br>
                                            <i>Répondre à ce mail : <a href="mailto:{!! $mailData['email'] !!}">{!! $mailData['email'] !!}</a></i>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                            <table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailFooter">
                                <tr>
                                    <td align="center" style="border-top:1px solid gray" valign="top">
                                        This is where my footer content goes. <br>
                                        <img src="{{asset('img/mister-nanaba/nanathumb.webp')}}" height="80" alt="Nanathumb BananeGames">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>
</html>
