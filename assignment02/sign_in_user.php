<?php
session_start();
    echo 'Welcome back,'.$_SESSION["authenticated_user"]['name'];

    <table>
        <tr>
            <th>Name: </th>
            <th>License Num: </th>
        </tr>

        <tr>
            <td><?=$_SESSION["authenticated_user"]['name'];?></td>
            <td><?=$_SESSION["authenticated_user"]['lic_no'];?></td>
        </tr>
    </table>   