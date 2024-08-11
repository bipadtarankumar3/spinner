<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($type == 'ADMIN')

        <table style="width: 100%; background: #f5f5f5; margin: 0 auto; border-spacing: 0px; ">
            <tr>
                <td style="text-align: center; padding: 15px; padding-bottom: 0px;">
                <table style="width: 100%; border-spacing: 0px; ">
                    <tr>
                        <td style="padding: 50px 20px;  background: #fff;">
                            <h4 style="font-family: 'Open Sans',serif ; font-weight: 600; color: #000000; text-align: center; margin: 0px;     font-size: 30px;">Form Data</h4>
                        </td>
                    </tr>
                </table>

                </td>
            </tr>
            <tr>
                <td style="padding: 15px; padding-top: 0px;">
                    <table style="width: 100%; border-spacing: 0px; ">
                        <tr>
                            <td style="padding: 40px 30px; font-family: 'Open Sans',serif ; background: #fff; padding-top: 0px;">
                                    <p style="font-size: 14px; margin-bottom: 0px; margin-top: 5px; text-align: left;"><b style="float: left;">Date :</b> <span style="margin-left: 5px">{{date('d/m/Y')}}</span></p>
                                    <p style="font-size: 14px; margin-bottom: 0px; margin-top: 5px; text-align: left;"><b style="float: left;">Campaign Name :</b> <span style="margin-left: 5px">{{$getData['camping_name']}}</span></p>
                                    <p style="font-size: 14px; margin-bottom: 0px; margin-top: 5px; text-align: left;"><b style="float: left;">Prize Name :</b> <span style="margin-left: 5px">{{$getData['spinner_name']}}</span></p>
                                    <p style="font-size: 14px; margin-bottom: 0px; margin-top: 5px; text-align: left;"><b style="float: left;">Name :</b> <span style="margin-left: 5px">{{$getData['name']}}</span></p>
                                    <p style="font-size: 14px; margin-bottom: 0px; margin-top: 5px; text-align: left;"><b style="float: left;">Email :</b> <span style="margin-left: 5px">{{$getData['email']}}</span></p>

                                    <p style="font-size: 14px; margin-bottom: 0px; margin-top: 5px; text-align: left;"><b style="float: left;">Phone :</b> <span style="margin-left: 5px">{{$getData['phone']}}</span></p>
                                    <p style="font-size: 14px; margin-bottom: 0px; margin-top: 5px; text-align: justify;"><b style="float: left;">Screenshot :</b> <span style="margin-left: 5px"><img src="{{$getData['schreenshot']}}" alt="" width="90px"></span></p>

                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td  style="padding: 20px 20px; font-family: 'Open Sans',serif ; ">
                                <p style=" margin-top: 0px; color: #333333; line-height: 18px; font-size: 13px; text-align: center;">This e-mail is automatically generated. Answers to this email address will not be read.</p>


                                <p style="margin: 0px; color: #888888; font-size: 13px; text-align: center;"></p>
                            </td>
            </tr>

        </table>


    @else
        <table style="width: 100%; background: #f5f5f5; margin: 0 auto; border-spacing: 0px; ">
            <tr>
                <td style="text-align: center; padding: 15px; padding-bottom: 0px;">
                <table style="width: 100%; border-spacing: 0px; ">
                    <tr>
                        <td style="padding: 50px 20px;  background: #fff;">
                            <h4 style="font-family: 'Open Sans',serif ; font-weight: 600; color: #000000; text-align: center; margin: 0px;     font-size: 30px;">Form Data</h4>
                        </td>
                    </tr>
                </table>

                </td>
            </tr>
            <tr>
                <td style="padding: 15px; padding-top: 0px;">
                    <table style="width: 100%; border-spacing: 0px; ">
                        <tr>
                            <td style="padding: 40px 30px; font-family: 'Open Sans',serif ; background: #fff; padding-top: 0px;">
                                    <p style="font-size: 14px; margin-bottom: 0px; margin-top: 5px; text-align: left;"><b style="float: left;">Date :</b> <span style="margin-left: 5px">{{date('d/m/Y')}}</span></p>
                                    <p style="font-size: 14px; margin-bottom: 0px; margin-top: 5px; text-align: left;"><b style="float: left;">Campaign Name :</b> <span style="margin-left: 5px">{{$getData['camping_name']}}</span></p>
                                    <p style="font-size: 14px; margin-bottom: 0px; margin-top: 5px; text-align: left;"><b style="float: left;">Prize Name :</b> <span style="margin-left: 5px">{{$getData['spinner_name']}}</span></p>
                                    <p style="font-size: 14px; margin-bottom: 0px; margin-top: 5px; text-align: left;"><b style="float: left;">Name :</b> <span style="margin-left: 5px">{{$getData['name']}}</span></p>
                                    <p style="font-size: 14px; margin-bottom: 0px; margin-top: 5px; text-align: left;"><b style="float: left;">Email :</b> <span style="margin-left: 5px">{{$getData['email']}}</span></p>

                                    <p style="font-size: 14px; margin-bottom: 0px; margin-top: 5px; text-align: left;"><b style="float: left;">Phone :</b> <span style="margin-left: 5px">{{$getData['phone']}}</span></p>
                                    <p style="font-size: 14px; margin-bottom: 0px; margin-top: 5px; text-align: justify;"><b style="float: left;">Screenshot :</b> <span style="margin-left: 5px"><img src="{{$getData['schreenshot']}}" alt="" width="90px"></span></p>

                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td  style="padding: 20px 20px; font-family: 'Open Sans',serif ; ">
                                <p style=" margin-top: 0px; color: #333333; line-height: 18px; font-size: 13px; text-align: center;">This e-mail is automatically generated. Answers to this email address will not be read.</p>


                                <p style="margin: 0px; color: #888888; font-size: 13px; text-align: center;"></p>
                            </td>
            </tr>

        </table>
    @endif

</body>
</html>
