<?php include_once("inc/header.php"); ?>
                        <a href="addpost.php" class="button">Add new post</a>
                        <table>
                            <thead>
                                <tr>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Username</th>
                                <th>Date</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Do coding with your first HTML Element</td>
                                <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, incidunt beatae ad, qui, consectetur corrupti nostrum veritatis facilis maxime quaerat excepturi illum iure tempora reprehenderit exercitationem nulla harum provident obcaecati non molestias consequuntur. Ea magni non ipsa sit neque nemo?</p></td>
                                <td>Admin</td>
                                <td><?php echo Date('g:i:a'); ?></td>
                                <td>
                                    <button class="button button-outline">Edit</button>
                                    <button class="button button-outline">Delete</button>
                                </td>
                                </tr>
                                <tr>
                                <td>Do coding with your first HTML Element</td>
                                <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, incidunt beatae ad, qui, consectetur corrupti nostrum veritatis facilis maxime quaerat excepturi illum iure tempora reprehenderit exercitationem nulla harum provident obcaecati non molestias consequuntur. Ea magni non ipsa sit neque nemo?</p></td>
                                <td>Admin</td>
                                <td><?php echo Date('g:i:a'); ?></td>
                                <td>
                                    <button class="button button-outline">Edit</button>
                                    <button class="button button-outline">Delete</button>
                                </td>
                                </tr>
                            </tbody>
                        </table>
<?php include_once("inc/footer.php"); ?>