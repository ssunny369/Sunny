<div class="container">
    <div class="d-flex justify-content-between">
        <h3>User List</h3>
        <a href="./?page=user/create" class="btn btn-success">Create now</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Picture</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $users = getUsers();
            $count = 1;
            while ($row = $users->fetch_object()) {
                ?>
                <tr>
                    <td><?php $count ?></td>
                    <td><img src="
                     <?php echo $row->picture ?? './assets/images/emptyuser.png' ?> 
                    "></td>
                    <td><?php echo $row->name ?></td>
                    <td>
                        <a href="./?page=user/update&id=<?php echo $row->id ?>" class="btn btn-primary">
                            Update <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path
                                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                            </svg>
                        </a>
                        <a href="./?page=user/delete&id=<?php echo $row->id ?>" class="btn btn-danger button-delete">
                            Delete <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                            </svg>
                        </a>
                    </td>
                </tr>
                <?php
                $count++;
            }
            ?>

        </tbody>
    </table>
</div>

<script>

    const btnDeletes = document.getElementsByClassName('button-delete');

    // console.log(btnDeletes)

    // btnDeletes.forEach(element =>{
    //     element.addEventListener('click', function(e){
    //         e.preventDefault();
    //         alert('click')
    //     })
    // })

    $(document).ready(function () {
        $('.button-delete').click(function (e) {
            e.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d63030",
                cancelButtonColor: "rgb(170, 150, 150)",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed){
                    window.location.href= $(this).attr('href');
                };
            });
        });









    });

</script>