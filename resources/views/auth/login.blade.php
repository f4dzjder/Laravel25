<form action="auth/login" method="post">
@csrf
<table>
        <tr>
                <td><label for="">email</label></td>
                <td><input type="text" name="email"></td>
        </tr>
        <tr>
                <td><label for="">password</label></td>
                <td><input type="text" name="passsword" id=""></td>
        </tr>
        <tr>
                <td><input type="submit"></td>
        </tr>
</table>
</form>
