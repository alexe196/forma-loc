<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">№</th>
        <th scope="col">Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
    </tr>
    </thead>
    <tbody>
        <?php if(!empty($users)) : foreach($users as $user):  ?>
        <tr>
            <th scope="row"><?=$user['id']?></th>
            <td><?=$user['name']?></td>
            <td><?=$user['lastname']?></td>
            <td><?=$user['email']?></td>
        </tr>
        <?php endforeach; endif;?>
    </tbody>
</table>