<p>Dear {{ $admin->name }}</p>
<br>
<p>
    Your password on Laratest system was chnaged successfully.
    Here is your new credentials:
    <br>
    <b>Login ID: </b>{{ $admin->username }} or {{ $admin->email }}
    <br>
    <b>Password: </b>{{ $new_password }}
</p>
<br>
Please, keep your credentials confidential. Your username and password are your own credentials and you should never
share them with anybody else.
<p>
    Laratest will not be liable for any misuse of your username and password.
</p>
<br>
--------------------------------------------------------
<p>
    This email was automatically sent by Laratest system. Do not reply it.
</p>
